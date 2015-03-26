<?php

include("simple_html_dom.php");
include("sortDewey.php");
class stdObject {
	public function __construct(array $arguments = array()) {
        if (!empty($arguments)) {
            foreach ($arguments as $property => $argument) {
                $this->{$property} = $argument;
            }
        }
    }
   public function __call($method, $arguments) {
        $arguments = array_merge(array("stdObject" => $this), $arguments); // Note: method argument 0 will always referred to the main class ($this).
        if (isset($this->{$method}) && is_callable($this->{$method})) {
            return call_user_func_array($this->{$method}, $arguments);
        } else {
            throw new Exception("Fatal error: Call to undefined method stdObject::{$method}()");
        }
    }
}
    $page = $_SERVER['HTTP_REFERER'];
	$locations = array();
	$callNum = array();
	$combined = array();    $callNum = htmlspecialchars($_GET["callNum"]);
	$loc = htmlspecialchars($_GET["loc"]);
    //result page that is displayed when user clicks on a link
	print "<html>";
	print "<head>";
    print "<style>";
	print "p {font: 18px/20px verdana, sans-serif;}";
    print ".main {margin-left: auto;
		 margin-right:auto;
		width: 50%;};
	form {border: 0;}
	img {margin-top: 15px;}
	div {border: 0;}
	div#error {margin-left:auto;
		 text-align:center;
		margin-right:auto;}
		div#helpText p{margin-left:auto;
		text-align:center;
		margin-right:auto;}
}";
print "</style>";
print "<body>";

print '<div class="main">';
//define locations array
//declare an object for each location and populate it
function makeLocArray(){
	global $locArray;//location "Brooklyn Stacks" 0.001 - 006.5A
	$locObj0= new stdObject();
	$locObj0->libName = 'Brooklyn';
	$locObj0->location = "Brooklyn Stacks";
	$locObj0->callNumBegin = '0.001';
	$locObj0->callNumEnd = '006.5A';
	$locObj0->imageFile = 'shelf1.gif';


//location "Brooklyn Stacks" 006.5A - 069.0285 C
	$locObj1= new stdObject();
	$locObj1->libName = 'Brooklyn';
	$locObj1->location = "Brooklyn Stacks";
	$locObj1->callNumBegin = '006.5A';
	$locObj1->callNumEnd = '069.0285 C';
	$locObj1->imageFile = 'shelf2.gif';


//location "Brooklyn Stacks" 069.0285 C - 111.1 K
	$locObj2= new stdObject();
	$locObj2->libName = 'Brooklyn';
	$locObj2->location = "Brooklyn Stacks";
	$locObj2->callNumBegin = '069.0285 C';
	$locObj2->callNumEnd = '111.1 K';
	$locObj2->imageFile = 'shelf3.gif';


//location "Brooklyn Stacks" 111.1 K - 136.1 S
	$locObj3= new stdObject();
	$locObj3->libName = 'Brooklyn';
	$locObj3->location = "Brooklyn Stacks";
	$locObj3->callNumBegin = '111.1 K';
	$locObj3->callNumEnd = '136.1 S';
	$locObj3->imageFile = 'shelf4.gif';


//location "Brooklyn Stacks" 136.1 S - 150.1952
	$locObj4= new stdObject();
	$locObj4->libName = 'Brooklyn';
	$locObj4->location = "Brooklyn Stacks";
	$locObj4->callNumBegin = '136.1 S';
	$locObj4->callNumEnd = '150.1952';
	$locObj4->imageFile = 'shelf5.gif';


//location "Brooklyn Stacks" 150.1952 - 155 T
	$locObj5= new stdObject();
	$locObj5->libName = 'Brooklyn';
	$locObj5->location = "Brooklyn Stacks";
	$locObj5->callNumBegin = '150.1952';
	$locObj5->callNumEnd = '155 T';
	$locObj5->imageFile = 'shelf6.gif';


//location "Brooklyn Stacks" 155 T - 160 J
	$locObj6= new stdObject();
	$locObj6->libName = 'Brooklyn';
	$locObj6->location = "Brooklyn Stacks";
	$locObj6->callNumBegin = '155 T';
	$locObj6->callNumEnd = '160 J';
	$locObj6->imageFile = 'shelf7.gif';


//location "Brooklyn Stacks" 160 J - 190 R
	$locObj7= new stdObject();
	$locObj7->libName = 'Brooklyn';
	$locObj7->location = "Brooklyn Stacks";
	$locObj7->callNumBegin = '160 J';
	$locObj7->callNumEnd = '190 R';
	$locObj7->imageFile = 'shelf8.gif';


//location "Brooklyn Stacks" 190 R - 194.9 W
	$locObj8= new stdObject();
	$locObj8->libName = 'Brooklyn';
	$locObj8->location = "Brooklyn Stacks";
	$locObj8->callNumBegin = '190 R';
	$locObj8->callNumEnd = '194.9 W';
	$locObj8->imageFile = 'shelf9.gif';


//location "Brooklyn Stacks" 194.9 W - 230.2 W
	$locObj9= new stdObject();
	$locObj9->libName = 'Brooklyn';
	$locObj9->location = "Brooklyn Stacks";
	$locObj9->callNumBegin = '194.9 W';
	$locObj9->callNumEnd = '230.2 W';
	$locObj9->imageFile = 'shelf10.gif';


//location "Brooklyn Stacks" 230.2 W - 290 N
	$locObj10= new stdObject();
	$locObj10->libName = 'Brooklyn';
	$locObj10->location = "Brooklyn Stacks";
	$locObj10->callNumBegin = '230.2 W';
	$locObj10->callNumEnd = '290 N';
	$locObj10->imageFile = 'shelf11.gif';


//location "Brooklyn Stacks" 290 N - 299.51 P
	$locObj11= new stdObject();
	$locObj11->libName = 'Brooklyn';
	$locObj11->location = "Brooklyn Stacks";
	$locObj11->callNumBegin = '290 N';
	$locObj11->callNumEnd = '299.51 P';
	$locObj11->imageFile = 'shelf12.gif';


//location "Brooklyn Stacks" 299.51 P - 301.16 T
	$locObj12= new stdObject();
	$locObj12->libName = 'Brooklyn';
	$locObj12->location = "Brooklyn Stacks";
	$locObj12->callNumBegin = '299.51 P';
	$locObj12->callNumEnd = '301.16 T';
	$locObj12->imageFile = 'shelf13.gif';


//location "Brooklyn Stacks" 301.16 T - 301.402 M
	$locObj13= new stdObject();
	$locObj13->libName = 'Brooklyn';
	$locObj13->location = "Brooklyn Stacks";
	$locObj13->callNumBegin = '301.16 T';
	$locObj13->callNumEnd = '301.402 M';
	$locObj13->imageFile = 'shelf14.gif';


//location "Brooklyn Stacks" 301.402 M - 301.62 0
	$locObj14= new stdObject();
	$locObj14->libName = 'Brooklyn';
	$locObj14->location = "Brooklyn Stacks";
	$locObj14->callNumBegin = '301.402 M';
	$locObj14->callNumEnd = '301.62 0';
	$locObj14->imageFile = 'shelf15.gif';


//location "Brooklyn Stacks" 301. 62 0 - 304.6
	$locObj15= new stdObject();
	$locObj15->libName = 'Brooklyn';
	$locObj15->location = "Brooklyn Stacks";
	$locObj15->callNumBegin = '301. 62 0';
	$locObj15->callNumEnd = '304.6';
	$locObj15->imageFile = 'shelf16.gif';


//location "Brooklyn Stacks" 304.6 - 305.89
	$locObj16= new stdObject();
	$locObj16->libName = 'Brooklyn';
	$locObj16->location = "Brooklyn Stacks";
	$locObj16->callNumBegin = '304.6';
	$locObj16->callNumEnd = '305.89';
	$locObj16->imageFile = 'shelf17.gif';


//location "Brooklyn Stacks" 305.89 - 306.85
	$locObj17= new stdObject();
	$locObj17->libName = 'Brooklyn';
	$locObj17->location = "Brooklyn Stacks";
	$locObj17->callNumBegin = '305.89';
	$locObj17->callNumEnd = '306.85';
	$locObj17->imageFile = 'shelf18.gif';


//location "Brooklyn Stacks" 306.85 - 307.7609
	$locObj18= new stdObject();
	$locObj18->libName = 'Brooklyn';
	$locObj18->location = "Brooklyn Stacks";
	$locObj18->callNumBegin = '306.85';
	$locObj18->callNumEnd = '307.7609';
	$locObj18->imageFile = 'shelf19.gif';


//location "Brooklyn Stacks" 307.7609 - 309.18
	$locObj19= new stdObject();
	$locObj19->libName = 'Brooklyn';
	$locObj19->location = "Brooklyn Stacks";
	$locObj19->callNumBegin = '307.7609';
	$locObj19->callNumEnd = '309.18';
	$locObj19->imageFile = 'shelf20.gif';


//location "Brooklyn Stacks" 309.18 - 320.94
	$locObj20= new stdObject();
	$locObj20->libName = 'Brooklyn';
	$locObj20->location = "Brooklyn Stacks";
	$locObj20->callNumBegin = '309.18';
	$locObj20->callNumEnd = '320.94';
	$locObj20->imageFile = 'shelf21.gif';


//location "Brooklyn Stacks" 320.94 - 324.6 K
	$locObj21= new stdObject();
	$locObj21->libName = 'Brooklyn';
	$locObj21->location = "Brooklyn Stacks";
	$locObj21->callNumBegin = '320.94';
	$locObj21->callNumEnd = '324.6 K';
	$locObj21->imageFile = 'shelf22.gif';


//location "Brooklyn Stacks" 324.6 K - 327.73 L
	$locObj22= new stdObject();
	$locObj22->libName = 'Brooklyn';
	$locObj22->location = "Brooklyn Stacks";
	$locObj22->callNumBegin = '324.6 K';
	$locObj22->callNumEnd = '327.73 L';
	$locObj22->imageFile = 'shelf23.gif';


//location "Brooklyn Stacks" 327.73 L - 330.91732
	$locObj23= new stdObject();
	$locObj23->libName = 'Brooklyn';
	$locObj23->location = "Brooklyn Stacks";
	$locObj23->callNumBegin = '327.73 L';
	$locObj23->callNumEnd = '330.91732';
	$locObj23->imageFile = 'shelf24.gif';


//location "Brooklyn Stacks" 330.91732 - 331.85 K
	$locObj24= new stdObject();
	$locObj24->libName = 'Brooklyn';
	$locObj24->location = "Brooklyn Stacks";
	$locObj24->callNumBegin = '330.91732';
	$locObj24->callNumEnd = '331.85 K';
	$locObj24->imageFile = 'shelf25.gif';


//location "Brooklyn Stacks" 331.85 K - 335 C
	$locObj25= new stdObject();
	$locObj25->libName = 'Brooklyn';
	$locObj25->location = "Brooklyn Stacks";
	$locObj25->callNumBegin = '331.85 K';
	$locObj25->callNumEnd = '335 C';
	$locObj25->imageFile = 'shelf26.gif';


//location "Brooklyn Stacks" 335 C - 338.477 H
	$locObj26= new stdObject();
	$locObj26->libName = 'Brooklyn';
	$locObj26->location = "Brooklyn Stacks";
	$locObj26->callNumBegin = '335 C';
	$locObj26->callNumEnd = '338.477 H';
	$locObj26->imageFile = 'shelf27.gif';


//location "Brooklyn Stacks" 338.477 H - 342.04
	$locObj27= new stdObject();
	$locObj27->libName = 'Brooklyn';
	$locObj27->location = "Brooklyn Stacks";
	$locObj27->callNumBegin = '338.477 H';
	$locObj27->callNumEnd = '342.04';
	$locObj27->imageFile = 'shelf28.gif';


//location "Brooklyn Stacks" 342.04 - 353.008
	$locObj28= new stdObject();
	$locObj28->libName = 'Brooklyn';
	$locObj28->location = "Brooklyn Stacks";
	$locObj28->callNumBegin = '342.04';
	$locObj28->callNumEnd = '353.008';
	$locObj28->imageFile = 'shelf29.gif';


//location "Brooklyn Stacks" 353.008 - 362.293
	$locObj29= new stdObject();
	$locObj29->libName = 'Brooklyn';
	$locObj29->location = "Brooklyn Stacks";
	$locObj29->callNumBegin = '353.008';
	$locObj29->callNumEnd = '362.293';
	$locObj29->imageFile = 'shelf30.gif';


//location "Brooklyn Stacks" 362.293 - 364.152
	$locObj30= new stdObject();
	$locObj30->libName = 'Brooklyn';
	$locObj30->location = "Brooklyn Stacks";
	$locObj30->callNumBegin = '362.293';
	$locObj30->callNumEnd = '364.152';
	$locObj30->imageFile = 'shelf31.gif';


//location "Brooklyn Stacks" 364.152 - 371.01 G
	$locObj31= new stdObject();
	$locObj31->libName = 'Brooklyn';
	$locObj31->location = "Brooklyn Stacks";
	$locObj31->callNumBegin = '364.152';
	$locObj31->callNumEnd = '371.01 G';
	$locObj31->imageFile = 'shelf32.gif';


//location "Brooklyn Stacks" 371.01 G - 378.1981 B
	$locObj32= new stdObject();
	$locObj32->libName = 'Brooklyn';
	$locObj32->location = "Brooklyn Stacks";
	$locObj32->callNumBegin = '371.01 G';
	$locObj32->callNumEnd = '378.1981 B';
	$locObj32->imageFile = 'shelf33.gif';


//location "Brooklyn Stacks" 378.1981 B - 388.32
	$locObj33= new stdObject();
	$locObj33->libName = 'Brooklyn';
	$locObj33->location = "Brooklyn Stacks";
	$locObj33->callNumBegin = '378.1981 B';
	$locObj33->callNumEnd = '388.32';
	$locObj33->imageFile = 'shelf34.gif';


//location "Brooklyn Stacks" 388.32 - 391.0904 F
	$locObj34= new stdObject();
	$locObj34->libName = 'Brooklyn';
	$locObj34->location = "Brooklyn Stacks";
	$locObj34->callNumBegin = '388.32';
	$locObj34->callNumEnd = '391.0904 F';
	$locObj34->imageFile = 'shelf35.gif';


//location "Brooklyn Stacks" 391.0904 F - 391.2
	$locObj35= new stdObject();
	$locObj35->libName = 'Brooklyn';
	$locObj35->location = "Brooklyn Stacks";
	$locObj35->callNumBegin = '391.0904 F';
	$locObj35->callNumEnd = '391.2';
	$locObj35->imageFile = 'shelf36.gif';


//location "Brooklyn Stacks" 391.2 - 398.209
	$locObj36= new stdObject();
	$locObj36->libName = 'Brooklyn';
	$locObj36->location = "Brooklyn Stacks";
	$locObj36->callNumBegin = '391.2';
	$locObj36->callNumEnd = '398.209';
	$locObj36->imageFile = 'shelf37.gif';


//location "Brooklyn Stacks" 398.209 - 500 B
	$locObj37= new stdObject();
	$locObj37->libName = 'Brooklyn';
	$locObj37->location = "Brooklyn Stacks";
	$locObj37->callNumBegin = '398.209';
	$locObj37->callNumEnd = '500 B';
	$locObj37->imageFile = 'shelf38.gif';


//location "Brooklyn Stacks" 500 B - 512.86 S
	$locObj38= new stdObject();
	$locObj38->libName = 'Brooklyn';
	$locObj38->location = "Brooklyn Stacks";
	$locObj38->callNumBegin = '500 B';
	$locObj38->callNumEnd = '512.86 S';
	$locObj38->imageFile = 'shelf39.gif';


//location "Brooklyn Stacks" 512.86 S - 523.112 H
	$locObj39= new stdObject();
	$locObj39->libName = 'Brooklyn';
	$locObj39->location = "Brooklyn Stacks";
	$locObj39->callNumBegin = '512.86 S';
	$locObj39->callNumEnd = '523.112 H';
	$locObj39->imageFile = 'shelf40.gif';


//location "Brooklyn Stacks" 523.112 H - 535.3 M
	$locObj40= new stdObject();
	$locObj40->libName = 'Brooklyn';
	$locObj40->location = "Brooklyn Stacks";
	$locObj40->callNumBegin = '523.112 H';
	$locObj40->callNumEnd = '535.3 M';
	$locObj40->imageFile = 'shelf41.gif';


//location "Brooklyn Stacks" 535.3 M - 547.73
	$locObj41= new stdObject();
	$locObj41->libName = 'Brooklyn';
	$locObj41->location = "Brooklyn Stacks";
	$locObj41->callNumBegin = '535.3 M';
	$locObj41->callNumEnd = '547.73';
	$locObj41->imageFile = 'shelf42.gif';


//location "Brooklyn Stacks" 547.73 - 574.192
	$locObj42= new stdObject();
	$locObj42->libName = 'Brooklyn';
	$locObj42->location = "Brooklyn Stacks";
	$locObj42->callNumBegin = '547.73';
	$locObj42->callNumEnd = '574.192';
	$locObj42->imageFile = 'shelf43.gif';


//location "Brooklyn Stacks" 574.192 - 597.8
	$locObj43= new stdObject();
	$locObj43->libName = 'Brooklyn';
	$locObj43->location = "Brooklyn Stacks";
	$locObj43->callNumBegin = '574.192';
	$locObj43->callNumEnd = '597.8';
	$locObj43->imageFile = 'shelf44.gif';


//location "Brooklyn Stacks" 597.8 - 612.67
	$locObj44= new stdObject();
	$locObj44->libName = 'Brooklyn';
	$locObj44->location = "Brooklyn Stacks";
	$locObj44->callNumBegin = '597.8';
	$locObj44->callNumEnd = '612.67';
	$locObj44->imageFile = 'shelf45.gif';


//location "Brooklyn Stacks" 612.67 - 616.8914
	$locObj45= new stdObject();
	$locObj45->libName = 'Brooklyn';
	$locObj45->location = "Brooklyn Stacks";
	$locObj45->callNumBegin = '612.67';
	$locObj45->callNumEnd = '616.8914';
	$locObj45->imageFile = 'shelf46.gif';


//location "Brooklyn Stacks" 616.8914 - 620.19
	$locObj46= new stdObject();
	$locObj46->libName = 'Brooklyn';
	$locObj46->location = "Brooklyn Stacks";
	$locObj46->callNumBegin = '616.8914';
	$locObj46->callNumEnd = '620.19';
	$locObj46->imageFile = 'shelf47.gif';


//location "Brooklyn Stacks" 620.19 - 623.823
	$locObj47= new stdObject();
	$locObj47->libName = 'Brooklyn';
	$locObj47->location = "Brooklyn Stacks";
	$locObj47->callNumBegin = '620.19';
	$locObj47->callNumEnd = '623.823';
	$locObj47->imageFile = 'shelf48.gif';


//location "Brooklyn Stacks" 623.823 - 629.22
	$locObj48= new stdObject();
	$locObj48->libName = 'Brooklyn';
	$locObj48->location = "Brooklyn Stacks";
	$locObj48->callNumBegin = '623.823';
	$locObj48->callNumEnd = '629.22';
	$locObj48->imageFile = 'shelf49.gif';


//location "Brooklyn Stacks" 629.22 - 642.5 S
	$locObj49= new stdObject();
	$locObj49->libName = 'Brooklyn';
	$locObj49->location = "Brooklyn Stacks";
	$locObj49->callNumBegin = '629.22';
	$locObj49->callNumEnd = '642.5 S';
	$locObj49->imageFile = 'shelf50.gif';


//location "Brooklyn Stacks" 642.5 S - 658.022
	$locObj50= new stdObject();
	$locObj50->libName = 'Brooklyn';
	$locObj50->location = "Brooklyn Stacks";
	$locObj50->callNumBegin = '642.5 S';
	$locObj50->callNumEnd = '658.022';
	$locObj50->imageFile = 'shelf51.gif';


//location "Brooklyn Stacks" 658.022 - 658.834
	$locObj51= new stdObject();
	$locObj51->libName = 'Brooklyn';
	$locObj51->location = "Brooklyn Stacks";
	$locObj51->callNumBegin = '658.022';
	$locObj51->callNumEnd = '658.834';
	$locObj51->imageFile = 'shelf52.gif';


//location "Brooklyn Stacks" 658.834 - 666.4 P
	$locObj52= new stdObject();
	$locObj52->libName = 'Brooklyn';
	$locObj52->location = "Brooklyn Stacks";
	$locObj52->callNumBegin = '658.834';
	$locObj52->callNumEnd = '666.4 P';
	$locObj52->imageFile = 'shelf53.gif';


//location "Brooklyn Stacks" 666.4 P - 686.20903
	$locObj53= new stdObject();
	$locObj53->libName = 'Brooklyn';
	$locObj53->location = "Brooklyn Stacks";
	$locObj53->callNumBegin = '666.4 P';
	$locObj53->callNumEnd = '686.20903';
	$locObj53->imageFile = 'shelf54.gif';


//location "Brooklyn Stacks" 686.20904 - 690.0973 B
	$locObj54= new stdObject();
	$locObj54->libName = 'Brooklyn';
	$locObj54->location = "Brooklyn Stacks";
	$locObj54->callNumBegin = '686.20904';
	$locObj54->callNumEnd = '690.0973 B';
	$locObj54->imageFile = 'shelf55.gif';


//location "Brooklyn Stacks" 690.0973 C - 699
	$locObj55= new stdObject();
	$locObj55->libName = 'Brooklyn';
	$locObj55->location = "Brooklyn Stacks";
	$locObj55->callNumBegin = '690.0973 C';
	$locObj55->callNumEnd = '699';
	$locObj55->imageFile = 'shelf56.gif';


//location "Brooklyn Stacks" 700 A - 701 F
	$locObj56= new stdObject();
	$locObj56->libName = 'Brooklyn';
	$locObj56->location = "Brooklyn Stacks";
	$locObj56->callNumBegin = '700 A';
	$locObj56->callNumEnd = '701 F';
	$locObj56->imageFile = 'shelf57.gif';


//location "Brooklyn Stacks" 701 F - 701.8
	$locObj57= new stdObject();
	$locObj57->libName = 'Brooklyn';
	$locObj57->location = "Brooklyn Stacks";
	$locObj57->callNumBegin = '701 F';
	$locObj57->callNumEnd = '701.8';
	$locObj57->imageFile = 'shelf58.gif';


//location "Brooklyn Stacks" 701.8 - 704.042 L
	$locObj58= new stdObject();
	$locObj58->libName = 'Brooklyn';
	$locObj58->location = "Brooklyn Stacks";
	$locObj58->callNumBegin = '701.8';
	$locObj58->callNumEnd = '704.042 L';
	$locObj58->imageFile = 'shelf59.gif';


//location "Brooklyn Stacks" 704.042 L - 704.94894
	$locObj59= new stdObject();
	$locObj59->libName = 'Brooklyn';
	$locObj59->location = "Brooklyn Stacks";
	$locObj59->callNumBegin = '704.042 L';
	$locObj59->callNumEnd = '704.94894';
	$locObj59->imageFile = 'shelf60.gif';


//location "Brooklyn Stacks" 704.94894 - 707.092 D
	$locObj60= new stdObject();
	$locObj60->libName = 'Brooklyn';
	$locObj60->location = "Brooklyn Stacks";
	$locObj60->callNumBegin = '704.94894';
	$locObj60->callNumEnd = '707.092 D';
	$locObj60->imageFile = 'shelf61.gif';


//location "Brooklyn Stacks" 707.092 D - 708.194 H
	$locObj61= new stdObject();
	$locObj61->libName = 'Brooklyn';
	$locObj61->location = "Brooklyn Stacks";
	$locObj61->callNumBegin = '707.092 D';
	$locObj61->callNumEnd = '708.194 H';
	$locObj61->imageFile = 'shelf62.gif';


//location "Brooklyn Stacks" 708.194 H - 709 S
	$locObj62= new stdObject();
	$locObj62->libName = 'Brooklyn';
	$locObj62->location = "Brooklyn Stacks";
	$locObj62->callNumBegin = '708.194 H';
	$locObj62->callNumEnd = '709 S';
	$locObj62->imageFile = 'shelf63.gif';


//location "Brooklyn Stacks" 709 S - 709.034 A
	$locObj63= new stdObject();
	$locObj63->libName = 'Brooklyn';
	$locObj63->location = "Brooklyn Stacks";
	$locObj63->callNumBegin = '709 S';
	$locObj63->callNumEnd = '709.034 A';
	$locObj63->imageFile = 'shelf64.gif';


//location "Brooklyn Stacks" 709.034 A - 709.04 K
	$locObj64= new stdObject();
	$locObj64->libName = 'Brooklyn';
	$locObj64->location = "Brooklyn Stacks";
	$locObj64->callNumBegin = '709.034 A';
	$locObj64->callNumEnd = '709.04 K';
	$locObj64->imageFile = 'shelf65.gif';


//location "Brooklyn Stacks" 709.04 K - 709.0407 B
	$locObj65= new stdObject();
	$locObj65->libName = 'Brooklyn';
	$locObj65->location = "Brooklyn Stacks";
	$locObj65->callNumBegin = '709.04 K';
	$locObj65->callNumEnd = '709.0407 B';
	$locObj65->imageFile = 'shelf66.gif';


//location "Brooklyn Stacks" 709.0407 B - 709.04076 M
	$locObj66= new stdObject();
	$locObj66->libName = 'Brooklyn';
	$locObj66->location = "Brooklyn Stacks";
	$locObj66->callNumBegin = '709.0407 B';
	$locObj66->callNumEnd = '709.04076 M';
	$locObj66->imageFile = 'shelf67.gif';


//location "Brooklyn Stacks" 709.04076 M - 709.4 M
	$locObj67= new stdObject();
	$locObj67->libName = 'Brooklyn';
	$locObj67->location = "Brooklyn Stacks";
	$locObj67->callNumBegin = '709.04076 M';
	$locObj67->callNumEnd = '709.4 M';
	$locObj67->imageFile = 'shelf68.gif';


//location "Brooklyn Stacks" 709.4 M - 709.45 H
	$locObj68= new stdObject();
	$locObj68->libName = 'Brooklyn';
	$locObj68->location = "Brooklyn Stacks";
	$locObj68->callNumBegin = '709.4 M';
	$locObj68->callNumEnd = '709.45 H';
	$locObj68->imageFile = 'shelf69.gif';


//location "Brooklyn Stacks" 709.45 H - 709.51 M
	$locObj69= new stdObject();
	$locObj69->libName = 'Brooklyn';
	$locObj69->location = "Brooklyn Stacks";
	$locObj69->callNumBegin = '709.45 H';
	$locObj69->callNumEnd = '709.51 M';
	$locObj69->imageFile = 'shelf70.gif';


//location "Brooklyn Stacks" 709.51 M - 709.72 G
	$locObj70= new stdObject();
	$locObj70->libName = 'Brooklyn';
	$locObj70->location = "Brooklyn Stacks";
	$locObj70->callNumBegin = '709.51 M';
	$locObj70->callNumEnd = '709.72 G';
	$locObj70->imageFile = 'shelf71.gif';


//location "Brooklyn Stacks" 709.72 G - 709.73 V
	$locObj71= new stdObject();
	$locObj71->libName = 'Brooklyn';
	$locObj71->location = "Brooklyn Stacks";
	$locObj71->callNumBegin = '709.72 G';
	$locObj71->callNumEnd = '709.73 V';
	$locObj71->imageFile = 'shelf72.gif';


//location "Brooklyn Stacks" 709.73 V - 711.4 C
	$locObj72= new stdObject();
	$locObj72->libName = 'Brooklyn';
	$locObj72->location = "Brooklyn Stacks";
	$locObj72->callNumBegin = '709.73 V';
	$locObj72->callNumEnd = '711.4 C';
	$locObj72->imageFile = 'shelf73.gif';


//location "Brooklyn Stacks" 711.4 C - 711.942 D
	$locObj73= new stdObject();
	$locObj73->libName = 'Brooklyn';
	$locObj73->location = "Brooklyn Stacks";
	$locObj73->callNumBegin = '711.4 C';
	$locObj73->callNumEnd = '711.942 D';
	$locObj73->imageFile = 'shelf74.gif';


//location "Brooklyn Stacks" 711.942 D - 712.0949
	$locObj74= new stdObject();
	$locObj74->libName = 'Brooklyn';
	$locObj74->location = "Brooklyn Stacks";
	$locObj74->callNumBegin = '711.942 D';
	$locObj74->callNumEnd = '712.0949';
	$locObj74->imageFile = 'shelf75.gif';


//location "Brooklyn Stacks" 712.0949 - 720.1 C
	$locObj75= new stdObject();
	$locObj75->libName = 'Brooklyn';
	$locObj75->location = "Brooklyn Stacks";
	$locObj75->callNumBegin = '712.0949';
	$locObj75->callNumEnd = '720.1 C';
	$locObj75->imageFile = 'shelf76.gif';


//location "Brooklyn Stacks" 720.1 C - 720.284T
	$locObj76= new stdObject();
	$locObj76->libName = 'Brooklyn';
	$locObj76->location = "Brooklyn Stacks";
	$locObj76->callNumBegin = '720.1 C';
	$locObj76->callNumEnd = '720.284T';
	$locObj76->imageFile = 'shelf77.gif';


//location "Brooklyn Stacks" 720.284T - 720.87A
	$locObj77= new stdObject();
	$locObj77->libName = 'Brooklyn';
	$locObj77->location = "Brooklyn Stacks";
	$locObj77->callNumBegin = '720.284T';
	$locObj77->callNumEnd = '720.87A';
	$locObj77->imageFile = 'shelf78.gif';


//location "Brooklyn Stacks" 720.87A - 720.942L
	$locObj78= new stdObject();
	$locObj78->libName = 'Brooklyn';
	$locObj78->location = "Brooklyn Stacks";
	$locObj78->callNumBegin = '720.87A';
	$locObj78->callNumEnd = '720.942L';
	$locObj78->imageFile = 'shelf79.gif';


//location "Brooklyn Stacks" 720.942L - 720.944V
	$locObj79= new stdObject();
	$locObj79->libName = 'Brooklyn';
	$locObj79->location = "Brooklyn Stacks";
	$locObj79->callNumBegin = '720.942L';
	$locObj79->callNumEnd = '720.944V';
	$locObj79->imageFile = 'shelf80.gif';


//location "Brooklyn Stacks" 720.944V - 720.947K
	$locObj80= new stdObject();
	$locObj80->libName = 'Brooklyn';
	$locObj80->location = "Brooklyn Stacks";
	$locObj80->callNumBegin = '720.944V';
	$locObj80->callNumEnd = '720.947K';
	$locObj80->imageFile = 'shelf81.gif';


//location "Brooklyn Stacks" 720.947K - 720.952A
	$locObj81= new stdObject();
	$locObj81->libName = 'Brooklyn';
	$locObj81->location = "Brooklyn Stacks";
	$locObj81->callNumBegin = '720.947K';
	$locObj81->callNumEnd = '720.952A';
	$locObj81->imageFile = 'shelf82.gif';


//location "Brooklyn Stacks" 720.952A - 720.973D
	$locObj82= new stdObject();
	$locObj82->libName = 'Brooklyn';
	$locObj82->location = "Brooklyn Stacks";
	$locObj82->callNumBegin = '720.952A';
	$locObj82->callNumEnd = '720.973D';
	$locObj82->imageFile = 'shelf83.gif';


//location "Brooklyn Stacks" 720.973D - 720.973L
	$locObj83= new stdObject();
	$locObj83->libName = 'Brooklyn';
	$locObj83->location = "Brooklyn Stacks";
	$locObj83->callNumBegin = '720.973D';
	$locObj83->callNumEnd = '720.973L';
	$locObj83->imageFile = 'shelf84.gif';


//location "Brooklyn Stacks" 720.973L - 720.973S
	$locObj84= new stdObject();
	$locObj84->libName = 'Brooklyn';
	$locObj84->location = "Brooklyn Stacks";
	$locObj84->callNumBegin = '720.973L';
	$locObj84->callNumEnd = '720.973S';
	$locObj84->imageFile = 'shelf85.gif';


//location "Brooklyn Stacks" 720.973S - 720.9747D
	$locObj85= new stdObject();
	$locObj85->libName = 'Brooklyn';
	$locObj85->location = "Brooklyn Stacks";
	$locObj85->callNumBegin = '720.973S';
	$locObj85->callNumEnd = '720.9747D';
	$locObj85->imageFile = 'shelf86.gif';


//location "Brooklyn Stacks" 720.9747D - 721 R
	$locObj86= new stdObject();
	$locObj86->libName = 'Brooklyn';
	$locObj86->location = "Brooklyn Stacks";
	$locObj86->callNumBegin = '720.9747D';
	$locObj86->callNumEnd = '721 R';
	$locObj86->imageFile = 'shelf87.gif';


//location "Brooklyn Stacks" 721 R - 724.1R
	$locObj87= new stdObject();
	$locObj87->libName = 'Brooklyn';
	$locObj87->location = "Brooklyn Stacks";
	$locObj87->callNumBegin = '721 R';
	$locObj87->callNumEnd = '724.1R';
	$locObj87->imageFile = 'shelf88.gif';


//location "Brooklyn Stacks" 724.1R - 724.9M
	$locObj88= new stdObject();
	$locObj88->libName = 'Brooklyn';
	$locObj88->location = "Brooklyn Stacks";
	$locObj88->callNumBegin = '724.1R';
	$locObj88->callNumEnd = '724.9M';
	$locObj88->imageFile = 'shelf89.gif';


//location "Brooklyn Stacks" 724.9M - 725.7P
	$locObj89= new stdObject();
	$locObj89->libName = 'Brooklyn';
	$locObj89->location = "Brooklyn Stacks";
	$locObj89->callNumBegin = '724.9M';
	$locObj89->callNumEnd = '725.7P';
	$locObj89->imageFile = 'shelf90.gif';


//location "Brooklyn Stacks" 725.7P - 726.7B
	$locObj90= new stdObject();
	$locObj90->libName = 'Brooklyn';
	$locObj90->location = "Brooklyn Stacks";
	$locObj90->callNumBegin = '725.7P';
	$locObj90->callNumEnd = '726.7B';
	$locObj90->imageFile = 'shelf91.gif';


//location "Brooklyn Stacks" 726.7B - 728.0942S
	$locObj91= new stdObject();
	$locObj91->libName = 'Brooklyn';
	$locObj91->location = "Brooklyn Stacks";
	$locObj91->callNumBegin = '726.7B';
	$locObj91->callNumEnd = '728.0942S';
	$locObj91->imageFile = 'shelf92.gif';


//location "Brooklyn Stacks" 728.0942S - 728.6W
	$locObj92= new stdObject();
	$locObj92->libName = 'Brooklyn';
	$locObj92->location = "Brooklyn Stacks";
	$locObj92->callNumBegin = '728.0942S';
	$locObj92->callNumEnd = '728.6W';
	$locObj92->imageFile = 'shelf93.gif';


//location "Brooklyn Stacks" 728.6W - 728.82094K
	$locObj93= new stdObject();
	$locObj93->libName = 'Brooklyn';
	$locObj93->location = "Brooklyn Stacks";
	$locObj93->callNumBegin = '728.6W';
	$locObj93->callNumEnd = '728.82094K';
	$locObj93->imageFile = 'shelf94.gif';


//location "Brooklyn Stacks" 728.82094K - 730H
	$locObj94= new stdObject();
	$locObj94->libName = 'Brooklyn';
	$locObj94->location = "Brooklyn Stacks";
	$locObj94->callNumBegin = '728.82094K';
	$locObj94->callNumEnd = '730H';
	$locObj94->imageFile = 'shelf95.gif';


//location "Brooklyn Stacks" 730H - 730.945P
	$locObj95= new stdObject();
	$locObj95->libName = 'Brooklyn';
	$locObj95->location = "Brooklyn Stacks";
	$locObj95->callNumBegin = '730H';
	$locObj95->callNumEnd = '730.945P';
	$locObj95->imageFile = 'shelf96.gif';


//location "Brooklyn Stacks" 730.945P - 730.973
	$locObj96= new stdObject();
	$locObj96->libName = 'Brooklyn';
	$locObj96->location = "Brooklyn Stacks";
	$locObj96->callNumBegin = '730.945P';
	$locObj96->callNumEnd = '730.973';
	$locObj96->imageFile = 'shelf97.gif';


//location "Brooklyn Stacks" 730.973 - 735.23S
	$locObj97= new stdObject();
	$locObj97->libName = 'Brooklyn';
	$locObj97->location = "Brooklyn Stacks";
	$locObj97->callNumBegin = '730.973';
	$locObj97->callNumEnd = '735.23S';
	$locObj97->imageFile = 'shelf98.gif';


//location "Brooklyn Stacks" 735.23S - 738.37B
	$locObj98= new stdObject();
	$locObj98->libName = 'Brooklyn';
	$locObj98->location = "Brooklyn Stacks";
	$locObj98->callNumBegin = '735.23S';
	$locObj98->callNumEnd = '738.37B';
	$locObj98->imageFile = 'shelf99.gif';


//location "Brooklyn Stacks" 738.37B - 741 A784
	$locObj99= new stdObject();
	$locObj99->libName = 'Brooklyn';
	$locObj99->location = "Brooklyn Stacks";
	$locObj99->callNumBegin = '738.37B';
	$locObj99->callNumEnd = '741 A784';
	$locObj99->imageFile = 'shelf100.gif';


//location "Brooklyn Stacks" 741 A784 - 741.24W
	$locObj100= new stdObject();
	$locObj100->libName = 'Brooklyn';
	$locObj100->location = "Brooklyn Stacks";
	$locObj100->callNumBegin = '741 A784';
	$locObj100->callNumEnd = '741.24W';
	$locObj100->imageFile = 'shelf101.gif';


//location "Brooklyn Stacks" 741.24W - 741.5973S
	$locObj101= new stdObject();
	$locObj101->libName = 'Brooklyn';
	$locObj101->location = "Brooklyn Stacks";
	$locObj101->callNumBegin = '741.24W';
	$locObj101->callNumEnd = '741.5973S';
	$locObj101->imageFile = 'shelf102.gif';


//location "Brooklyn Stacks" 741.5973S - 741.6
	$locObj102= new stdObject();
	$locObj102->libName = 'Brooklyn';
	$locObj102->location = "Brooklyn Stacks";
	$locObj102->callNumBegin = '741.5973S';
	$locObj102->callNumEnd = '741.6';
	$locObj102->imageFile = 'shelf103.gif';


//location "Brooklyn Stacks" 741.6 - 741.6092R
	$locObj103= new stdObject();
	$locObj103->libName = 'Brooklyn';
	$locObj103->location = "Brooklyn Stacks";
	$locObj103->callNumBegin = '741.6';
	$locObj103->callNumEnd = '741.6092R';
	$locObj103->imageFile = 'shelf104.gif';


//location "Brooklyn Stacks" 741.6092R - 741.66B
	$locObj104= new stdObject();
	$locObj104->libName = 'Brooklyn';
	$locObj104->location = "Brooklyn Stacks";
	$locObj104->callNumBegin = '741.6092R';
	$locObj104->callNumEnd = '741.66B';
	$locObj104->imageFile = 'shelf105.gif';


//location "Brooklyn Stacks" 741.66B - 741.904T
	$locObj105= new stdObject();
	$locObj105->libName = 'Brooklyn';
	$locObj105->location = "Brooklyn Stacks";
	$locObj105->callNumBegin = '741.66B';
	$locObj105->callNumEnd = '741.904T';
	$locObj105->imageFile = 'shelf106.gif';


//location "Brooklyn Stacks" 741.904T - 741.945B
	$locObj106= new stdObject();
	$locObj106->libName = 'Brooklyn';
	$locObj106->location = "Brooklyn Stacks";
	$locObj106->callNumBegin = '741.904T';
	$locObj106->callNumEnd = '741.945B';
	$locObj106->imageFile = 'shelf107.gif';


//location "Brooklyn Stacks" 741.945B - 743.49C
	$locObj107= new stdObject();
	$locObj107->libName = 'Brooklyn';
	$locObj107->location = "Brooklyn Stacks";
	$locObj107->callNumBegin = '741.945B';
	$locObj107->callNumEnd = '743.49C';
	$locObj107->imageFile = 'shelf108.gif';


//location "Brooklyn Stacks" 743.49C - 745.1K
	$locObj108= new stdObject();
	$locObj108->libName = 'Brooklyn';
	$locObj108->location = "Brooklyn Stacks";
	$locObj108->callNumBegin = '743.49C';
	$locObj108->callNumEnd = '745.1K';
	$locObj108->imageFile = 'shelf109.gif';


//location "Brooklyn Stacks" 745.1K - 745.4I
	$locObj109= new stdObject();
	$locObj109->libName = 'Brooklyn';
	$locObj109->location = "Brooklyn Stacks";
	$locObj109->callNumBegin = '745.1K';
	$locObj109->callNumEnd = '745.4I';
	$locObj109->imageFile = 'shelf110.gif';


//location "Brooklyn Stacks" 745.4I - 745.5F
	$locObj110= new stdObject();
	$locObj110->libName = 'Brooklyn';
	$locObj110->location = "Brooklyn Stacks";
	$locObj110->callNumBegin = '745.4I';
	$locObj110->callNumEnd = '745.5F';
	$locObj110->imageFile = 'shelf111.gif';


//location "Brooklyn Stacks" 745.5F - 745.92Y
	$locObj111= new stdObject();
	$locObj111->libName = 'Brooklyn';
	$locObj111->location = "Brooklyn Stacks";
	$locObj111->callNumBegin = '745.5F';
	$locObj111->callNumEnd = '745.92Y';
	$locObj111->imageFile = 'shelf112.gif';


//location "Brooklyn Stacks" 745.92Y - 746.6V
	$locObj112= new stdObject();
	$locObj112->libName = 'Brooklyn';
	$locObj112->location = "Brooklyn Stacks";
	$locObj112->callNumBegin = '745.92Y';
	$locObj112->callNumEnd = '746.6V';
	$locObj112->imageFile = 'shelf113.gif';


//location "Brooklyn Stacks" 746.6V - 747.094L
	$locObj113= new stdObject();
	$locObj113->libName = 'Brooklyn';
	$locObj113->location = "Brooklyn Stacks";
	$locObj113->callNumBegin = '746.6V';
	$locObj113->callNumEnd = '747.094L';
	$locObj113->imageFile = 'shelf114.gif';


//location "Brooklyn Stacks" 747.094L - 747.852H
	$locObj114= new stdObject();
	$locObj114->libName = 'Brooklyn';
	$locObj114->location = "Brooklyn Stacks";
	$locObj114->callNumBegin = '747.094L';
	$locObj114->callNumEnd = '747.852H';
	$locObj114->imageFile = 'shelf115.gif';


//location "Brooklyn Stacks" 747.852H - 749R
	$locObj115= new stdObject();
	$locObj115->libName = 'Brooklyn';
	$locObj115->location = "Brooklyn Stacks";
	$locObj115->callNumBegin = '747.852H';
	$locObj115->callNumEnd = '749R';
	$locObj115->imageFile = 'shelf116.gif';


//location "Brooklyn Stacks" 749R - 749.32K
	$locObj116= new stdObject();
	$locObj116->libName = 'Brooklyn';
	$locObj116->location = "Brooklyn Stacks";
	$locObj116->callNumBegin = '749R';
	$locObj116->callNumEnd = '749.32K';
	$locObj116->imageFile = 'shelf117.gif';


//location "Brooklyn Stacks" 749.32K - 751.73B
	$locObj117= new stdObject();
	$locObj117->libName = 'Brooklyn';
	$locObj117->location = "Brooklyn Stacks";
	$locObj117->callNumBegin = '749.32K';
	$locObj117->callNumEnd = '751.73B';
	$locObj117->imageFile = 'shelf118.gif';


//location "Brooklyn Stacks" 751.73B - 759L
	$locObj118= new stdObject();
	$locObj118->libName = 'Brooklyn';
	$locObj118->location = "Brooklyn Stacks";
	$locObj118->callNumBegin = '751.73B';
	$locObj118->callNumEnd = '759L';
	$locObj118->imageFile = 'shelf119.gif';


//location "Brooklyn Stacks" 759L - 759.0652N
	$locObj119= new stdObject();
	$locObj119->libName = 'Brooklyn';
	$locObj119->location = "Brooklyn Stacks";
	$locObj119->callNumBegin = '759L';
	$locObj119->callNumEnd = '759.0652N';
	$locObj119->imageFile = 'shelf120.gif';


//location "Brooklyn Stacks" 759.0652N - 759.1D
	$locObj120= new stdObject();
	$locObj120->libName = 'Brooklyn';
	$locObj120->location = "Brooklyn Stacks";
	$locObj120->callNumBegin = '759.0652N';
	$locObj120->callNumEnd = '759.1D';
	$locObj120->imageFile = 'shelf121.gif';


//location "Brooklyn Stacks" 759.1D - 759.1H766
	$locObj121= new stdObject();
	$locObj121->libName = 'Brooklyn';
	$locObj121->location = "Brooklyn Stacks";
	$locObj121->callNumBegin = '759.1D';
	$locObj121->callNumEnd = '759.1H766';
	$locObj121->imageFile = 'shelf122.gif';


//location "Brooklyn Stacks" 759.1H766 - 759.1N
	$locObj122= new stdObject();
	$locObj122->libName = 'Brooklyn';
	$locObj122->location = "Brooklyn Stacks";
	$locObj122->callNumBegin = '759.1H766';
	$locObj122->callNumEnd = '759.1N';
	$locObj122->imageFile = 'shelf123.gif';


//location "Brooklyn Stacks" 759.1N - 759.1S634W
	$locObj123= new stdObject();
	$locObj123->libName = 'Brooklyn';
	$locObj123->location = "Brooklyn Stacks";
	$locObj123->callNumBegin = '759.1N';
	$locObj123->callNumEnd = '759.1S634W';
	$locObj123->imageFile = 'shelf124.gif';


//location "Brooklyn Stacks" 759.1S634W - 759.2F
	$locObj124= new stdObject();
	$locObj124->libName = 'Brooklyn';
	$locObj124->location = "Brooklyn Stacks";
	$locObj124->callNumBegin = '759.1S634W';
	$locObj124->callNumEnd = '759.2F';
	$locObj124->imageFile = 'shelf125.gif';


//location "Brooklyn Stacks" 759.2F - 759.3A
	$locObj125= new stdObject();
	$locObj125->libName = 'Brooklyn';
	$locObj125->location = "Brooklyn Stacks";
	$locObj125->callNumBegin = '759.2F';
	$locObj125->callNumEnd = '759.3A';
	$locObj125->imageFile = 'shelf126.gif';


//location "Brooklyn Stacks" 759.3A - 759.36K
	$locObj126= new stdObject();
	$locObj126->libName = 'Brooklyn';
	$locObj126->location = "Brooklyn Stacks";
	$locObj126->callNumBegin = '759.3A';
	$locObj126->callNumEnd = '759.36K';
	$locObj126->imageFile = 'shelf127.gif';


//location "Brooklyn Stacks" 759.36K - 759.4D317
	$locObj127= new stdObject();
	$locObj127->libName = 'Brooklyn';
	$locObj127->location = "Brooklyn Stacks";
	$locObj127->callNumBegin = '759.36K';
	$locObj127->callNumEnd = '759.4D317';
	$locObj127->imageFile = 'shelf128.gif';


//location "Brooklyn Stacks" 759.4D317 - 759.4M27
	$locObj128= new stdObject();
	$locObj128->libName = 'Brooklyn';
	$locObj128->location = "Brooklyn Stacks";
	$locObj128->callNumBegin = '759.4D317';
	$locObj128->callNumEnd = '759.4M27';
	$locObj128->imageFile = 'shelf129.gif';


//location "Brooklyn Stacks" 759.4M27 - 759.4T7258
	$locObj129= new stdObject();
	$locObj129->libName = 'Brooklyn';
	$locObj129->location = "Brooklyn Stacks";
	$locObj129->callNumBegin = '759.4M27';
	$locObj129->callNumEnd = '759.4T7258';
	$locObj129->imageFile = 'shelf130.gif';


//location "Brooklyn Stacks" 759.4T7258 - 759.5B489
	$locObj130= new stdObject();
	$locObj130->libName = 'Brooklyn';
	$locObj130->location = "Brooklyn Stacks";
	$locObj130->callNumBegin = '759.4T7258';
	$locObj130->callNumEnd = '759.5B489';
	$locObj130->imageFile = 'shelf131.gif';


//location "Brooklyn Stacks" 759.5B489 - 759.5L581
	$locObj131= new stdObject();
	$locObj131->libName = 'Brooklyn';
	$locObj131->location = "Brooklyn Stacks";
	$locObj131->callNumBegin = '759.5B489';
	$locObj131->callNumEnd = '759.5L581';
	$locObj131->imageFile = 'shelf132.gif';


//location "Brooklyn Stacks" 759.5L581 - 759.55T454
	$locObj132= new stdObject();
	$locObj132->libName = 'Brooklyn';
	$locObj132->location = "Brooklyn Stacks";
	$locObj132->callNumBegin = '759.5L581';
	$locObj132->callNumEnd = '759.55T454';
	$locObj132->imageFile = 'shelf133.gif';


//location "Brooklyn Stacks" 759.55T454 - 759.8M963
	$locObj133= new stdObject();
	$locObj133->libName = 'Brooklyn';
	$locObj133->location = "Brooklyn Stacks";
	$locObj133->callNumBegin = '759.55T454';
	$locObj133->callNumEnd = '759.8M963';
	$locObj133->imageFile = 'shelf134.gif';


//location "Brooklyn Stacks" 759.8M963 - 759.9492M
	$locObj134= new stdObject();
	$locObj134->libName = 'Brooklyn';
	$locObj134->location = "Brooklyn Stacks";
	$locObj134->callNumBegin = '759.8M963';
	$locObj134->callNumEnd = '759.9492M';
	$locObj134->imageFile = 'shelf135.gif';


//location "Brooklyn Stacks" 759.9492M - 759.951F
	$locObj135= new stdObject();
	$locObj135->libName = 'Brooklyn';
	$locObj135->location = "Brooklyn Stacks";
	$locObj135->callNumBegin = '759.9492M';
	$locObj135->callNumEnd = '759.951F';
	$locObj135->imageFile = 'shelf136.gif';


//location "Brooklyn Stacks" 759.951F - 764C
	$locObj136= new stdObject();
	$locObj136->libName = 'Brooklyn';
	$locObj136->location = "Brooklyn Stacks";
	$locObj136->callNumBegin = '759.951F';
	$locObj136->callNumEnd = '764C';
	$locObj136->imageFile = 'shelf137.gif';


//location "Brooklyn Stacks" 764C - 769.943N
	$locObj137= new stdObject();
	$locObj137->libName = 'Brooklyn';
	$locObj137->location = "Brooklyn Stacks";
	$locObj137->callNumBegin = '764C';
	$locObj137->callNumEnd = '769.943N';
	$locObj137->imageFile = 'shelf138.gif';


//location "Brooklyn Stacks" 769.943N - 769.952
	$locObj138= new stdObject();
	$locObj138->libName = 'Brooklyn';
	$locObj138->location = "Brooklyn Stacks";
	$locObj138->callNumBegin = '769.943N';
	$locObj138->callNumEnd = '769.952';
	$locObj138->imageFile = 'shelf139.gif';


//location "Brooklyn Stacks" 769.952 - 770L
	$locObj139= new stdObject();
	$locObj139->libName = 'Brooklyn';
	$locObj139->location = "Brooklyn Stacks";
	$locObj139->callNumBegin = '769.952';
	$locObj139->callNumEnd = '770L';
	$locObj139->imageFile = 'shelf140.gif';


//location "Brooklyn Stacks" 770L - 770.5P
	$locObj140= new stdObject();
	$locObj140->libName = 'Brooklyn';
	$locObj140->location = "Brooklyn Stacks";
	$locObj140->callNumBegin = '770L';
	$locObj140->callNumEnd = '770.5P';
	$locObj140->imageFile = 'shelf141.gif';


//location "Brooklyn Stacks" 770.5P - 770.973G
	$locObj141= new stdObject();
	$locObj141->libName = 'Brooklyn';
	$locObj141->location = "Brooklyn Stacks";
	$locObj141->callNumBegin = '770.5P';
	$locObj141->callNumEnd = '770.973G';
	$locObj141->imageFile = 'shelf142.gif';


//location "Brooklyn Stacks" 770.973G - 778.6H
	$locObj142= new stdObject();
	$locObj142->libName = 'Brooklyn';
	$locObj142->location = "Brooklyn Stacks";
	$locObj142->callNumBegin = '770.973G';
	$locObj142->callNumEnd = '778.6H';
	$locObj142->imageFile = 'shelf143.gif';


//location "Brooklyn Stacks" 778.6H - 779A
	$locObj143= new stdObject();
	$locObj143->libName = 'Brooklyn';
	$locObj143->location = "Brooklyn Stacks";
	$locObj143->callNumBegin = '778.6H';
	$locObj143->callNumEnd = '779A';
	$locObj143->imageFile = 'shelf144.gif';


//location "Brooklyn Stacks" 779A - 779F
	$locObj144= new stdObject();
	$locObj144->libName = 'Brooklyn';
	$locObj144->location = "Brooklyn Stacks";
	$locObj144->callNumBegin = '779A';
	$locObj144->callNumEnd = '779F';
	$locObj144->imageFile = 'shelf145.gif';


//location "Brooklyn Stacks" 779F - 779M
	$locObj145= new stdObject();
	$locObj145->libName = 'Brooklyn';
	$locObj145->location = "Brooklyn Stacks";
	$locObj145->callNumBegin = '779F';
	$locObj145->callNumEnd = '779M';
	$locObj145->imageFile = 'shelf146.gif';


//location "Brooklyn Stacks" 779M - 779S
	$locObj146= new stdObject();
	$locObj146->libName = 'Brooklyn';
	$locObj146->location = "Brooklyn Stacks";
	$locObj146->callNumBegin = '779M';
	$locObj146->callNumEnd = '779S';
	$locObj146->imageFile = 'shelf147.gif';


//location "Brooklyn Stacks" 779S - 780.92C
	$locObj147= new stdObject();
	$locObj147->libName = 'Brooklyn';
	$locObj147->location = "Brooklyn Stacks";
	$locObj147->callNumBegin = '779S';
	$locObj147->callNumEnd = '780.92C';
	$locObj147->imageFile = 'shelf148.gif';


//location "Brooklyn Stacks" 780.92C - 784.19H
	$locObj148= new stdObject();
	$locObj148->libName = 'Brooklyn';
	$locObj148->location = "Brooklyn Stacks";
	$locObj148->callNumBegin = '780.92C';
	$locObj148->callNumEnd = '784.19H';
	$locObj148->imageFile = 'shelf149.gif';


//location "Brooklyn Stacks" 784.19H - 791.43015M
	$locObj149= new stdObject();
	$locObj149->libName = 'Brooklyn';
	$locObj149->location = "Brooklyn Stacks";
	$locObj149->callNumBegin = '784.19H';
	$locObj149->callNumEnd = '791.43015M';
	$locObj149->imageFile = 'shelf150.gif';


//location "Brooklyn Stacks" 791.43015M - 791.437F
	$locObj150= new stdObject();
	$locObj150->libName = 'Brooklyn';
	$locObj150->location = "Brooklyn Stacks";
	$locObj150->callNumBegin = '791.43015M';
	$locObj150->callNumEnd = '791.437F';
	$locObj150->imageFile = 'shelf151.gif';


//location "Brooklyn Stacks" 791.437F - 792.0945N
	$locObj151= new stdObject();
	$locObj151->libName = 'Brooklyn';
	$locObj151->location = "Brooklyn Stacks";
	$locObj151->callNumBegin = '791.437F';
	$locObj151->callNumEnd = '792.0945N';
	$locObj151->imageFile = 'shelf152.gif';


//location "Brooklyn Stacks" 792.0945N - 799.99
	$locObj152= new stdObject();
	$locObj152->libName = 'Brooklyn';
	$locObj152->location = "Brooklyn Stacks";
	$locObj152->callNumBegin = '792.0945N';
	$locObj152->callNumEnd = '799.99';
	$locObj152->imageFile = 'shelf153.gif';


//location "Brooklyn Stacks" 800 - 808.3G
	$locObj153= new stdObject();
	$locObj153->libName = 'Brooklyn';
	$locObj153->location = "Brooklyn Stacks";
	$locObj153->callNumBegin = '800';
	$locObj153->callNumEnd = '808.3G';
	$locObj153->imageFile = 'shelf154.gif';


//location "Brooklyn Stacks" 808.3G - 809.1H
	$locObj154= new stdObject();
	$locObj154->libName = 'Brooklyn';
	$locObj154->location = "Brooklyn Stacks";
	$locObj154->callNumBegin = '808.3G';
	$locObj154->callNumEnd = '809.1H';
	$locObj154->imageFile = 'shelf155.gif';


//location "Brooklyn Stacks" 809.1H - 810.99S
	$locObj155= new stdObject();
	$locObj155->libName = 'Brooklyn';
	$locObj155->location = "Brooklyn Stacks";
	$locObj155->callNumBegin = '809.1H';
	$locObj155->callNumEnd = '810.99S';
	$locObj155->imageFile = 'shelf156.gif';


//location "Brooklyn Stacks" 810.99S - 811O
	$locObj156= new stdObject();
	$locObj156->libName = 'Brooklyn';
	$locObj156->location = "Brooklyn Stacks";
	$locObj156->callNumBegin = '810.99S';
	$locObj156->callNumEnd = '811O';
	$locObj156->imageFile = 'shelf157.gif';


//location "Brooklyn Stacks" 811O - 812M
	$locObj157= new stdObject();
	$locObj157->libName = 'Brooklyn';
	$locObj157->location = "Brooklyn Stacks";
	$locObj157->callNumBegin = '811O';
	$locObj157->callNumEnd = '812M';
	$locObj157->imageFile = 'shelf158.gif';


//location "Brooklyn Stacks" 812M - 813H
	$locObj158= new stdObject();
	$locObj158->libName = 'Brooklyn';
	$locObj158->location = "Brooklyn Stacks";
	$locObj158->callNumBegin = '812M';
	$locObj158->callNumEnd = '813H';
	$locObj158->imageFile = 'shelf159.gif';


//location "Brooklyn Stacks" 813H - 814.6P
	$locObj159= new stdObject();
	$locObj159->libName = 'Brooklyn';
	$locObj159->location = "Brooklyn Stacks";
	$locObj159->callNumBegin = '813H';
	$locObj159->callNumEnd = '814.6P';
	$locObj159->imageFile = 'shelf160.gif';


//location "Brooklyn Stacks" 814.6P - 818T
	$locObj160= new stdObject();
	$locObj160->libName = 'Brooklyn';
	$locObj160->location = "Brooklyn Stacks";
	$locObj160->callNumBegin = '814.6P';
	$locObj160->callNumEnd = '818T';
	$locObj160->imageFile = 'shelf161.gif';


//location "Brooklyn Stacks" 818T - 821C
	$locObj161= new stdObject();
	$locObj161->libName = 'Brooklyn';
	$locObj161->location = "Brooklyn Stacks";
	$locObj161->callNumBegin = '818T';
	$locObj161->callNumEnd = '821C';
	$locObj161->imageFile = 'shelf162.gif';


//location "Brooklyn Stacks" 821C - 821Y
	$locObj162= new stdObject();
	$locObj162->libName = 'Brooklyn';
	$locObj162->location = "Brooklyn Stacks";
	$locObj162->callNumBegin = '821C';
	$locObj162->callNumEnd = '821Y';
	$locObj162->imageFile = 'shelf163.gif';


//location "Brooklyn Stacks" 821Y - 822.04F
	$locObj163= new stdObject();
	$locObj163->libName = 'Brooklyn';
	$locObj163->location = "Brooklyn Stacks";
	$locObj163->callNumBegin = '821Y';
	$locObj163->callNumEnd = '822.04F';
	$locObj163->imageFile = 'shelf164.gif';


//location "Brooklyn Stacks" 822.04F - 823C
	$locObj164= new stdObject();
	$locObj164->libName = 'Brooklyn';
	$locObj164->location = "Brooklyn Stacks";
	$locObj164->callNumBegin = '822.04F';
	$locObj164->callNumEnd = '823C';
	$locObj164->imageFile = 'shelf165.gif';


//location "Brooklyn Stacks" 823C - 824L
	$locObj165= new stdObject();
	$locObj165->libName = 'Brooklyn';
	$locObj165->location = "Brooklyn Stacks";
	$locObj165->callNumBegin = '823C';
	$locObj165->callNumEnd = '824L';
	$locObj165->imageFile = 'shelf166.gif';


//location "Brooklyn Stacks" 824L - 828.08L
	$locObj166= new stdObject();
	$locObj166->libName = 'Brooklyn';
	$locObj166->location = "Brooklyn Stacks";
	$locObj166->callNumBegin = '824L';
	$locObj166->callNumEnd = '828.08L';
	$locObj166->imageFile = 'shelf167.gif';


//location "Brooklyn Stacks" 828.08L - 842H
	$locObj167= new stdObject();
	$locObj167->libName = 'Brooklyn';
	$locObj167->location = "Brooklyn Stacks";
	$locObj167->callNumBegin = '828.08L';
	$locObj167->callNumEnd = '842H';
	$locObj167->imageFile = 'shelf168.gif';


//location "Brooklyn Stacks" 842H - 860F
	$locObj168= new stdObject();
	$locObj168->libName = 'Brooklyn';
	$locObj168->location = "Brooklyn Stacks";
	$locObj168->callNumBegin = '842H';
	$locObj168->callNumEnd = '860F';
	$locObj168->imageFile = 'shelf169.gif';


//location "Brooklyn Stacks" 860F - 888.4D
	$locObj169= new stdObject();
	$locObj169->libName = 'Brooklyn';
	$locObj169->location = "Brooklyn Stacks";
	$locObj169->callNumBegin = '860F';
	$locObj169->callNumEnd = '888.4D';
	$locObj169->imageFile = 'shelf170.gif';


//location "Brooklyn Stacks" 888.4D - 895.6B
	$locObj170= new stdObject();
	$locObj170->libName = 'Brooklyn';
	$locObj170->location = "Brooklyn Stacks";
	$locObj170->callNumBegin = '888.4D';
	$locObj170->callNumEnd = '895.6B';
	$locObj170->imageFile = 'shelf171.gif';


//location "Brooklyn Stacks" 895.6B - 910.28G
	$locObj171= new stdObject();
	$locObj171->libName = 'Brooklyn';
	$locObj171->location = "Brooklyn Stacks";
	$locObj171->callNumBegin = '895.6B';
	$locObj171->callNumEnd = '910.28G';
	$locObj171->imageFile = 'shelf172.gif';


//location "Brooklyn Stacks" 910.28G - 915.2H
	$locObj172= new stdObject();
	$locObj172->libName = 'Brooklyn';
	$locObj172->location = "Brooklyn Stacks";
	$locObj172->callNumBegin = '910.28G';
	$locObj172->callNumEnd = '915.2H';
	$locObj172->imageFile = 'shelf173.gif';


//location "Brooklyn Stacks" 915.2H - 917.56M
	$locObj173= new stdObject();
	$locObj173->libName = 'Brooklyn';
	$locObj173->location = "Brooklyn Stacks";
	$locObj173->callNumBegin = '915.2H';
	$locObj173->callNumEnd = '917.56M';
	$locObj173->imageFile = 'shelf174.gif';


//location "Brooklyn Stacks" 917.56M - 935B
	$locObj174= new stdObject();
	$locObj174->libName = 'Brooklyn';
	$locObj174->location = "Brooklyn Stacks";
	$locObj174->callNumBegin = '917.56M';
	$locObj174->callNumEnd = '935B';
	$locObj174->imageFile = 'shelf175.gif';


//location "Brooklyn Stacks" 935B - 941.081V
	$locObj175= new stdObject();
	$locObj175->libName = 'Brooklyn';
	$locObj175->location = "Brooklyn Stacks";
	$locObj175->callNumBegin = '935B';
	$locObj175->callNumEnd = '941.081V';
	$locObj175->imageFile = 'shelf176.gif';


//location "Brooklyn Stacks" 941.081V - 945.05B
	$locObj176= new stdObject();
	$locObj176->libName = 'Brooklyn';
	$locObj176->location = "Brooklyn Stacks";
	$locObj176->callNumBegin = '941.081V';
	$locObj176->callNumEnd = '945.05B';
	$locObj176->imageFile = 'shelf177.gif';


//location "Brooklyn Stacks" 945.05B - 952M
	$locObj177= new stdObject();
	$locObj177->libName = 'Brooklyn';
	$locObj177->location = "Brooklyn Stacks";
	$locObj177->callNumBegin = '945.05B';
	$locObj177->callNumEnd = '952M';
	$locObj177->imageFile = 'shelf178.gif';


//location "Brooklyn Stacks" 952M - 965.04F
	$locObj178= new stdObject();
	$locObj178->libName = 'Brooklyn';
	$locObj178->location = "Brooklyn Stacks";
	$locObj178->callNumBegin = '952M';
	$locObj178->callNumEnd = '965.04F';
	$locObj178->imageFile = 'shelf179.gif';


//location "Brooklyn Stacks" 965.04F - 973B
	$locObj179= new stdObject();
	$locObj179->libName = 'Brooklyn';
	$locObj179->location = "Brooklyn Stacks";
	$locObj179->callNumBegin = '965.04F';
	$locObj179->callNumEnd = '973B';
	$locObj179->imageFile = 'shelf180.gif';


//location "Brooklyn Stacks" 973B - 973.3S
	$locObj180= new stdObject();
	$locObj180->libName = 'Brooklyn';
	$locObj180->location = "Brooklyn Stacks";
	$locObj180->callNumBegin = '973B';
	$locObj180->callNumEnd = '973.3S';
	$locObj180->imageFile = 'shelf181.gif';


//location "Brooklyn Stacks" 973.3S - 973.8N
	$locObj181= new stdObject();
	$locObj181->libName = 'Brooklyn';
	$locObj181->location = "Brooklyn Stacks";
	$locObj181->callNumBegin = '973.3S';
	$locObj181->callNumEnd = '973.8N';
	$locObj181->imageFile = 'shelf182.gif';


//location "Brooklyn Stacks" 973.8N - 974.4M
	$locObj182= new stdObject();
	$locObj182->libName = 'Brooklyn';
	$locObj182->location = "Brooklyn Stacks";
	$locObj182->callNumBegin = '973.8N';
	$locObj182->callNumEnd = '974.4M';
	$locObj182->imageFile = 'shelf183.gif';


//location "Brooklyn Stacks" 974.4M - 976.4I
	$locObj183= new stdObject();
	$locObj183->libName = 'Brooklyn';
	$locObj183->location = "Brooklyn Stacks";
	$locObj183->callNumBegin = '974.4M';
	$locObj183->callNumEnd = '976.4I';
	$locObj183->imageFile = 'shelf184.gif';


//location "Brooklyn Stacks" 976.4I - 999.99
	$locObj184= new stdObject();
	$locObj184->libName = 'Brooklyn';
	$locObj184->location = "Brooklyn Stacks";
	$locObj184->callNumBegin = '976.4I';
	$locObj184->callNumEnd = '999.99';
	$locObj184->imageFile = 'shelf185.gif';


//location "Brooklyn Children's Fiction" ACM223.8D - ACM811P
	$locObj185= new stdObject();
	$locObj185->libName = 'Brooklyn';
	$locObj185->location = "Brooklyn Children's Fiction";
	$locObj185->callNumBegin = 'ACM223.8D';
	$locObj185->callNumEnd = 'ACM811P';
	$locObj185->imageFile = 'shelf186.gif';


//location "Brooklyn Children's Fiction" ACM811P - ACMF 9999
	$locObj186= new stdObject();
	$locObj186->libName = 'Brooklyn';
	$locObj186->location = "Brooklyn Children's Fiction";
	$locObj186->callNumBegin = 'ACM811P';
	$locObj186->callNumEnd = 'ACMF 9999';
	$locObj186->imageFile = 'shelf187.gif';


//location "Brooklyn Children's Fiction" ACMF 000 - ACMS 9999
	$locObj187= new stdObject();
	$locObj187->libName = 'Brooklyn';
	$locObj187->location = "Brooklyn Children's Fiction";
	$locObj187->callNumBegin = 'ACMF 000';
	$locObj187->callNumEnd = 'ACMS 9999';
	$locObj187->imageFile = 'shelf188.gif';


//location "Brooklyn Children's Fiction" ACMS 000 - ACMZ 9999
	$locObj188= new stdObject();
	$locObj188->libName = 'Brooklyn';
	$locObj188->location = "Brooklyn Children's Fiction";
	$locObj188->callNumBegin = 'ACMS 000';
	$locObj188->callNumEnd = 'ACMZ 9999';
	$locObj188->imageFile = 'shelf189.gif';


//location "Brooklyn Stacks Oversize" 720 - 730.9485
	$locObj189= new stdObject();
	$locObj189->libName = 'Brooklyn';
	$locObj189->location = "Brooklyn Stacks Oversize";
	$locObj189->callNumBegin = '720';
	$locObj189->callNumEnd = '730.9485';
	$locObj189->imageFile = 'shelf190.gif';


//location "Brooklyn Stacks Oversize" 730.9485 - 759.4
	$locObj190= new stdObject();
	$locObj190->libName = 'Brooklyn';
	$locObj190->location = "Brooklyn Stacks Oversize";
	$locObj190->callNumBegin = '730.9485';
	$locObj190->callNumEnd = '759.4';
	$locObj190->imageFile = 'shelf191.gif';


//location "Brooklyn Stacks Oversize" 759.4 - 912
	$locObj191= new stdObject();
	$locObj191->libName = 'Brooklyn';
	$locObj191->location = "Brooklyn Stacks Oversize";
	$locObj191->callNumBegin = '759.4';
	$locObj191->callNumEnd = '912';
	$locObj191->imageFile = 'shelf192.gif';


//location "Brooklyn Stacks Oversize" 912 - 999
	$locObj192= new stdObject();
	$locObj192->libName = 'Brooklyn';
	$locObj192->location = "Brooklyn Stacks Oversize";
	$locObj192->callNumBegin = '912';
	$locObj192->callNumEnd = '999';
	$locObj192->imageFile = 'shelf193.gif';


//location "Brooklyn 2M Periodicals" Periodicals AB 000 - Periodicals AN 9999
	$locObj193= new stdObject();
	$locObj193->libName = 'Brooklyn';
	$locObj193->location = "Brooklyn 2M Periodicals";
	$locObj193->callNumBegin = 'Periodicals AB 000';
	$locObj193->callNumEnd = 'Periodicals AN 9999';
	$locObj193->imageFile = 'shelf194.gif';


//location "Brooklyn 2M Periodicals" Periodicals AN 000 - Periodicals AR 9999
	$locObj194= new stdObject();
	$locObj194->libName = 'Brooklyn';
	$locObj194->location = "Brooklyn 2M Periodicals";
	$locObj194->callNumBegin = 'Periodicals AN 000';
	$locObj194->callNumEnd = 'Periodicals AR 9999';
	$locObj194->imageFile = 'shelf195.gif';


//location "Brooklyn 2M Periodicals" Periodicals AR 000 - Periodicals AR 9999
	$locObj195= new stdObject();
	$locObj195->libName = 'Brooklyn';
	$locObj195->location = "Brooklyn 2M Periodicals";
	$locObj195->callNumBegin = 'Periodicals AR 000';
	$locObj195->callNumEnd = 'Periodicals AR 9999';
	$locObj195->imageFile = 'shelf196.gif';


//location "Brooklyn 2M Periodicals" Periodicals AR 000 - Periodicals BU 9999
	$locObj196= new stdObject();
	$locObj196->libName = 'Brooklyn';
	$locObj196->location = "Brooklyn 2M Periodicals";
	$locObj196->callNumBegin = 'Periodicals AR 000';
	$locObj196->callNumEnd = 'Periodicals BU 9999';
	$locObj196->imageFile = 'shelf197.gif';


//location "Brooklyn 2M Periodicals" Periodicals BU 000 - Periodicals C0
	$locObj197= new stdObject();
	$locObj197->libName = 'Brooklyn';
	$locObj197->location = "Brooklyn 2M Periodicals";
	$locObj197->callNumBegin = 'Periodicals BU 000';
	$locObj197->callNumEnd = 'Periodicals C0';
	$locObj197->imageFile = 'shelf198.gif';


//location "Brooklyn 2M Periodicals" Periodicals C0 - Periodicals D0
	$locObj198= new stdObject();
	$locObj198->libName = 'Brooklyn';
	$locObj198->location = "Brooklyn 2M Periodicals";
	$locObj198->callNumBegin = 'Periodicals C0';
	$locObj198->callNumEnd = 'Periodicals D0';
	$locObj198->imageFile = 'shelf199.gif';


//location "Brooklyn 2M Periodicals" Periodicals D0 - Periodicals H0
	$locObj199= new stdObject();
	$locObj199->libName = 'Brooklyn';
	$locObj199->location = "Brooklyn 2M Periodicals";
	$locObj199->callNumBegin = 'Periodicals D0';
	$locObj199->callNumEnd = 'Periodicals H0';
	$locObj199->imageFile = 'shelf200.gif';


//location "Brooklyn 2M Periodicals" Periodicals H0 - Periodicals J0
	$locObj200= new stdObject();
	$locObj200->libName = 'Brooklyn';
	$locObj200->location = "Brooklyn 2M Periodicals";
	$locObj200->callNumBegin = 'Periodicals H0';
	$locObj200->callNumEnd = 'Periodicals J0';
	$locObj200->imageFile = 'shelf201.gif';


//location "Brooklyn 2M Periodicals" Periodicals J0 - Periodicals MA 9999
	$locObj201= new stdObject();
	$locObj201->libName = 'Brooklyn';
	$locObj201->location = "Brooklyn 2M Periodicals";
	$locObj201->callNumBegin = 'Periodicals J0';
	$locObj201->callNumEnd = 'Periodicals MA 9999';
	$locObj201->imageFile = 'shelf202.gif';


//location "Brooklyn 2M Periodicals" Periodicals MA 000 - Periodicals MU 9999
	$locObj202= new stdObject();
	$locObj202->libName = 'Brooklyn';
	$locObj202->location = "Brooklyn 2M Periodicals";
	$locObj202->callNumBegin = 'Periodicals MA 000';
	$locObj202->callNumEnd = 'Periodicals MU 9999';
	$locObj202->imageFile = 'shelf203.gif';


//location "Brooklyn 2M Periodicals" Periodicals MU 000 - Periodicals PE 9999
	$locObj203= new stdObject();
	$locObj203->libName = 'Brooklyn';
	$locObj203->location = "Brooklyn 2M Periodicals";
	$locObj203->callNumBegin = 'Periodicals MU 000';
	$locObj203->callNumEnd = 'Periodicals PE 9999';
	$locObj203->imageFile = 'shelf204.gif';


//location "Brooklyn 2M Periodicals" Periodicals PE 000 - Periodicals SM 9999
	$locObj204= new stdObject();
	$locObj204->libName = 'Brooklyn';
	$locObj204->location = "Brooklyn 2M Periodicals";
	$locObj204->callNumBegin = 'Periodicals PE 000';
	$locObj204->callNumEnd = 'Periodicals SM 9999';
	$locObj204->imageFile = 'shelf205.gif';


//location "Brooklyn 2M Periodicals" Periodicals SM 000 - Periodicals Z999
	$locObj205= new stdObject();
	$locObj205->libName = 'Brooklyn';
	$locObj205->location = "Brooklyn 2M Periodicals";
	$locObj205->callNumBegin = 'Periodicals SM 000';
	$locObj205->callNumEnd = 'Periodicals Z999';
	$locObj205->imageFile = 'shelf206.gif';


//location "Brooklyn Fiction" A 000 - BRO 9999
	$locObj206= new stdObject();
	$locObj206->libName = 'Brooklyn';
	$locObj206->location = "Brooklyn Fiction";
	$locObj206->callNumBegin = 'A 000';
	$locObj206->callNumEnd = 'BRO 9999';
	$locObj206->imageFile = 'shelf207.gif';


//location "Brooklyn Fiction" BRO 000 - DEI 9999
	$locObj207= new stdObject();
	$locObj207->libName = 'Brooklyn';
	$locObj207->location = "Brooklyn Fiction";
	$locObj207->callNumBegin = 'BRO 000';
	$locObj207->callNumEnd = 'DEI 9999';
	$locObj207->imageFile = 'shelf208.gif';


//location "Brooklyn Fiction" DEI 000 - FIC 9999
	$locObj208= new stdObject();
	$locObj208->libName = 'Brooklyn';
	$locObj208->location = "Brooklyn Fiction";
	$locObj208->callNumBegin = 'DEI 000';
	$locObj208->callNumEnd = 'FIC 9999';
	$locObj208->imageFile = 'shelf209.gif';


//location "Brooklyn Fiction" FIC 000 - HAR 9999
	$locObj209= new stdObject();
	$locObj209->libName = 'Brooklyn';
	$locObj209->location = "Brooklyn Fiction";
	$locObj209->callNumBegin = 'FIC 000';
	$locObj209->callNumEnd = 'HAR 9999';
	$locObj209->imageFile = 'shelf210.gif';


//location "Brooklyn Fiction" HAR 000 - KAV 9999
	$locObj210= new stdObject();
	$locObj210->libName = 'Brooklyn';
	$locObj210->location = "Brooklyn Fiction";
	$locObj210->callNumBegin = 'HAR 000';
	$locObj210->callNumEnd = 'KAV 9999';
	$locObj210->imageFile = 'shelf211.gif';


//location "Brooklyn Fiction" KAV 000 - MAN 9999
	$locObj211= new stdObject();
	$locObj211->libName = 'Brooklyn';
	$locObj211->location = "Brooklyn Fiction";
	$locObj211->callNumBegin = 'KAV 000';
	$locObj211->callNumEnd = 'MAN 9999';
	$locObj211->imageFile = 'shelf212.gif';


//location "Brooklyn Fiction" MAN 000 - MAU 9999
	$locObj212= new stdObject();
	$locObj212->libName = 'Brooklyn';
	$locObj212->location = "Brooklyn Fiction";
	$locObj212->callNumBegin = 'MAN 000';
	$locObj212->callNumEnd = 'MAU 9999';
	$locObj212->imageFile = 'shelf213.gif';


//location "Brooklyn Fiction" MAU 000 - RAN 9999
	$locObj213= new stdObject();
	$locObj213->libName = 'Brooklyn';
	$locObj213->location = "Brooklyn Fiction";
	$locObj213->callNumBegin = 'MAU 000';
	$locObj213->callNumEnd = 'RAN 9999';
	$locObj213->imageFile = 'shelf214.gif';


//location "Brooklyn Fiction" RAN 000 - SPA 9999
	$locObj214= new stdObject();
	$locObj214->libName = 'Brooklyn';
	$locObj214->location = "Brooklyn Fiction";
	$locObj214->callNumBegin = 'RAN 000';
	$locObj214->callNumEnd = 'SPA 9999';
	$locObj214->imageFile = 'shelf215.gif';


//location "Brooklyn Fiction" SPA 000 - Z 9999
	$locObj215= new stdObject();
	$locObj215->libName = 'Brooklyn';
	$locObj215->location = "Brooklyn Fiction";
	$locObj215->callNumBegin = 'SPA 000';
	$locObj215->callNumEnd = 'Z 9999';
	$locObj215->imageFile = 'shelf216.gif';


//location "Brooklyn Reference" 0 - 30
	$locObj216= new stdObject();
	$locObj216->libName = 'Brooklyn';
	$locObj216->location = "Brooklyn Reference";
	$locObj216->callNumBegin = '0';
	$locObj216->callNumEnd = '30';
	$locObj216->imageFile = 'shelf217.gif';


//location "Brooklyn Reference" 30 - 80
	$locObj217= new stdObject();
	$locObj217->libName = 'Brooklyn';
	$locObj217->location = "Brooklyn Reference";
	$locObj217->callNumBegin = '30';
	$locObj217->callNumEnd = '80';
	$locObj217->imageFile = 'shelf218.gif';


//location "Brooklyn Reference" 80 - 291
	$locObj218= new stdObject();
	$locObj218->libName = 'Brooklyn';
	$locObj218->location = "Brooklyn Reference";
	$locObj218->callNumBegin = '80';
	$locObj218->callNumEnd = '291';
	$locObj218->imageFile = 'shelf219.gif';


//location "Brooklyn Reference" 291 - 297
	$locObj219= new stdObject();
	$locObj219->libName = 'Brooklyn';
	$locObj219->location = "Brooklyn Reference";
	$locObj219->callNumBegin = '291';
	$locObj219->callNumEnd = '297';
	$locObj219->imageFile = 'shelf220.gif';


//location "Brooklyn Reference" 297 - 307
	$locObj220= new stdObject();
	$locObj220->libName = 'Brooklyn';
	$locObj220->location = "Brooklyn Reference";
	$locObj220->callNumBegin = '297';
	$locObj220->callNumEnd = '307';
	$locObj220->imageFile = 'shelf221.gif';


//location "Brooklyn Reference" 307 - 361
	$locObj221= new stdObject();
	$locObj221->libName = 'Brooklyn';
	$locObj221->location = "Brooklyn Reference";
	$locObj221->callNumBegin = '307';
	$locObj221->callNumEnd = '361';
	$locObj221->imageFile = 'shelf222.gif';


//location "Brooklyn Reference" 361 - 528
	$locObj222= new stdObject();
	$locObj222->libName = 'Brooklyn';
	$locObj222->location = "Brooklyn Reference";
	$locObj222->callNumBegin = '361';
	$locObj222->callNumEnd = '528';
	$locObj222->imageFile = 'shelf223.gif';


//location "Brooklyn Reference" 528 - 690
	$locObj223= new stdObject();
	$locObj223->libName = 'Brooklyn';
	$locObj223->location = "Brooklyn Reference";
	$locObj223->callNumBegin = '528';
	$locObj223->callNumEnd = '690';
	$locObj223->imageFile = 'shelf224.gif';


//location "Brooklyn Reference" 690 - 720
	$locObj224= new stdObject();
	$locObj224->libName = 'Brooklyn';
	$locObj224->location = "Brooklyn Reference";
	$locObj224->callNumBegin = '690';
	$locObj224->callNumEnd = '720';
	$locObj224->imageFile = 'shelf225.gif';


//location "Brooklyn Reference" 720 - 808
	$locObj225= new stdObject();
	$locObj225->libName = 'Brooklyn';
	$locObj225->location = "Brooklyn Reference";
	$locObj225->callNumBegin = '720';
	$locObj225->callNumEnd = '808';
	$locObj225->imageFile = 'shelf226.gif';


//location "Brooklyn Reference" 808 - 917
	$locObj226= new stdObject();
	$locObj226->libName = 'Brooklyn';
	$locObj226->location = "Brooklyn Reference";
	$locObj226->callNumBegin = '808';
	$locObj226->callNumEnd = '917';
	$locObj226->imageFile = 'shelf227.gif';


//put all objects in an array 
	$locArray = array(
		0 => $locObj0,
		1 => $locObj1,
		2 => $locObj2,
		3 => $locObj3,
		4 => $locObj4,
		5 => $locObj5,
		6 => $locObj6,
		7 => $locObj7,
		8 => $locObj8,
		9 => $locObj9,
		10 => $locObj10,
		11 => $locObj11,
		12 => $locObj12,
		13 => $locObj13,
		14 => $locObj14,
		15 => $locObj15,
		16 => $locObj16,
		17 => $locObj17,
		18 => $locObj18,
		19 => $locObj19,
		20 => $locObj20,
		21 => $locObj21,
		22 => $locObj22,
		23 => $locObj23,
		24 => $locObj24,
		25 => $locObj25,
		26 => $locObj26,
		27 => $locObj27,
		28 => $locObj28,
		29 => $locObj29,
		30 => $locObj30,
		31 => $locObj31,
		32 => $locObj32,
		33 => $locObj33,
		34 => $locObj34,
		35 => $locObj35,
		36 => $locObj36,
		37 => $locObj37,
		38 => $locObj38,
		39 => $locObj39,
		40 => $locObj40,
		41 => $locObj41,
		42 => $locObj42,
		43 => $locObj43,
		44 => $locObj44,
		45 => $locObj45,
		46 => $locObj46,
		47 => $locObj47,
		48 => $locObj48,
		49 => $locObj49,
		50 => $locObj50,
		51 => $locObj51,
		52 => $locObj52,
		53 => $locObj53,
		54 => $locObj54,
		55 => $locObj55,
		56 => $locObj56,
		57 => $locObj57,
		58 => $locObj58,
		59 => $locObj59,
		60 => $locObj60,
		61 => $locObj61,
		62 => $locObj62,
		63 => $locObj63,
		64 => $locObj64,
		65 => $locObj65,
		66 => $locObj66,
		67 => $locObj67,
		68 => $locObj68,
		69 => $locObj69,
		70 => $locObj70,
		71 => $locObj71,
		72 => $locObj72,
		73 => $locObj73,
		74 => $locObj74,
		75 => $locObj75,
		76 => $locObj76,
		77 => $locObj77,
		78 => $locObj78,
		79 => $locObj79,
		80 => $locObj80,
		81 => $locObj81,
		82 => $locObj82,
		83 => $locObj83,
		84 => $locObj84,
		85 => $locObj85,
		86 => $locObj86,
		87 => $locObj87,
		88 => $locObj88,
		89 => $locObj89,
		90 => $locObj90,
		91 => $locObj91,
		92 => $locObj92,
		93 => $locObj93,
		94 => $locObj94,
		95 => $locObj95,
		96 => $locObj96,
		97 => $locObj97,
		98 => $locObj98,
		99 => $locObj99,
		100 => $locObj100,
		101 => $locObj101,
		102 => $locObj102,
		103 => $locObj103,
		104 => $locObj104,
		105 => $locObj105,
		106 => $locObj106,
		107 => $locObj107,
		108 => $locObj108,
		109 => $locObj109,
		110 => $locObj110,
		111 => $locObj111,
		112 => $locObj112,
		113 => $locObj113,
		114 => $locObj114,
		115 => $locObj115,
		116 => $locObj116,
		117 => $locObj117,
		118 => $locObj118,
		119 => $locObj119,
		120 => $locObj120,
		121 => $locObj121,
		122 => $locObj122,
		123 => $locObj123,
		124 => $locObj124,
		125 => $locObj125,
		126 => $locObj126,
		127 => $locObj127,
		128 => $locObj128,
		129 => $locObj129,
		130 => $locObj130,
		131 => $locObj131,
		132 => $locObj132,
		133 => $locObj133,
		134 => $locObj134,
		135 => $locObj135,
		136 => $locObj136,
		137 => $locObj137,
		138 => $locObj138,
		139 => $locObj139,
		140 => $locObj140,
		141 => $locObj141,
		142 => $locObj142,
		143 => $locObj143,
		144 => $locObj144,
		145 => $locObj145,
		146 => $locObj146,
		147 => $locObj147,
		148 => $locObj148,
		149 => $locObj149,
		150 => $locObj150,
		151 => $locObj151,
		152 => $locObj152,
		153 => $locObj153,
		154 => $locObj154,
		155 => $locObj155,
		156 => $locObj156,
		157 => $locObj157,
		158 => $locObj158,
		159 => $locObj159,
		160 => $locObj160,
		161 => $locObj161,
		162 => $locObj162,
		163 => $locObj163,
		164 => $locObj164,
		165 => $locObj165,
		166 => $locObj166,
		167 => $locObj167,
		168 => $locObj168,
		169 => $locObj169,
		170 => $locObj170,
		171 => $locObj171,
		172 => $locObj172,
		173 => $locObj173,
		174 => $locObj174,
		175 => $locObj175,
		176 => $locObj176,
		177 => $locObj177,
		178 => $locObj178,
		179 => $locObj179,
		180 => $locObj180,
		181 => $locObj181,
		182 => $locObj182,
		183 => $locObj183,
		184 => $locObj184,
		185 => $locObj185,
		186 => $locObj186,
		187 => $locObj187,
		188 => $locObj188,
		189 => $locObj189,
		190 => $locObj190,
		191 => $locObj191,
		192 => $locObj192,
		193 => $locObj193,
		194 => $locObj194,
		195 => $locObj195,
		196 => $locObj196,
		197 => $locObj197,
		198 => $locObj198,
		199 => $locObj199,
		200 => $locObj200,
		201 => $locObj201,
		202 => $locObj202,
		203 => $locObj203,
		204 => $locObj204,
		205 => $locObj205,
		206 => $locObj206,
		207 => $locObj207,
		208 => $locObj208,
		209 => $locObj209,
		210 => $locObj210,
		211 => $locObj211,
		212 => $locObj212,
		213 => $locObj213,
		214 => $locObj214,
		215 => $locObj215,
		216 => $locObj216,
		217 => $locObj217,
		218 => $locObj218,
		219 => $locObj219,
		220 => $locObj220,
		221 => $locObj221,
		222 => $locObj222,
		223 => $locObj223,
		224 => $locObj224,
		225 => $locObj225,
		226 => $locObj226,
		);

function getBooks($page, $locArray) {
    global $books, $locations, $callNum;
	$html = new simple_html_dom();
	$html->load_file($page);
	$items = $html->find('tr[class=bibItemsEntry]');
	foreach($items as $post) {
		# remember comments count as nodes
		$lox1 = $post->children(0)->outertext;
		$lox2 = $post->children(1)->first_child()->outertext;
		$lox1 = preg_replace('/&nbsp;/i', '', $lox1);
		$lox2 = preg_replace('/&nbsp;/i', '', $lox2);
		$lox2 = preg_replace('/&nbsp;/i', '', $lox2);
		$locations[] = array($lox1,
		$callNum[] = array($post->children(1)->outertext,
					$post->children(2)->first_child()->outertext);
}	foreach($locations as $item) {
		//put the location into the books array
		$books[][0] = $item[0];

}
	$n=0;
	foreach($callNum as $item) {
		//put the call number into the books array
		$books[$n][1] = $item[0];
		$n++;
}
		//now the items are in an array		//find the corresponding image		getMap($books, $locArray);
}

//getMap function
function getMap($items, $locArray) {
	$i = 0;
	foreach($items as $item){
		$loc = strip_tags($items[$i][0]);
	$callNum = strip_tags($items[$i][1]);
	$subCall = sortNums(substr($callNum, 6, 20));		$i++;

//begin checking for locations
	//variable to indicate that a match has been found
	$foundFlag = 0;
	foreach ($locArray as $locValue => $cur){

		//iterate through each location object and if a match is found, display the map
		if ((strcmp($cur->location,$loc)) && ($subCall >= $cur->callNumBegin) && ($subCall < $cur->callNumEnd)){
			 print '<p>Call number <span style="color: #FF6666;">' . $callNum . '</span> is located: ' . $cur->location . '.</p>';
		  print '<img src="img/' . $cur->imageFile . '"/><br />';
		  $foundFlag = 1;
		}

	}

	//if no match is found, display error message
		if($foundFlag === 0) {
			print '<p>Could not find this item. Please ask a librarian for assistance.</p>';
		}

//end location check

//end getMap function
makeLocArray();
getBooks($page, $locArray);

//text to print link to ask a librarian
    print'<div id="helpText">';
    print'<p>Questions? Ask a Librarian.</p>';
        print'</div>';
 //end help link div
    $pageURL = $_SERVER['QUERY_STRING'];
    /*button to report an error*/
    print'<div id="error">';
    print'<form action="sendError.php" method="POST">';
    print'<input type="hidden" name="pageURL" value="' . $pageURL . '"/>';
    	    print'<input type="submit" value="report an error" />';
    		print'</form>';	print "</div>";
	print "</body>";
	print "</html>";

?>