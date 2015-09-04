<?php
  header("Access-Control-Allow-Origin: *");
  header('Content-Type: application/json');

  include("./include/LIB_http.php");
  include("./include/LIB_parse.php");

    if ($_GET['idnum']):
        $id = ($_GET['idnum']);
      
      $url = 'http://vufind.carli.illinois.edu/vf-isu/Record/AJAX?method=GetHoldings&id=isu_' . $id;
      
        getPage($url);

    endif;  

function getPage($url){
  //get the html
  $web_page = http_get($url, "");
  //make each tr element an element in an array
  $page_array = parse_array($web_page['FILE'], "<tr", "</tr");
  
  //set counter for valid line in html
  $validLine = 0;
  //set counter for # of items
  $objNum = 0;

  for($x=0; $x<count($page_array); $x++)
  {  
    /*Note: each item must have a location, so when a location is seen, that signals the start of a new object.
    Since we increment the location object after encountering it, we have to compensate for all other values of that
    object by subtracting 1 from the object number before multiplying it by 4 and adding the corresponding offset.
    */
    //if the item is a location, pull out the data
    if(strpos($page_array[$x], 'col1">Location:') !== false)
    {
        $page_array[$x] = preg_replace("/.*<td class=\"col2\">/", "", $page_array[$x]);
        $page_array[$x] = preg_replace("/<.*/", "", $page_array[$x]);
        $td_array[($objNum * 4)] = $page_array[$x];
        $validLine++;
        $objNum++;
    }
    //if the item is a call number, pull out the data   
    elseif(strpos($page_array[$x], 'col1">Call Number') !== false)
    {
        $page_array[$x] = preg_replace("/.*<td class=\"col2\">/", "", $page_array[$x]);
        $page_array[$x] = preg_replace("/<.*/", "", $page_array[$x]);
        $td_array[((($objNum -1) * 4) + 1)] = $page_array[$x];
        //echo $td_array[$validLine].$validLine . "\n";
        $validLine++;
    }
    //if the item is a copy number pull number. Be careful to include all this so as not to include any notes that contain the word copy.
    
    elseif(strpos($page_array[$x], 'col1">Copy:&nbsp; </td>') !== false)
    {
        $page_array[$x] = preg_replace("/.*<td class=\"col2\">/", "", $page_array[$x]);
        $page_array[$x] = preg_replace("/<.*/", "", $page_array[$x]);
        $td_array[((($objNum -1) * 4) + 2)] = $page_array[$x];
        //echo $td_array[$validLine].$validLine . "\n";
        $validLine++;
    }
    
        //if the item is a status, pull out the data  

    elseif(strpos($page_array[$x], 'col1">Status:') !== false)
    {
        $page_array[$x] = preg_replace("/.*<td class=\"col2\">/", "", $page_array[$x]);
        $page_array[$x] = preg_replace("/<.*/", "", $page_array[$x]);
        $td_array[((($objNum -1) * 4) + 3)] = $page_array[$x];
      //  echo $td_array[$validLine].$validLine . "\n";
        $validLine++;

    }
    else
    {
      $td_array[$validLine] = NULL;
    }
  }
    //send to the function that transforms lines into json
    getBooks($td_array);
}

//transforms data into json
function getBooks($td_array) {
        
    for($xx=0, $currentItem = 0; $xx<count($td_array); $xx += 4, $currentItem++)
  {
  $totalLines = count($td_array);

  $loc = $td_array[($xx + 0)];
  $callnum = $td_array[($xx + 1)];
  //$copynum = $td_array[($xx + 2)];
  $itemavail = $td_array[($xx + 3)];
  $numItems = ($totalLines /4);
  $totalItems = array();
  $itemArray = array();

  //echo $copynum . "<br />";
    for($xy=0; $xy<$numItems; $xy++)
      {
        $itemNum = $xy + 1;

        $totalItems[$xy]['itemnum'] = $itemNum;
        $totalItems[$xy]['loc'] = $loc;
        $totalItems[$xy]['callnumber'] = $callnum;
        $totalItems[$xy]['itemavail'] = $itemavail;

       
        }
        //get the values of the array to prepare to pass
        $json[] = array_values($totalItems);
   
}
        //pass json objects to js
        echo json_encode($json);

}

?>