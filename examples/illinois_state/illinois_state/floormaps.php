<?php
  if ((!isset($_GET['an'])) || (strlen($_GET['an']) <= 0)) {
    die("No map available.");
  } else {
    $idnum = substr($_GET['an'],strpos($_GET['an'],'.')+1);
  }
?>
<script type="text/javascript" src="jquery-1.11.1.js"></script>			
<script type="text/javascript">
$(document).ready(function() {
var $j = jQuery.noConflict();

var idnum = "<?php echo $idnum; ?>";
console.debug("Id num: "+idnum);


    $j.ajax({

        type: "GET",
        url: "formURL.php",
        data: 'idnum=' + idnum,
        success: function(json){
        console.debug("Logging JSON: "+json);
        //var data = JSON.parse(json);
        var data = json;
        processResult(data);
        },
         error: function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR.responseText);
    }

    }); // Ajax Call

function processResult(data){       

     //console.log(data);

    /*
    $j.each(data, function(key1, value1) {
                console.log( "key" + key1[0] + ": " + "value" + value1.callnum);
        
    });
    */
    headhtml = '<div class="mapHeader">Find this Item</div>';
    $j(headhtml).appendTo("#output");

    $j.each(data, function() {
      $j.each(this, function(name, value) {
      			
       // console.log(value.loc + value.callnumber + value.itemnum + value.itemavail);
        content = '<div class="mapItem">';
        content = '<p><strong>Location: </strong>' + value.loc + '</p>';
        content += '<p><strong>Call No: </strong>' + value.callnumber + '</p>';   
        content += '<p><strong>Status: </strong>' + value.itemavail + '</p>';    
        content += '<a href="getMap.php?callNum=' + value.callnumber + '&loc=' + value.loc + '">Show on a Map' + '</a>';
        content += '<hr />';

        content += '</div>';

      
     
      });
        $j(content).appendTo("#output");
     

    });
          


}    

}); //close doc ready

</script>
<link rel="stylesheet" type="text/css" href="maps.css" media="All">
<div id="output"></div>