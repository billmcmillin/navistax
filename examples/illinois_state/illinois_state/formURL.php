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

  for($x=0; $x<count($page_array); $x++)
  {
  	//if the item is a location, pull out the data
  	if(strpos($page_array[$x], 'col1">Location:') !== false)
  	{
  		  $page_array[$x] = preg_replace("/.*<td class=\"col2\">/", "", $page_array[$x]);
  		  $page_array[$x] = preg_replace("/<.*/", "", $page_array[$x]);
  		  $td_array[$validLine] = $page_array[$x];
  	  	//echo $td_array[$validLine].$validLine . "\n";
   		  $validLine++;
  	}
  	//if the item is a call number, pull out the data 	
  		if(strpos($page_array[$x], 'col1">Call Number') !== false)
  	{
  		  $page_array[$x] = preg_replace("/.*<td class=\"col2\">/", "", $page_array[$x]);
  		  $page_array[$x] = preg_replace("/<.*/", "", $page_array[$x]);
  		  $td_array[$validLine] = $page_array[$x];
  	  	//echo $td_array[$validLine].$validLine . "\n";
  		  $validLine++;
  	}
  	//if the item is a copy number pull number. Be careful to include all this so as not to include any notes that contain word copy.
  	
  		if(strpos($page_array[$x], 'col1">Copy:&nbsp; </td>') !== false)
  	{
  		  $page_array[$x] = preg_replace("/.*<td class=\"col2\">/", "", $page_array[$x]);
  		  $page_array[$x] = preg_replace("/<.*/", "", $page_array[$x]);
  		  $td_array[$validLine] = $page_array[$x];
  	  	//echo $td_array[$validLine].$validLine . "\n";
  		  $validLine++;
  	}
  	
  	  	//if the item is a status, pull out the data 	

  		if(strpos($page_array[$x], 'col1">Status:') !== false)
  	{
  		  $page_array[$x] = preg_replace("/.*<td class=\"col2\">/", "", $page_array[$x]);
  		  $page_array[$x] = preg_replace("/<.*/", "", $page_array[$x]);
  		  $td_array[$validLine] = $page_array[$x];
  	  //	echo $td_array[$validLine].$validLine . "\n";
  	    $validLine++;

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