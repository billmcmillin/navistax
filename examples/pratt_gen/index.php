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
	$combined = array();
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
	global $locArray;//location "Brooklyn 2M Periodicals" PERIODICALS_AB - PERIODICALS_AN
	$locObj0= new stdObject();
	$locObj0->libName = 'Brooklyn';
	$locObj0->location = "Brooklyn 2M Periodicals";
	$locObj0->callNumBegin = 'PERIODICALS_AB';
	$locObj0->callNumEnd = 'PERIODICALS_AN';
	$locObj0->imageFile = 'shelf194.gif';
	$locObj0->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_AN - PERIODICALS_AR
	$locObj1= new stdObject();
	$locObj1->libName = 'Brooklyn';
	$locObj1->location = "Brooklyn 2M Periodicals";
	$locObj1->callNumBegin = 'PERIODICALS_AN';
	$locObj1->callNumEnd = 'PERIODICALS_AR';
	$locObj1->imageFile = 'shelf195.gif';
	$locObj1->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_AR - PERIODICALS_AR
	$locObj2= new stdObject();
	$locObj2->libName = 'Brooklyn';
	$locObj2->location = "Brooklyn 2M Periodicals";
	$locObj2->callNumBegin = 'PERIODICALS_AR';
	$locObj2->callNumEnd = 'PERIODICALS_AR';
	$locObj2->imageFile = 'shelf196.gif';
	$locObj2->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_AR - PERIODICALS_BU
	$locObj3= new stdObject();
	$locObj3->libName = 'Brooklyn';
	$locObj3->location = "Brooklyn 2M Periodicals";
	$locObj3->callNumBegin = 'PERIODICALS_AR';
	$locObj3->callNumEnd = 'PERIODICALS_BU';
	$locObj3->imageFile = 'shelf197.gif';
	$locObj3->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_BU - PERIODICALS_C0
	$locObj4= new stdObject();
	$locObj4->libName = 'Brooklyn';
	$locObj4->location = "Brooklyn 2M Periodicals";
	$locObj4->callNumBegin = 'PERIODICALS_BU';
	$locObj4->callNumEnd = 'PERIODICALS_C0';
	$locObj4->imageFile = 'shelf198.gif';
	$locObj4->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_C0 - PERIODICALS_D0
	$locObj5= new stdObject();
	$locObj5->libName = 'Brooklyn';
	$locObj5->location = "Brooklyn 2M Periodicals";
	$locObj5->callNumBegin = 'PERIODICALS_C0';
	$locObj5->callNumEnd = 'PERIODICALS_D0';
	$locObj5->imageFile = 'shelf199.gif';
	$locObj5->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_D0 - PERIODICALS_H0
	$locObj6= new stdObject();
	$locObj6->libName = 'Brooklyn';
	$locObj6->location = "Brooklyn 2M Periodicals";
	$locObj6->callNumBegin = 'PERIODICALS_D0';
	$locObj6->callNumEnd = 'PERIODICALS_H0';
	$locObj6->imageFile = 'shelf200.gif';
	$locObj6->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_H0 - PERIODICALS_J0
	$locObj7= new stdObject();
	$locObj7->libName = 'Brooklyn';
	$locObj7->location = "Brooklyn 2M Periodicals";
	$locObj7->callNumBegin = 'PERIODICALS_H0';
	$locObj7->callNumEnd = 'PERIODICALS_J0';
	$locObj7->imageFile = 'shelf201.gif';
	$locObj7->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_J0 - PERIODICALS_MA
	$locObj8= new stdObject();
	$locObj8->libName = 'Brooklyn';
	$locObj8->location = "Brooklyn 2M Periodicals";
	$locObj8->callNumBegin = 'PERIODICALS_J0';
	$locObj8->callNumEnd = 'PERIODICALS_MA';
	$locObj8->imageFile = 'shelf202.gif';
	$locObj8->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_MA - PERIODICALS_MU
	$locObj9= new stdObject();
	$locObj9->libName = 'Brooklyn';
	$locObj9->location = "Brooklyn 2M Periodicals";
	$locObj9->callNumBegin = 'PERIODICALS_MA';
	$locObj9->callNumEnd = 'PERIODICALS_MU';
	$locObj9->imageFile = 'shelf203.gif';
	$locObj9->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_MU - PERIODICALS_PE
	$locObj10= new stdObject();
	$locObj10->libName = 'Brooklyn';
	$locObj10->location = "Brooklyn 2M Periodicals";
	$locObj10->callNumBegin = 'PERIODICALS_MU';
	$locObj10->callNumEnd = 'PERIODICALS_PE';
	$locObj10->imageFile = 'shelf204.gif';
	$locObj10->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_PE - PERIODICALS_SM
	$locObj11= new stdObject();
	$locObj11->libName = 'Brooklyn';
	$locObj11->location = "Brooklyn 2M Periodicals";
	$locObj11->callNumBegin = 'PERIODICALS_PE';
	$locObj11->callNumEnd = 'PERIODICALS_SM';
	$locObj11->imageFile = 'shelf205.gif';
	$locObj11->locNote = 'Stacks Floor 2M';


//location "Brooklyn 2M Periodicals" PERIODICALS_SM - PERIODICALS_Z999
	$locObj12= new stdObject();
	$locObj12->libName = 'Brooklyn';
	$locObj12->location = "Brooklyn 2M Periodicals";
	$locObj12->callNumBegin = 'PERIODICALS_SM';
	$locObj12->callNumEnd = 'PERIODICALS_Z999';
	$locObj12->imageFile = 'shelf206.gif';
	$locObj12->locNote = 'Stacks Floor 2M';


//location "Brooklyn 3rd Floor East"  - 999_000000000000000
	$locObj13= new stdObject();
	$locObj13->libName = 'Brooklyn';
	$locObj13->location = "Brooklyn 3rd Floor East";
	$locObj13->callNumBegin = '';
	$locObj13->callNumEnd = '999_000000000000000';
	$locObj13->imageFile = 'ref.gif';
	$locObj13->locNote = 'These items have moved. Ask for help at the reference desk.';


//location "Brooklyn Art & Arch Periodicals"  - Z
	$locObj14= new stdObject();
	$locObj14->libName = 'Brooklyn';
	$locObj14->location = "Brooklyn Art & Arch Periodicals";
	$locObj14->callNumBegin = '';
	$locObj14->callNumEnd = 'Z';
	$locObj14->imageFile = 'fl2.gif';
	$locObj14->locNote = '';


//location "Brooklyn Artists' Books/Ask at Reference Desk" 0_000000000000000 - 999_990000000000000
	$locObj15= new stdObject();
	$locObj15->libName = 'Brooklyn';
	$locObj15->location = "Brooklyn Artists' Books/Ask at Reference Desk";
	$locObj15->callNumBegin = '0_000000000000000';
	$locObj15->callNumEnd = '999_990000000000000';
	$locObj15->imageFile = 'ref.gif';
	$locObj15->locNote = '';


//location "Brooklyn Children's Non-Fiction" ACM000 - ACM811_P
	$locObj16= new stdObject();
	$locObj16->libName = 'Brooklyn';
	$locObj16->location = "Brooklyn Children's Non-Fiction";
	$locObj16->callNumBegin = 'ACM000';
	$locObj16->callNumEnd = 'ACM811_P';
	$locObj16->imageFile = 'shelf186.gif';
	$locObj16->locNote = 'Floor 2M';


//location "Brooklyn Children's Fiction" ACM811_P - ACMF
	$locObj17= new stdObject();
	$locObj17->libName = 'Brooklyn';
	$locObj17->location = "Brooklyn Children's Fiction";
	$locObj17->callNumBegin = 'ACM811_P';
	$locObj17->callNumEnd = 'ACMF';
	$locObj17->imageFile = 'shelf187.gif';
	$locObj17->locNote = 'Floor 2M';


//location "Brooklyn Children's Fiction" ACMF - ACMS
	$locObj18= new stdObject();
	$locObj18->libName = 'Brooklyn';
	$locObj18->location = "Brooklyn Children's Fiction";
	$locObj18->callNumBegin = 'ACMF';
	$locObj18->callNumEnd = 'ACMS';
	$locObj18->imageFile = 'shelf188.gif';
	$locObj18->locNote = 'Floor 2M';


//location "Brooklyn Children's Fiction" ACMS - ACMZ
	$locObj19= new stdObject();
	$locObj19->libName = 'Brooklyn';
	$locObj19->location = "Brooklyn Children's Fiction";
	$locObj19->callNumBegin = 'ACMS';
	$locObj19->callNumEnd = 'ACMZ';
	$locObj19->imageFile = 'shelf189.gif';
	$locObj19->locNote = 'Floor 2M';


//location "Brooklyn Children's Oversize" ACMS - ACMZ
	$locObj20= new stdObject();
	$locObj20->libName = 'Brooklyn';
	$locObj20->location = "Brooklyn Children's Oversize";
	$locObj20->callNumBegin = 'ACMS';
	$locObj20->callNumEnd = 'ACMZ';
	$locObj20->imageFile = 'shelf189.gif';
	$locObj20->locNote = 'Floor 2M';


//location "Brooklyn Circulation Desk - CD/DVD" 0_000000000000000 - 999_990000000000000
	$locObj21= new stdObject();
	$locObj21->libName = 'Brooklyn';
	$locObj21->location = "Brooklyn Circulation Desk - CD/DVD";
	$locObj21->callNumBegin = '0_000000000000000';
	$locObj21->callNumEnd = '999_990000000000000';
	$locObj21->imageFile = 'circ.gif';
	$locObj21->locNote = '';


//location "Brooklyn Circulation Desk - Maps" 0_000000000000000 - 999_990000000000000
	$locObj22= new stdObject();
	$locObj22->libName = 'Brooklyn';
	$locObj22->location = "Brooklyn Circulation Desk - Maps";
	$locObj22->callNumBegin = '0_000000000000000';
	$locObj22->callNumEnd = '999_990000000000000';
	$locObj22->imageFile = 'circ.gif';
	$locObj22->locNote = '';


//location "Brooklyn Closed Stacks/Ask at Reference Desk"  - 999_990000000000000
	$locObj23= new stdObject();
	$locObj23->libName = 'Brooklyn';
	$locObj23->location = "Brooklyn Closed Stacks/Ask at Reference Desk";
	$locObj23->callNumBegin = '';
	$locObj23->callNumEnd = '999_990000000000000';
	$locObj23->imageFile = 'ref.gif';
	$locObj23->locNote = '';


//location "Brooklyn Closed Stacks Oversize/Ask at Reference Desk"  - 999_990000000000000
	$locObj24= new stdObject();
	$locObj24->libName = 'Brooklyn';
	$locObj24->location = "Brooklyn Closed Stacks Oversize/Ask at Reference Desk";
	$locObj24->callNumBegin = '';
	$locObj24->callNumEnd = '999_990000000000000';
	$locObj24->imageFile = 'ref.gif';
	$locObj24->locNote = '';


//location "Brooklyn Current Periodicals" A - Z
	$locObj25= new stdObject();
	$locObj25->libName = 'Brooklyn';
	$locObj25->location = "Brooklyn Current Periodicals";
	$locObj25->callNumBegin = 'A';
	$locObj25->callNumEnd = 'Z';
	$locObj25->imageFile = 'fl2.gif';
	$locObj25->locNote = '';


//location "Brooklyn Fiction" A - BRO
	$locObj26= new stdObject();
	$locObj26->libName = 'Brooklyn';
	$locObj26->location = "Brooklyn Fiction";
	$locObj26->callNumBegin = 'A';
	$locObj26->callNumEnd = 'BRO';
	$locObj26->imageFile = 'shelf207.gif';
	$locObj26->locNote = 'Floor 1';


//location "Brooklyn Fiction" BRO - DEI
	$locObj27= new stdObject();
	$locObj27->libName = 'Brooklyn';
	$locObj27->location = "Brooklyn Fiction";
	$locObj27->callNumBegin = 'BRO';
	$locObj27->callNumEnd = 'DEI';
	$locObj27->imageFile = 'shelf208.gif';
	$locObj27->locNote = 'Floor 1';


//location "Brooklyn Fiction" DEI - FIC
	$locObj28= new stdObject();
	$locObj28->libName = 'Brooklyn';
	$locObj28->location = "Brooklyn Fiction";
	$locObj28->callNumBegin = 'DEI';
	$locObj28->callNumEnd = 'FIC';
	$locObj28->imageFile = 'shelf209.gif';
	$locObj28->locNote = 'Floor 1';


//location "Brooklyn Fiction" FIC - HAR
	$locObj29= new stdObject();
	$locObj29->libName = 'Brooklyn';
	$locObj29->location = "Brooklyn Fiction";
	$locObj29->callNumBegin = 'FIC';
	$locObj29->callNumEnd = 'HAR';
	$locObj29->imageFile = 'shelf210.gif';
	$locObj29->locNote = 'Floor 1';


//location "Brooklyn Fiction" HAR - KAV
	$locObj30= new stdObject();
	$locObj30->libName = 'Brooklyn';
	$locObj30->location = "Brooklyn Fiction";
	$locObj30->callNumBegin = 'HAR';
	$locObj30->callNumEnd = 'KAV';
	$locObj30->imageFile = 'shelf211.gif';
	$locObj30->locNote = 'Floor 1';


//location "Brooklyn Fiction" KAV - MAN
	$locObj31= new stdObject();
	$locObj31->libName = 'Brooklyn';
	$locObj31->location = "Brooklyn Fiction";
	$locObj31->callNumBegin = 'KAV';
	$locObj31->callNumEnd = 'MAN';
	$locObj31->imageFile = 'shelf212.gif';
	$locObj31->locNote = 'Floor 1';


//location "Brooklyn Fiction" MAN - MAU
	$locObj32= new stdObject();
	$locObj32->libName = 'Brooklyn';
	$locObj32->location = "Brooklyn Fiction";
	$locObj32->callNumBegin = 'MAN';
	$locObj32->callNumEnd = 'MAU';
	$locObj32->imageFile = 'shelf213.gif';
	$locObj32->locNote = 'Floor 1';


//location "Brooklyn Fiction" MAU - RAN
	$locObj33= new stdObject();
	$locObj33->libName = 'Brooklyn';
	$locObj33->location = "Brooklyn Fiction";
	$locObj33->callNumBegin = 'MAU';
	$locObj33->callNumEnd = 'RAN';
	$locObj33->imageFile = 'shelf214.gif';
	$locObj33->locNote = 'Floor 1';


//location "Brooklyn Fiction" RAN - SPA
	$locObj34= new stdObject();
	$locObj34->libName = 'Brooklyn';
	$locObj34->location = "Brooklyn Fiction";
	$locObj34->callNumBegin = 'RAN';
	$locObj34->callNumEnd = 'SPA';
	$locObj34->imageFile = 'shelf215.gif';
	$locObj34->locNote = 'Floor 1';


//location "Brooklyn Fiction" SPA - Z
	$locObj35= new stdObject();
	$locObj35->libName = 'Brooklyn';
	$locObj35->location = "Brooklyn Fiction";
	$locObj35->callNumBegin = 'SPA';
	$locObj35->callNumEnd = 'Z';
	$locObj35->imageFile = 'shelf216.gif';
	$locObj35->locNote = 'Floor 1';


//location "Brooklyn Lower Level Cage/Ask at Reference Desk"  - Z
	$locObj36= new stdObject();
	$locObj36->libName = 'Brooklyn';
	$locObj36->location = "Brooklyn Lower Level Cage/Ask at Reference Desk";
	$locObj36->callNumBegin = '';
	$locObj36->callNumEnd = 'Z';
	$locObj36->imageFile = 'ref.gif';
	$locObj36->locNote = '';


//location "Brooklyn Lower Level Periodicals" A - Z
	$locObj37= new stdObject();
	$locObj37->libName = 'Brooklyn';
	$locObj37->location = "Brooklyn Lower Level Periodicals";
	$locObj37->callNumBegin = 'A';
	$locObj37->callNumEnd = 'Z';
	$locObj37->imageFile = 'ref.gif';
	$locObj37->locNote = 'Lower Level';


//location "Brooklyn Lower Level Stacks"  - 999_000000000000000
	$locObj38= new stdObject();
	$locObj38->libName = 'Brooklyn';
	$locObj38->location = "Brooklyn Lower Level Stacks";
	$locObj38->callNumBegin = '';
	$locObj38->callNumEnd = '999_000000000000000';
	$locObj38->imageFile = 'ref.gif';
	$locObj38->locNote = 'Lower Level';


//location "Brooklyn Microforms" A - Z
	$locObj39= new stdObject();
	$locObj39->libName = 'Brooklyn';
	$locObj39->location = "Brooklyn Microforms";
	$locObj39->callNumBegin = 'A';
	$locObj39->callNumEnd = 'Z';
	$locObj39->imageFile = 'ref.gif';
	$locObj39->locNote = 'Ask for help with microforms at the reference desk.';


//location "Brooklyn Pop-up Books/Ask at Reference Desk" 0_000000000000000 - 999_990000000000000
	$locObj40= new stdObject();
	$locObj40->libName = 'Brooklyn';
	$locObj40->location = "Brooklyn Pop-up Books/Ask at Reference Desk";
	$locObj40->callNumBegin = '0_000000000000000';
	$locObj40->callNumEnd = '999_990000000000000';
	$locObj40->imageFile = 'ref.gif';
	$locObj40->locNote = '';


//location "Brooklyn Pop-up Books/Ask at Reference Desk" 0_000000000000000 - 999_990000000000000
	$locObj41= new stdObject();
	$locObj41->libName = 'Brooklyn';
	$locObj41->location = "Brooklyn Pop-up Books/Ask at Reference Desk";
	$locObj41->callNumBegin = '0_000000000000000';
	$locObj41->callNumEnd = '999_990000000000000';
	$locObj41->imageFile = 'ref.gif';
	$locObj41->locNote = '';


//location "Brooklyn Ready Reference" 0_000000000000000 - 999_990000000000000
	$locObj42= new stdObject();
	$locObj42->libName = 'Brooklyn';
	$locObj42->location = "Brooklyn Ready Reference";
	$locObj42->callNumBegin = '0_000000000000000';
	$locObj42->callNumEnd = '999_990000000000000';
	$locObj42->imageFile = 'ready.gif';
	$locObj42->locNote = '';


//location "Brooklyn Reference" 0_000000000000000 - 30_000000000000000
	$locObj43= new stdObject();
	$locObj43->libName = 'Brooklyn';
	$locObj43->location = "Brooklyn Reference";
	$locObj43->callNumBegin = '0_000000000000000';
	$locObj43->callNumEnd = '30_000000000000000';
	$locObj43->imageFile = 'shelf217.gif';
	$locObj43->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 30_000000000000000 - 80_000000000000000
	$locObj44= new stdObject();
	$locObj44->libName = 'Brooklyn';
	$locObj44->location = "Brooklyn Reference";
	$locObj44->callNumBegin = '30_000000000000000';
	$locObj44->callNumEnd = '80_000000000000000';
	$locObj44->imageFile = 'shelf218.gif';
	$locObj44->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 80_000000000000000 - 291_000000000000000
	$locObj45= new stdObject();
	$locObj45->libName = 'Brooklyn';
	$locObj45->location = "Brooklyn Reference";
	$locObj45->callNumBegin = '80_000000000000000';
	$locObj45->callNumEnd = '291_000000000000000';
	$locObj45->imageFile = 'shelf219.gif';
	$locObj45->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 291_000000000000000 - 297_000000000000000
	$locObj46= new stdObject();
	$locObj46->libName = 'Brooklyn';
	$locObj46->location = "Brooklyn Reference";
	$locObj46->callNumBegin = '291_000000000000000';
	$locObj46->callNumEnd = '297_000000000000000';
	$locObj46->imageFile = 'shelf220.gif';
	$locObj46->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 297_000000000000000 - 307_000000000000000
	$locObj47= new stdObject();
	$locObj47->libName = 'Brooklyn';
	$locObj47->location = "Brooklyn Reference";
	$locObj47->callNumBegin = '297_000000000000000';
	$locObj47->callNumEnd = '307_000000000000000';
	$locObj47->imageFile = 'shelf221.gif';
	$locObj47->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 307_000000000000000 - 361_000000000000000
	$locObj48= new stdObject();
	$locObj48->libName = 'Brooklyn';
	$locObj48->location = "Brooklyn Reference";
	$locObj48->callNumBegin = '307_000000000000000';
	$locObj48->callNumEnd = '361_000000000000000';
	$locObj48->imageFile = 'shelf222.gif';
	$locObj48->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 361_000000000000000 - 528_000000000000000
	$locObj49= new stdObject();
	$locObj49->libName = 'Brooklyn';
	$locObj49->location = "Brooklyn Reference";
	$locObj49->callNumBegin = '361_000000000000000';
	$locObj49->callNumEnd = '528_000000000000000';
	$locObj49->imageFile = 'shelf223.gif';
	$locObj49->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 528_000000000000000 - 690_000000000000000
	$locObj50= new stdObject();
	$locObj50->libName = 'Brooklyn';
	$locObj50->location = "Brooklyn Reference";
	$locObj50->callNumBegin = '528_000000000000000';
	$locObj50->callNumEnd = '690_000000000000000';
	$locObj50->imageFile = 'shelf224.gif';
	$locObj50->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 690_000000000000000 - 720_000000000000000
	$locObj51= new stdObject();
	$locObj51->libName = 'Brooklyn';
	$locObj51->location = "Brooklyn Reference";
	$locObj51->callNumBegin = '690_000000000000000';
	$locObj51->callNumEnd = '720_000000000000000';
	$locObj51->imageFile = 'shelf225.gif';
	$locObj51->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 720_000000000000000 - 808_000000000000000
	$locObj52= new stdObject();
	$locObj52->libName = 'Brooklyn';
	$locObj52->location = "Brooklyn Reference";
	$locObj52->callNumBegin = '720_000000000000000';
	$locObj52->callNumEnd = '808_000000000000000';
	$locObj52->imageFile = 'shelf226.gif';
	$locObj52->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 808_000000000000000 - 917_000000000000000
	$locObj53= new stdObject();
	$locObj53->libName = 'Brooklyn';
	$locObj53->location = "Brooklyn Reference";
	$locObj53->callNumBegin = '808_000000000000000';
	$locObj53->callNumEnd = '917_000000000000000';
	$locObj53->imageFile = 'shelf227.gif';
	$locObj53->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference" 917_000000000000000 - 999_000000000000000
	$locObj54= new stdObject();
	$locObj54->libName = 'Brooklyn';
	$locObj54->location = "Brooklyn Reference";
	$locObj54->callNumBegin = '917_000000000000000';
	$locObj54->callNumEnd = '999_000000000000000';
	$locObj54->imageFile = 'shelf228.gif';
	$locObj54->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference - Atlases" 000_000000000000000 - 999_000000000000000
	$locObj55= new stdObject();
	$locObj55->libName = 'Brooklyn';
	$locObj55->location = "Brooklyn Reference - Atlases";
	$locObj55->callNumBegin = '000_000000000000000';
	$locObj55->callNumEnd = '999_000000000000000';
	$locObj55->imageFile = 'ref.gif';
	$locObj55->locNote = 'Floor 1 - reference';


//location "Brooklyn Reference - Sanborn Maps" 000_000000000000000 - 999_000000000000000
	$locObj56= new stdObject();
	$locObj56->libName = 'Brooklyn';
	$locObj56->location = "Brooklyn Reference - Sanborn Maps";
	$locObj56->callNumBegin = '000_000000000000000';
	$locObj56->callNumEnd = '999_000000000000000';
	$locObj56->imageFile = 'ref.gif';
	$locObj56->locNote = 'Floor 1 - reference';


//location "Brooklyn Special Collection Periodicals/Ask at Reference Desk" A - Z
	$locObj57= new stdObject();
	$locObj57->libName = 'Brooklyn';
	$locObj57->location = "Brooklyn Special Collection Periodicals/Ask at Reference Desk";
	$locObj57->callNumBegin = 'A';
	$locObj57->callNumEnd = 'Z';
	$locObj57->imageFile = 'ref.gif';
	$locObj57->locNote = 'Request this item at the reference desk.';


//location "Brooklyn Reserves" 000_000000000000000 - 999_000000000000000
	$locObj58= new stdObject();
	$locObj58->libName = 'Brooklyn';
	$locObj58->location = "Brooklyn Reserves";
	$locObj58->callNumBegin = '000_000000000000000';
	$locObj58->callNumEnd = '999_000000000000000';
	$locObj58->imageFile = 'circ.gif';
	$locObj58->locNote = 'Request this item at the circulation desk.';


//location "Brooklyn Stacks" 001_000000000000000 - 006_000000000000000_5A
	$locObj59= new stdObject();
	$locObj59->libName = 'Brooklyn';
	$locObj59->location = "Brooklyn Stacks";
	$locObj59->callNumBegin = '001_000000000000000';
	$locObj59->callNumEnd = '006_000000000000000_5A';
	$locObj59->imageFile = 'shelf1.gif';
	$locObj59->locNote = 'Floor 1';


//location "Brooklyn Stacks" 006_000000000000000_5A - 069_028500000000000_C
	$locObj60= new stdObject();
	$locObj60->libName = 'Brooklyn';
	$locObj60->location = "Brooklyn Stacks";
	$locObj60->callNumBegin = '006_000000000000000_5A';
	$locObj60->callNumEnd = '069_028500000000000_C';
	$locObj60->imageFile = 'shelf2.gif';
	$locObj60->locNote = 'Floor 1';


//location "Brooklyn Stacks" 069_028500000000000_C - 111_100000000000000_K
	$locObj61= new stdObject();
	$locObj61->libName = 'Brooklyn';
	$locObj61->location = "Brooklyn Stacks";
	$locObj61->callNumBegin = '069_028500000000000_C';
	$locObj61->callNumEnd = '111_100000000000000_K';
	$locObj61->imageFile = 'shelf3.gif';
	$locObj61->locNote = 'Floor 1';


//location "Brooklyn Stacks" 111_100000000000000_K - 136_100000000000000_S
	$locObj62= new stdObject();
	$locObj62->libName = 'Brooklyn';
	$locObj62->location = "Brooklyn Stacks";
	$locObj62->callNumBegin = '111_100000000000000_K';
	$locObj62->callNumEnd = '136_100000000000000_S';
	$locObj62->imageFile = 'shelf4.gif';
	$locObj62->locNote = 'Floor 1';


//location "Brooklyn Stacks" 136_100000000000000_S - 150_195200000000000
	$locObj63= new stdObject();
	$locObj63->libName = 'Brooklyn';
	$locObj63->location = "Brooklyn Stacks";
	$locObj63->callNumBegin = '136_100000000000000_S';
	$locObj63->callNumEnd = '150_195200000000000';
	$locObj63->imageFile = 'shelf5.gif';
	$locObj63->locNote = 'Floor 1';


//location "Brooklyn Stacks" 150_195200000000000 - 155_000000000000000_T
	$locObj64= new stdObject();
	$locObj64->libName = 'Brooklyn';
	$locObj64->location = "Brooklyn Stacks";
	$locObj64->callNumBegin = '150_195200000000000';
	$locObj64->callNumEnd = '155_000000000000000_T';
	$locObj64->imageFile = 'shelf6.gif';
	$locObj64->locNote = 'Floor 1';


//location "Brooklyn Stacks" 155_000000000000000_T - 160_000000000000000_J
	$locObj65= new stdObject();
	$locObj65->libName = 'Brooklyn';
	$locObj65->location = "Brooklyn Stacks";
	$locObj65->callNumBegin = '155_000000000000000_T';
	$locObj65->callNumEnd = '160_000000000000000_J';
	$locObj65->imageFile = 'shelf7.gif';
	$locObj65->locNote = 'Floor 1';


//location "Brooklyn Stacks" 160_000000000000000_J - 190_000000000000000_R
	$locObj66= new stdObject();
	$locObj66->libName = 'Brooklyn';
	$locObj66->location = "Brooklyn Stacks";
	$locObj66->callNumBegin = '160_000000000000000_J';
	$locObj66->callNumEnd = '190_000000000000000_R';
	$locObj66->imageFile = 'shelf8.gif';
	$locObj66->locNote = 'Floor 1';


//location "Brooklyn Stacks" 190_000000000000000_R - 194_900000000000000_W
	$locObj67= new stdObject();
	$locObj67->libName = 'Brooklyn';
	$locObj67->location = "Brooklyn Stacks";
	$locObj67->callNumBegin = '190_000000000000000_R';
	$locObj67->callNumEnd = '194_900000000000000_W';
	$locObj67->imageFile = 'shelf9.gif';
	$locObj67->locNote = 'Floor 1';


//location "Brooklyn Stacks" 194_900000000000000_W - 230_200000000000000_W
	$locObj68= new stdObject();
	$locObj68->libName = 'Brooklyn';
	$locObj68->location = "Brooklyn Stacks";
	$locObj68->callNumBegin = '194_900000000000000_W';
	$locObj68->callNumEnd = '230_200000000000000_W';
	$locObj68->imageFile = 'shelf10.gif';
	$locObj68->locNote = 'Floor 1';


//location "Brooklyn Stacks" 230_200000000000000_W - 290_000000000000000_N
	$locObj69= new stdObject();
	$locObj69->libName = 'Brooklyn';
	$locObj69->location = "Brooklyn Stacks";
	$locObj69->callNumBegin = '230_200000000000000_W';
	$locObj69->callNumEnd = '290_000000000000000_N';
	$locObj69->imageFile = 'shelf11.gif';
	$locObj69->locNote = 'Floor 1';


//location "Brooklyn Stacks" 290_000000000000000_N - 299_510000000000000_P
	$locObj70= new stdObject();
	$locObj70->libName = 'Brooklyn';
	$locObj70->location = "Brooklyn Stacks";
	$locObj70->callNumBegin = '290_000000000000000_N';
	$locObj70->callNumEnd = '299_510000000000000_P';
	$locObj70->imageFile = 'shelf12.gif';
	$locObj70->locNote = 'Floor 1';


//location "Brooklyn Stacks" 299_510000000000000_P - 301_160000000000000_T
	$locObj71= new stdObject();
	$locObj71->libName = 'Brooklyn';
	$locObj71->location = "Brooklyn Stacks";
	$locObj71->callNumBegin = '299_510000000000000_P';
	$locObj71->callNumEnd = '301_160000000000000_T';
	$locObj71->imageFile = 'shelf13.gif';
	$locObj71->locNote = 'Floor 1';


//location "Brooklyn Stacks" 301_160000000000000_T - 301_402000000000000_M
	$locObj72= new stdObject();
	$locObj72->libName = 'Brooklyn';
	$locObj72->location = "Brooklyn Stacks";
	$locObj72->callNumBegin = '301_160000000000000_T';
	$locObj72->callNumEnd = '301_402000000000000_M';
	$locObj72->imageFile = 'shelf14.gif';
	$locObj72->locNote = 'Floor 1';


//location "Brooklyn Stacks" 301_402000000000000_M - 301_620000000000000_0
	$locObj73= new stdObject();
	$locObj73->libName = 'Brooklyn';
	$locObj73->location = "Brooklyn Stacks";
	$locObj73->callNumBegin = '301_402000000000000_M';
	$locObj73->callNumEnd = '301_620000000000000_0';
	$locObj73->imageFile = 'shelf15.gif';
	$locObj73->locNote = 'Floor 1';


//location "Brooklyn Stacks" 301__620000000000000_0 - 304_600000000000000
	$locObj74= new stdObject();
	$locObj74->libName = 'Brooklyn';
	$locObj74->location = "Brooklyn Stacks";
	$locObj74->callNumBegin = '301__620000000000000_0';
	$locObj74->callNumEnd = '304_600000000000000';
	$locObj74->imageFile = 'shelf16.gif';
	$locObj74->locNote = 'Floor 1';


//location "Brooklyn Stacks" 304_600000000000000 - 305_890000000000000
	$locObj75= new stdObject();
	$locObj75->libName = 'Brooklyn';
	$locObj75->location = "Brooklyn Stacks";
	$locObj75->callNumBegin = '304_600000000000000';
	$locObj75->callNumEnd = '305_890000000000000';
	$locObj75->imageFile = 'shelf17.gif';
	$locObj75->locNote = 'Floor 1';


//location "Brooklyn Stacks" 305_890000000000000 - 306_850000000000000
	$locObj76= new stdObject();
	$locObj76->libName = 'Brooklyn';
	$locObj76->location = "Brooklyn Stacks";
	$locObj76->callNumBegin = '305_890000000000000';
	$locObj76->callNumEnd = '306_850000000000000';
	$locObj76->imageFile = 'shelf18.gif';
	$locObj76->locNote = 'Floor 1';


//location "Brooklyn Stacks" 306_850000000000000 - 307_760900000000000
	$locObj77= new stdObject();
	$locObj77->libName = 'Brooklyn';
	$locObj77->location = "Brooklyn Stacks";
	$locObj77->callNumBegin = '306_850000000000000';
	$locObj77->callNumEnd = '307_760900000000000';
	$locObj77->imageFile = 'shelf19.gif';
	$locObj77->locNote = 'Floor 1';


//location "Brooklyn Stacks" 307_760900000000000 - 309_180000000000000
	$locObj78= new stdObject();
	$locObj78->libName = 'Brooklyn';
	$locObj78->location = "Brooklyn Stacks";
	$locObj78->callNumBegin = '307_760900000000000';
	$locObj78->callNumEnd = '309_180000000000000';
	$locObj78->imageFile = 'shelf20.gif';
	$locObj78->locNote = 'Floor 1';


//location "Brooklyn Stacks" 309_180000000000000 - 320_940000000000000
	$locObj79= new stdObject();
	$locObj79->libName = 'Brooklyn';
	$locObj79->location = "Brooklyn Stacks";
	$locObj79->callNumBegin = '309_180000000000000';
	$locObj79->callNumEnd = '320_940000000000000';
	$locObj79->imageFile = 'shelf21.gif';
	$locObj79->locNote = 'Floor 1';


//location "Brooklyn Stacks" 320_940000000000000 - 324_600000000000000_K
	$locObj80= new stdObject();
	$locObj80->libName = 'Brooklyn';
	$locObj80->location = "Brooklyn Stacks";
	$locObj80->callNumBegin = '320_940000000000000';
	$locObj80->callNumEnd = '324_600000000000000_K';
	$locObj80->imageFile = 'shelf22.gif';
	$locObj80->locNote = 'Floor 1';


//location "Brooklyn Stacks" 324_600000000000000_K - 327_730000000000000_L
	$locObj81= new stdObject();
	$locObj81->libName = 'Brooklyn';
	$locObj81->location = "Brooklyn Stacks";
	$locObj81->callNumBegin = '324_600000000000000_K';
	$locObj81->callNumEnd = '327_730000000000000_L';
	$locObj81->imageFile = 'shelf23.gif';
	$locObj81->locNote = 'Floor 1';


//location "Brooklyn Stacks" 327_730000000000000_L - 330_917320000000000
	$locObj82= new stdObject();
	$locObj82->libName = 'Brooklyn';
	$locObj82->location = "Brooklyn Stacks";
	$locObj82->callNumBegin = '327_730000000000000_L';
	$locObj82->callNumEnd = '330_917320000000000';
	$locObj82->imageFile = 'shelf24.gif';
	$locObj82->locNote = 'Floor 1';


//location "Brooklyn Stacks" 330_917320000000000 - 331_850000000000000_K
	$locObj83= new stdObject();
	$locObj83->libName = 'Brooklyn';
	$locObj83->location = "Brooklyn Stacks";
	$locObj83->callNumBegin = '330_917320000000000';
	$locObj83->callNumEnd = '331_850000000000000_K';
	$locObj83->imageFile = 'shelf25.gif';
	$locObj83->locNote = 'Floor 1';


//location "Brooklyn Stacks" 331_850000000000000_K - 335_000000000000000_C
	$locObj84= new stdObject();
	$locObj84->libName = 'Brooklyn';
	$locObj84->location = "Brooklyn Stacks";
	$locObj84->callNumBegin = '331_850000000000000_K';
	$locObj84->callNumEnd = '335_000000000000000_C';
	$locObj84->imageFile = 'shelf26.gif';
	$locObj84->locNote = 'Floor 1';


//location "Brooklyn Stacks" 335_000000000000000_C - 338_477000000000000_H
	$locObj85= new stdObject();
	$locObj85->libName = 'Brooklyn';
	$locObj85->location = "Brooklyn Stacks";
	$locObj85->callNumBegin = '335_000000000000000_C';
	$locObj85->callNumEnd = '338_477000000000000_H';
	$locObj85->imageFile = 'shelf27.gif';
	$locObj85->locNote = 'Floor 1';


//location "Brooklyn Stacks" 338_477000000000000_H - 342_040000000000000
	$locObj86= new stdObject();
	$locObj86->libName = 'Brooklyn';
	$locObj86->location = "Brooklyn Stacks";
	$locObj86->callNumBegin = '338_477000000000000_H';
	$locObj86->callNumEnd = '342_040000000000000';
	$locObj86->imageFile = 'shelf28.gif';
	$locObj86->locNote = 'Floor 1';


//location "Brooklyn Stacks" 342_040000000000000 - 353_008000000000000
	$locObj87= new stdObject();
	$locObj87->libName = 'Brooklyn';
	$locObj87->location = "Brooklyn Stacks";
	$locObj87->callNumBegin = '342_040000000000000';
	$locObj87->callNumEnd = '353_008000000000000';
	$locObj87->imageFile = 'shelf29.gif';
	$locObj87->locNote = 'Floor 1';


//location "Brooklyn Stacks" 353_008000000000000 - 362_293000000000000
	$locObj88= new stdObject();
	$locObj88->libName = 'Brooklyn';
	$locObj88->location = "Brooklyn Stacks";
	$locObj88->callNumBegin = '353_008000000000000';
	$locObj88->callNumEnd = '362_293000000000000';
	$locObj88->imageFile = 'shelf30.gif';
	$locObj88->locNote = 'Floor 1';


//location "Brooklyn Stacks" 362_293000000000000 - 364_152000000000000
	$locObj89= new stdObject();
	$locObj89->libName = 'Brooklyn';
	$locObj89->location = "Brooklyn Stacks";
	$locObj89->callNumBegin = '362_293000000000000';
	$locObj89->callNumEnd = '364_152000000000000';
	$locObj89->imageFile = 'shelf31.gif';
	$locObj89->locNote = 'Floor 1';


//location "Brooklyn Stacks" 364_152000000000000 - 371_010000000000000_G
	$locObj90= new stdObject();
	$locObj90->libName = 'Brooklyn';
	$locObj90->location = "Brooklyn Stacks";
	$locObj90->callNumBegin = '364_152000000000000';
	$locObj90->callNumEnd = '371_010000000000000_G';
	$locObj90->imageFile = 'shelf32.gif';
	$locObj90->locNote = 'Floor 1';


//location "Brooklyn Stacks" 371_010000000000000_G - 378_198100000000000_B
	$locObj91= new stdObject();
	$locObj91->libName = 'Brooklyn';
	$locObj91->location = "Brooklyn Stacks";
	$locObj91->callNumBegin = '371_010000000000000_G';
	$locObj91->callNumEnd = '378_198100000000000_B';
	$locObj91->imageFile = 'shelf33.gif';
	$locObj91->locNote = 'Floor 1';


//location "Brooklyn Stacks" 378_198100000000000_B - 388_320000000000000
	$locObj92= new stdObject();
	$locObj92->libName = 'Brooklyn';
	$locObj92->location = "Brooklyn Stacks";
	$locObj92->callNumBegin = '378_198100000000000_B';
	$locObj92->callNumEnd = '388_320000000000000';
	$locObj92->imageFile = 'shelf34.gif';
	$locObj92->locNote = 'Floor 1';


//location "Brooklyn Stacks" 388_320000000000000 - 391_090400000000000_F
	$locObj93= new stdObject();
	$locObj93->libName = 'Brooklyn';
	$locObj93->location = "Brooklyn Stacks";
	$locObj93->callNumBegin = '388_320000000000000';
	$locObj93->callNumEnd = '391_090400000000000_F';
	$locObj93->imageFile = 'shelf35.gif';
	$locObj93->locNote = 'Floor 1';


//location "Brooklyn Stacks" 391_090400000000000_F - 391_200000000000000
	$locObj94= new stdObject();
	$locObj94->libName = 'Brooklyn';
	$locObj94->location = "Brooklyn Stacks";
	$locObj94->callNumBegin = '391_090400000000000_F';
	$locObj94->callNumEnd = '391_200000000000000';
	$locObj94->imageFile = 'shelf36.gif';
	$locObj94->locNote = 'Floor 1';


//location "Brooklyn Stacks" 391_200000000000000 - 398_209000000000000
	$locObj95= new stdObject();
	$locObj95->libName = 'Brooklyn';
	$locObj95->location = "Brooklyn Stacks";
	$locObj95->callNumBegin = '391_200000000000000';
	$locObj95->callNumEnd = '398_209000000000000';
	$locObj95->imageFile = 'shelf37.gif';
	$locObj95->locNote = 'Floor 1';


//location "Brooklyn Stacks" 398_209000000000000 - 500_000000000000000_B
	$locObj96= new stdObject();
	$locObj96->libName = 'Brooklyn';
	$locObj96->location = "Brooklyn Stacks";
	$locObj96->callNumBegin = '398_209000000000000';
	$locObj96->callNumEnd = '500_000000000000000_B';
	$locObj96->imageFile = 'shelf38.gif';
	$locObj96->locNote = 'Floor 1';


//location "Brooklyn Stacks" 500_000000000000000_B - 512_860000000000000_S
	$locObj97= new stdObject();
	$locObj97->libName = 'Brooklyn';
	$locObj97->location = "Brooklyn Stacks";
	$locObj97->callNumBegin = '500_000000000000000_B';
	$locObj97->callNumEnd = '512_860000000000000_S';
	$locObj97->imageFile = 'shelf39.gif';
	$locObj97->locNote = 'Floor 1';


//location "Brooklyn Stacks" 512_860000000000000_S - 523_112000000000000_H
	$locObj98= new stdObject();
	$locObj98->libName = 'Brooklyn';
	$locObj98->location = "Brooklyn Stacks";
	$locObj98->callNumBegin = '512_860000000000000_S';
	$locObj98->callNumEnd = '523_112000000000000_H';
	$locObj98->imageFile = 'shelf40.gif';
	$locObj98->locNote = 'Floor 1';


//location "Brooklyn Stacks" 523_112000000000000_H - 535_300000000000000_M
	$locObj99= new stdObject();
	$locObj99->libName = 'Brooklyn';
	$locObj99->location = "Brooklyn Stacks";
	$locObj99->callNumBegin = '523_112000000000000_H';
	$locObj99->callNumEnd = '535_300000000000000_M';
	$locObj99->imageFile = 'shelf41.gif';
	$locObj99->locNote = 'Floor 1';


//location "Brooklyn Stacks" 535_300000000000000_M - 547_730000000000000
	$locObj100= new stdObject();
	$locObj100->libName = 'Brooklyn';
	$locObj100->location = "Brooklyn Stacks";
	$locObj100->callNumBegin = '535_300000000000000_M';
	$locObj100->callNumEnd = '547_730000000000000';
	$locObj100->imageFile = 'shelf42.gif';
	$locObj100->locNote = 'Floor 1';


//location "Brooklyn Stacks" 547_730000000000000 - 574_192000000000000
	$locObj101= new stdObject();
	$locObj101->libName = 'Brooklyn';
	$locObj101->location = "Brooklyn Stacks";
	$locObj101->callNumBegin = '547_730000000000000';
	$locObj101->callNumEnd = '574_192000000000000';
	$locObj101->imageFile = 'shelf43.gif';
	$locObj101->locNote = 'Floor 1';


//location "Brooklyn Stacks" 574_192000000000000 - 597_800000000000000
	$locObj102= new stdObject();
	$locObj102->libName = 'Brooklyn';
	$locObj102->location = "Brooklyn Stacks";
	$locObj102->callNumBegin = '574_192000000000000';
	$locObj102->callNumEnd = '597_800000000000000';
	$locObj102->imageFile = 'shelf44.gif';
	$locObj102->locNote = 'Floor 1';


//location "Brooklyn Stacks" 597_800000000000000 - 612_670000000000000
	$locObj103= new stdObject();
	$locObj103->libName = 'Brooklyn';
	$locObj103->location = "Brooklyn Stacks";
	$locObj103->callNumBegin = '597_800000000000000';
	$locObj103->callNumEnd = '612_670000000000000';
	$locObj103->imageFile = 'shelf45.gif';
	$locObj103->locNote = 'Floor 1';


//location "Brooklyn Stacks" 612_670000000000000 - 616_891400000000000
	$locObj104= new stdObject();
	$locObj104->libName = 'Brooklyn';
	$locObj104->location = "Brooklyn Stacks";
	$locObj104->callNumBegin = '612_670000000000000';
	$locObj104->callNumEnd = '616_891400000000000';
	$locObj104->imageFile = 'shelf46.gif';
	$locObj104->locNote = 'Floor 1';


//location "Brooklyn Stacks" 616_891400000000000 - 620_190000000000000
	$locObj105= new stdObject();
	$locObj105->libName = 'Brooklyn';
	$locObj105->location = "Brooklyn Stacks";
	$locObj105->callNumBegin = '616_891400000000000';
	$locObj105->callNumEnd = '620_190000000000000';
	$locObj105->imageFile = 'shelf47.gif';
	$locObj105->locNote = 'Floor 1';


//location "Brooklyn Stacks" 620_190000000000000 - 623_823000000000000
	$locObj106= new stdObject();
	$locObj106->libName = 'Brooklyn';
	$locObj106->location = "Brooklyn Stacks";
	$locObj106->callNumBegin = '620_190000000000000';
	$locObj106->callNumEnd = '623_823000000000000';
	$locObj106->imageFile = 'shelf48.gif';
	$locObj106->locNote = 'Floor 1';


//location "Brooklyn Stacks" 623_823000000000000 - 629_220000000000000
	$locObj107= new stdObject();
	$locObj107->libName = 'Brooklyn';
	$locObj107->location = "Brooklyn Stacks";
	$locObj107->callNumBegin = '623_823000000000000';
	$locObj107->callNumEnd = '629_220000000000000';
	$locObj107->imageFile = 'shelf49.gif';
	$locObj107->locNote = 'Floor 1';


//location "Brooklyn Stacks" 629_220000000000000 - 642_500000000000000_S
	$locObj108= new stdObject();
	$locObj108->libName = 'Brooklyn';
	$locObj108->location = "Brooklyn Stacks";
	$locObj108->callNumBegin = '629_220000000000000';
	$locObj108->callNumEnd = '642_500000000000000_S';
	$locObj108->imageFile = 'shelf50.gif';
	$locObj108->locNote = 'Floor 1';


//location "Brooklyn Stacks" 642_500000000000000_S - 658_022000000000000
	$locObj109= new stdObject();
	$locObj109->libName = 'Brooklyn';
	$locObj109->location = "Brooklyn Stacks";
	$locObj109->callNumBegin = '642_500000000000000_S';
	$locObj109->callNumEnd = '658_022000000000000';
	$locObj109->imageFile = 'shelf51.gif';
	$locObj109->locNote = 'Floor 1';


//location "Brooklyn Stacks" 658_022000000000000 - 658_834000000000000
	$locObj110= new stdObject();
	$locObj110->libName = 'Brooklyn';
	$locObj110->location = "Brooklyn Stacks";
	$locObj110->callNumBegin = '658_022000000000000';
	$locObj110->callNumEnd = '658_834000000000000';
	$locObj110->imageFile = 'shelf52.gif';
	$locObj110->locNote = 'Floor 1';


//location "Brooklyn Stacks" 658_834000000000000 - 666_400000000000000_P
	$locObj111= new stdObject();
	$locObj111->libName = 'Brooklyn';
	$locObj111->location = "Brooklyn Stacks";
	$locObj111->callNumBegin = '658_834000000000000';
	$locObj111->callNumEnd = '666_400000000000000_P';
	$locObj111->imageFile = 'shelf53.gif';
	$locObj111->locNote = 'Floor 1';


//location "Brooklyn Stacks" 666_400000000000000_P - 686_209030000000000
	$locObj112= new stdObject();
	$locObj112->libName = 'Brooklyn';
	$locObj112->location = "Brooklyn Stacks";
	$locObj112->callNumBegin = '666_400000000000000_P';
	$locObj112->callNumEnd = '686_209030000000000';
	$locObj112->imageFile = 'shelf54.gif';
	$locObj112->locNote = 'Floor 1';


//location "Brooklyn Stacks" 686_209040000000000 - 690_097300000000000_B
	$locObj113= new stdObject();
	$locObj113->libName = 'Brooklyn';
	$locObj113->location = "Brooklyn Stacks";
	$locObj113->callNumBegin = '686_209040000000000';
	$locObj113->callNumEnd = '690_097300000000000_B';
	$locObj113->imageFile = 'shelf55.gif';
	$locObj113->locNote = 'Floor 1';


//location "Brooklyn Stacks" 690_097300000000000_C - 699_000000000000000
	$locObj114= new stdObject();
	$locObj114->libName = 'Brooklyn';
	$locObj114->location = "Brooklyn Stacks";
	$locObj114->callNumBegin = '690_097300000000000_C';
	$locObj114->callNumEnd = '699_000000000000000';
	$locObj114->imageFile = 'shelf56.gif';
	$locObj114->locNote = 'Floor 1';


//location "Brooklyn Stacks" 700_000000000000000_A - 701_000000000000000_F
	$locObj115= new stdObject();
	$locObj115->libName = 'Brooklyn';
	$locObj115->location = "Brooklyn Stacks";
	$locObj115->callNumBegin = '700_000000000000000_A';
	$locObj115->callNumEnd = '701_000000000000000_F';
	$locObj115->imageFile = 'shelf57.gif';
	$locObj115->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 701_000000000000000_F - 701_800000000000000
	$locObj116= new stdObject();
	$locObj116->libName = 'Brooklyn';
	$locObj116->location = "Brooklyn Stacks";
	$locObj116->callNumBegin = '701_000000000000000_F';
	$locObj116->callNumEnd = '701_800000000000000';
	$locObj116->imageFile = 'shelf58.gif';
	$locObj116->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 701_800000000000000 - 704_042000000000000_L
	$locObj117= new stdObject();
	$locObj117->libName = 'Brooklyn';
	$locObj117->location = "Brooklyn Stacks";
	$locObj117->callNumBegin = '701_800000000000000';
	$locObj117->callNumEnd = '704_042000000000000_L';
	$locObj117->imageFile = 'shelf59.gif';
	$locObj117->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 704_042000000000000_L - 704_948940000000000
	$locObj118= new stdObject();
	$locObj118->libName = 'Brooklyn';
	$locObj118->location = "Brooklyn Stacks";
	$locObj118->callNumBegin = '704_042000000000000_L';
	$locObj118->callNumEnd = '704_948940000000000';
	$locObj118->imageFile = 'shelf60.gif';
	$locObj118->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 704_948940000000000 - 707_092000000000000_D
	$locObj119= new stdObject();
	$locObj119->libName = 'Brooklyn';
	$locObj119->location = "Brooklyn Stacks";
	$locObj119->callNumBegin = '704_948940000000000';
	$locObj119->callNumEnd = '707_092000000000000_D';
	$locObj119->imageFile = 'shelf61.gif';
	$locObj119->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 707_092000000000000_D - 708_194000000000000_H
	$locObj120= new stdObject();
	$locObj120->libName = 'Brooklyn';
	$locObj120->location = "Brooklyn Stacks";
	$locObj120->callNumBegin = '707_092000000000000_D';
	$locObj120->callNumEnd = '708_194000000000000_H';
	$locObj120->imageFile = 'shelf62.gif';
	$locObj120->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 708_194000000000000_H - 709_000000000000000_S
	$locObj121= new stdObject();
	$locObj121->libName = 'Brooklyn';
	$locObj121->location = "Brooklyn Stacks";
	$locObj121->callNumBegin = '708_194000000000000_H';
	$locObj121->callNumEnd = '709_000000000000000_S';
	$locObj121->imageFile = 'shelf63.gif';
	$locObj121->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 709_000000000000000_S - 709_034000000000000_A
	$locObj122= new stdObject();
	$locObj122->libName = 'Brooklyn';
	$locObj122->location = "Brooklyn Stacks";
	$locObj122->callNumBegin = '709_000000000000000_S';
	$locObj122->callNumEnd = '709_034000000000000_A';
	$locObj122->imageFile = 'shelf64.gif';
	$locObj122->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 709_034000000000000_A - 709_040000000000000_K
	$locObj123= new stdObject();
	$locObj123->libName = 'Brooklyn';
	$locObj123->location = "Brooklyn Stacks";
	$locObj123->callNumBegin = '709_034000000000000_A';
	$locObj123->callNumEnd = '709_040000000000000_K';
	$locObj123->imageFile = 'shelf65.gif';
	$locObj123->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 709_040000000000000_K - 709_040700000000000_B
	$locObj124= new stdObject();
	$locObj124->libName = 'Brooklyn';
	$locObj124->location = "Brooklyn Stacks";
	$locObj124->callNumBegin = '709_040000000000000_K';
	$locObj124->callNumEnd = '709_040700000000000_B';
	$locObj124->imageFile = 'shelf66.gif';
	$locObj124->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 709_040700000000000_B - 709_040760000000000_M
	$locObj125= new stdObject();
	$locObj125->libName = 'Brooklyn';
	$locObj125->location = "Brooklyn Stacks";
	$locObj125->callNumBegin = '709_040700000000000_B';
	$locObj125->callNumEnd = '709_040760000000000_M';
	$locObj125->imageFile = 'shelf67.gif';
	$locObj125->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 709_040760000000000_M - 709_400000000000000_M
	$locObj126= new stdObject();
	$locObj126->libName = 'Brooklyn';
	$locObj126->location = "Brooklyn Stacks";
	$locObj126->callNumBegin = '709_040760000000000_M';
	$locObj126->callNumEnd = '709_400000000000000_M';
	$locObj126->imageFile = 'shelf68.gif';
	$locObj126->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 709_400000000000000_M - 709_450000000000000_H
	$locObj127= new stdObject();
	$locObj127->libName = 'Brooklyn';
	$locObj127->location = "Brooklyn Stacks";
	$locObj127->callNumBegin = '709_400000000000000_M';
	$locObj127->callNumEnd = '709_450000000000000_H';
	$locObj127->imageFile = 'shelf69.gif';
	$locObj127->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 709_450000000000000_H - 709_510000000000000_M
	$locObj128= new stdObject();
	$locObj128->libName = 'Brooklyn';
	$locObj128->location = "Brooklyn Stacks";
	$locObj128->callNumBegin = '709_450000000000000_H';
	$locObj128->callNumEnd = '709_510000000000000_M';
	$locObj128->imageFile = 'shelf70.gif';
	$locObj128->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 709_510000000000000_M - 709_720000000000000_G
	$locObj129= new stdObject();
	$locObj129->libName = 'Brooklyn';
	$locObj129->location = "Brooklyn Stacks";
	$locObj129->callNumBegin = '709_510000000000000_M';
	$locObj129->callNumEnd = '709_720000000000000_G';
	$locObj129->imageFile = 'shelf71.gif';
	$locObj129->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 709_720000000000000_G - 709_730000000000000_V
	$locObj130= new stdObject();
	$locObj130->libName = 'Brooklyn';
	$locObj130->location = "Brooklyn Stacks";
	$locObj130->callNumBegin = '709_720000000000000_G';
	$locObj130->callNumEnd = '709_730000000000000_V';
	$locObj130->imageFile = 'shelf72.gif';
	$locObj130->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 709_730000000000000_V - 711_400000000000000_C
	$locObj131= new stdObject();
	$locObj131->libName = 'Brooklyn';
	$locObj131->location = "Brooklyn Stacks";
	$locObj131->callNumBegin = '709_730000000000000_V';
	$locObj131->callNumEnd = '711_400000000000000_C';
	$locObj131->imageFile = 'shelf73.gif';
	$locObj131->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 711_400000000000000_C - 711_942000000000000_D
	$locObj132= new stdObject();
	$locObj132->libName = 'Brooklyn';
	$locObj132->location = "Brooklyn Stacks";
	$locObj132->callNumBegin = '711_400000000000000_C';
	$locObj132->callNumEnd = '711_942000000000000_D';
	$locObj132->imageFile = 'shelf74.gif';
	$locObj132->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 711_942000000000000_D - 712_094900000000000
	$locObj133= new stdObject();
	$locObj133->libName = 'Brooklyn';
	$locObj133->location = "Brooklyn Stacks";
	$locObj133->callNumBegin = '711_942000000000000_D';
	$locObj133->callNumEnd = '712_094900000000000';
	$locObj133->imageFile = 'shelf75.gif';
	$locObj133->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 712_094900000000000 - 720_100000000000000_C
	$locObj134= new stdObject();
	$locObj134->libName = 'Brooklyn';
	$locObj134->location = "Brooklyn Stacks";
	$locObj134->callNumBegin = '712_094900000000000';
	$locObj134->callNumEnd = '720_100000000000000_C';
	$locObj134->imageFile = 'shelf76.gif';
	$locObj134->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_100000000000000_C - 720_000000000000000_284T
	$locObj135= new stdObject();
	$locObj135->libName = 'Brooklyn';
	$locObj135->location = "Brooklyn Stacks";
	$locObj135->callNumBegin = '720_100000000000000_C';
	$locObj135->callNumEnd = '720_000000000000000_284T';
	$locObj135->imageFile = 'shelf77.gif';
	$locObj135->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_000000000000000_284T - 720_000000000000000_87A
	$locObj136= new stdObject();
	$locObj136->libName = 'Brooklyn';
	$locObj136->location = "Brooklyn Stacks";
	$locObj136->callNumBegin = '720_000000000000000_284T';
	$locObj136->callNumEnd = '720_000000000000000_87A';
	$locObj136->imageFile = 'shelf78.gif';
	$locObj136->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_000000000000000_87A - 720_000000000000000_942L
	$locObj137= new stdObject();
	$locObj137->libName = 'Brooklyn';
	$locObj137->location = "Brooklyn Stacks";
	$locObj137->callNumBegin = '720_000000000000000_87A';
	$locObj137->callNumEnd = '720_000000000000000_942L';
	$locObj137->imageFile = 'shelf79.gif';
	$locObj137->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_000000000000000_942L - 720_000000000000000_944V
	$locObj138= new stdObject();
	$locObj138->libName = 'Brooklyn';
	$locObj138->location = "Brooklyn Stacks";
	$locObj138->callNumBegin = '720_000000000000000_942L';
	$locObj138->callNumEnd = '720_000000000000000_944V';
	$locObj138->imageFile = 'shelf80.gif';
	$locObj138->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_000000000000000_944V - 720_000000000000000_947K
	$locObj139= new stdObject();
	$locObj139->libName = 'Brooklyn';
	$locObj139->location = "Brooklyn Stacks";
	$locObj139->callNumBegin = '720_000000000000000_944V';
	$locObj139->callNumEnd = '720_000000000000000_947K';
	$locObj139->imageFile = 'shelf81.gif';
	$locObj139->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_000000000000000_947K - 720_000000000000000_952A
	$locObj140= new stdObject();
	$locObj140->libName = 'Brooklyn';
	$locObj140->location = "Brooklyn Stacks";
	$locObj140->callNumBegin = '720_000000000000000_947K';
	$locObj140->callNumEnd = '720_000000000000000_952A';
	$locObj140->imageFile = 'shelf82.gif';
	$locObj140->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_000000000000000_952A - 720_000000000000000_973D
	$locObj141= new stdObject();
	$locObj141->libName = 'Brooklyn';
	$locObj141->location = "Brooklyn Stacks";
	$locObj141->callNumBegin = '720_000000000000000_952A';
	$locObj141->callNumEnd = '720_000000000000000_973D';
	$locObj141->imageFile = 'shelf83.gif';
	$locObj141->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_000000000000000_973D - 720_000000000000000_973L
	$locObj142= new stdObject();
	$locObj142->libName = 'Brooklyn';
	$locObj142->location = "Brooklyn Stacks";
	$locObj142->callNumBegin = '720_000000000000000_973D';
	$locObj142->callNumEnd = '720_000000000000000_973L';
	$locObj142->imageFile = 'shelf84.gif';
	$locObj142->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_000000000000000_973L - 720_000000000000000_973S
	$locObj143= new stdObject();
	$locObj143->libName = 'Brooklyn';
	$locObj143->location = "Brooklyn Stacks";
	$locObj143->callNumBegin = '720_000000000000000_973L';
	$locObj143->callNumEnd = '720_000000000000000_973S';
	$locObj143->imageFile = 'shelf85.gif';
	$locObj143->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_000000000000000_973S - 720_000000000000000_9747D
	$locObj144= new stdObject();
	$locObj144->libName = 'Brooklyn';
	$locObj144->location = "Brooklyn Stacks";
	$locObj144->callNumBegin = '720_000000000000000_973S';
	$locObj144->callNumEnd = '720_000000000000000_9747D';
	$locObj144->imageFile = 'shelf86.gif';
	$locObj144->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 720_000000000000000_9747D - 721_000000000000000_R
	$locObj145= new stdObject();
	$locObj145->libName = 'Brooklyn';
	$locObj145->location = "Brooklyn Stacks";
	$locObj145->callNumBegin = '720_000000000000000_9747D';
	$locObj145->callNumEnd = '721_000000000000000_R';
	$locObj145->imageFile = 'shelf87.gif';
	$locObj145->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 721_000000000000000_R - 724_000000000000000_1R
	$locObj146= new stdObject();
	$locObj146->libName = 'Brooklyn';
	$locObj146->location = "Brooklyn Stacks";
	$locObj146->callNumBegin = '721_000000000000000_R';
	$locObj146->callNumEnd = '724_000000000000000_1R';
	$locObj146->imageFile = 'shelf88.gif';
	$locObj146->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 724_000000000000000_1R - 724_000000000000000_9M
	$locObj147= new stdObject();
	$locObj147->libName = 'Brooklyn';
	$locObj147->location = "Brooklyn Stacks";
	$locObj147->callNumBegin = '724_000000000000000_1R';
	$locObj147->callNumEnd = '724_000000000000000_9M';
	$locObj147->imageFile = 'shelf89.gif';
	$locObj147->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 724_000000000000000_9M - 725_000000000000000_7P
	$locObj148= new stdObject();
	$locObj148->libName = 'Brooklyn';
	$locObj148->location = "Brooklyn Stacks";
	$locObj148->callNumBegin = '724_000000000000000_9M';
	$locObj148->callNumEnd = '725_000000000000000_7P';
	$locObj148->imageFile = 'shelf90.gif';
	$locObj148->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 725_000000000000000_7P - 726_000000000000000_7B
	$locObj149= new stdObject();
	$locObj149->libName = 'Brooklyn';
	$locObj149->location = "Brooklyn Stacks";
	$locObj149->callNumBegin = '725_000000000000000_7P';
	$locObj149->callNumEnd = '726_000000000000000_7B';
	$locObj149->imageFile = 'shelf91.gif';
	$locObj149->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 726_000000000000000_7B - 728_000000000000000_0942S
	$locObj150= new stdObject();
	$locObj150->libName = 'Brooklyn';
	$locObj150->location = "Brooklyn Stacks";
	$locObj150->callNumBegin = '726_000000000000000_7B';
	$locObj150->callNumEnd = '728_000000000000000_0942S';
	$locObj150->imageFile = 'shelf92.gif';
	$locObj150->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 728_000000000000000_0942S - 728_000000000000000_6W
	$locObj151= new stdObject();
	$locObj151->libName = 'Brooklyn';
	$locObj151->location = "Brooklyn Stacks";
	$locObj151->callNumBegin = '728_000000000000000_0942S';
	$locObj151->callNumEnd = '728_000000000000000_6W';
	$locObj151->imageFile = 'shelf93.gif';
	$locObj151->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 728_000000000000000_6W - 728_000000000000000_82094K
	$locObj152= new stdObject();
	$locObj152->libName = 'Brooklyn';
	$locObj152->location = "Brooklyn Stacks";
	$locObj152->callNumBegin = '728_000000000000000_6W';
	$locObj152->callNumEnd = '728_000000000000000_82094K';
	$locObj152->imageFile = 'shelf94.gif';
	$locObj152->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 728_000000000000000_82094K - 730H
	$locObj153= new stdObject();
	$locObj153->libName = 'Brooklyn';
	$locObj153->location = "Brooklyn Stacks";
	$locObj153->callNumBegin = '728_000000000000000_82094K';
	$locObj153->callNumEnd = '730H';
	$locObj153->imageFile = 'shelf95.gif';
	$locObj153->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 730H - 730_000000000000000_945P
	$locObj154= new stdObject();
	$locObj154->libName = 'Brooklyn';
	$locObj154->location = "Brooklyn Stacks";
	$locObj154->callNumBegin = '730H';
	$locObj154->callNumEnd = '730_000000000000000_945P';
	$locObj154->imageFile = 'shelf96.gif';
	$locObj154->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 730_000000000000000_945P - 730_973000000000000
	$locObj155= new stdObject();
	$locObj155->libName = 'Brooklyn';
	$locObj155->location = "Brooklyn Stacks";
	$locObj155->callNumBegin = '730_000000000000000_945P';
	$locObj155->callNumEnd = '730_973000000000000';
	$locObj155->imageFile = 'shelf97.gif';
	$locObj155->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 730_973000000000000 - 735_000000000000000_23S
	$locObj156= new stdObject();
	$locObj156->libName = 'Brooklyn';
	$locObj156->location = "Brooklyn Stacks";
	$locObj156->callNumBegin = '730_973000000000000';
	$locObj156->callNumEnd = '735_000000000000000_23S';
	$locObj156->imageFile = 'shelf98.gif';
	$locObj156->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 735_000000000000000_23S - 738_000000000000000_37B
	$locObj157= new stdObject();
	$locObj157->libName = 'Brooklyn';
	$locObj157->location = "Brooklyn Stacks";
	$locObj157->callNumBegin = '735_000000000000000_23S';
	$locObj157->callNumEnd = '738_000000000000000_37B';
	$locObj157->imageFile = 'shelf99.gif';
	$locObj157->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 738_000000000000000_37B - 741_000000000000000_A784
	$locObj158= new stdObject();
	$locObj158->libName = 'Brooklyn';
	$locObj158->location = "Brooklyn Stacks";
	$locObj158->callNumBegin = '738_000000000000000_37B';
	$locObj158->callNumEnd = '741_000000000000000_A784';
	$locObj158->imageFile = 'shelf100.gif';
	$locObj158->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 741_000000000000000_A784 - 741_000000000000000_24W
	$locObj159= new stdObject();
	$locObj159->libName = 'Brooklyn';
	$locObj159->location = "Brooklyn Stacks";
	$locObj159->callNumBegin = '741_000000000000000_A784';
	$locObj159->callNumEnd = '741_000000000000000_24W';
	$locObj159->imageFile = 'shelf101.gif';
	$locObj159->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 741_000000000000000_24W - 741_000000000000000_5973S
	$locObj160= new stdObject();
	$locObj160->libName = 'Brooklyn';
	$locObj160->location = "Brooklyn Stacks";
	$locObj160->callNumBegin = '741_000000000000000_24W';
	$locObj160->callNumEnd = '741_000000000000000_5973S';
	$locObj160->imageFile = 'shelf102.gif';
	$locObj160->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 741_000000000000000_5973S - 741_600000000000000
	$locObj161= new stdObject();
	$locObj161->libName = 'Brooklyn';
	$locObj161->location = "Brooklyn Stacks";
	$locObj161->callNumBegin = '741_000000000000000_5973S';
	$locObj161->callNumEnd = '741_600000000000000';
	$locObj161->imageFile = 'shelf103.gif';
	$locObj161->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 741_600000000000000 - 741_000000000000000_6092R
	$locObj162= new stdObject();
	$locObj162->libName = 'Brooklyn';
	$locObj162->location = "Brooklyn Stacks";
	$locObj162->callNumBegin = '741_600000000000000';
	$locObj162->callNumEnd = '741_000000000000000_6092R';
	$locObj162->imageFile = 'shelf104.gif';
	$locObj162->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 741_000000000000000_6092R - 741_000000000000000_66B
	$locObj163= new stdObject();
	$locObj163->libName = 'Brooklyn';
	$locObj163->location = "Brooklyn Stacks";
	$locObj163->callNumBegin = '741_000000000000000_6092R';
	$locObj163->callNumEnd = '741_000000000000000_66B';
	$locObj163->imageFile = 'shelf105.gif';
	$locObj163->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 741_000000000000000_66B - 741_000000000000000_904T
	$locObj164= new stdObject();
	$locObj164->libName = 'Brooklyn';
	$locObj164->location = "Brooklyn Stacks";
	$locObj164->callNumBegin = '741_000000000000000_66B';
	$locObj164->callNumEnd = '741_000000000000000_904T';
	$locObj164->imageFile = 'shelf106.gif';
	$locObj164->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 741_000000000000000_904T - 741_000000000000000_945B
	$locObj165= new stdObject();
	$locObj165->libName = 'Brooklyn';
	$locObj165->location = "Brooklyn Stacks";
	$locObj165->callNumBegin = '741_000000000000000_904T';
	$locObj165->callNumEnd = '741_000000000000000_945B';
	$locObj165->imageFile = 'shelf107.gif';
	$locObj165->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 741_000000000000000_945B - 743_000000000000000_49C
	$locObj166= new stdObject();
	$locObj166->libName = 'Brooklyn';
	$locObj166->location = "Brooklyn Stacks";
	$locObj166->callNumBegin = '741_000000000000000_945B';
	$locObj166->callNumEnd = '743_000000000000000_49C';
	$locObj166->imageFile = 'shelf108.gif';
	$locObj166->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 743_000000000000000_49C - 745_000000000000000_1K
	$locObj167= new stdObject();
	$locObj167->libName = 'Brooklyn';
	$locObj167->location = "Brooklyn Stacks";
	$locObj167->callNumBegin = '743_000000000000000_49C';
	$locObj167->callNumEnd = '745_000000000000000_1K';
	$locObj167->imageFile = 'shelf109.gif';
	$locObj167->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 745_000000000000000_1K - 745_000000000000000_4I
	$locObj168= new stdObject();
	$locObj168->libName = 'Brooklyn';
	$locObj168->location = "Brooklyn Stacks";
	$locObj168->callNumBegin = '745_000000000000000_1K';
	$locObj168->callNumEnd = '745_000000000000000_4I';
	$locObj168->imageFile = 'shelf110.gif';
	$locObj168->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 745_000000000000000_4I - 745_000000000000000_5F
	$locObj169= new stdObject();
	$locObj169->libName = 'Brooklyn';
	$locObj169->location = "Brooklyn Stacks";
	$locObj169->callNumBegin = '745_000000000000000_4I';
	$locObj169->callNumEnd = '745_000000000000000_5F';
	$locObj169->imageFile = 'shelf111.gif';
	$locObj169->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 745_000000000000000_5F - 745_000000000000000_92Y
	$locObj170= new stdObject();
	$locObj170->libName = 'Brooklyn';
	$locObj170->location = "Brooklyn Stacks";
	$locObj170->callNumBegin = '745_000000000000000_5F';
	$locObj170->callNumEnd = '745_000000000000000_92Y';
	$locObj170->imageFile = 'shelf112.gif';
	$locObj170->locNote = 'Floor 1M';


//location "Brooklyn Stacks" 745_000000000000000_92Y - 746_000000000000000_6V
	$locObj171= new stdObject();
	$locObj171->libName = 'Brooklyn';
	$locObj171->location = "Brooklyn Stacks";
	$locObj171->callNumBegin = '745_000000000000000_92Y';
	$locObj171->callNumEnd = '746_000000000000000_6V';
	$locObj171->imageFile = 'shelf113.gif';
	$locObj171->locNote = 'Floor 2';


//location "Brooklyn Stacks" 746_000000000000000_6V - 747_000000000000000_094L
	$locObj172= new stdObject();
	$locObj172->libName = 'Brooklyn';
	$locObj172->location = "Brooklyn Stacks";
	$locObj172->callNumBegin = '746_000000000000000_6V';
	$locObj172->callNumEnd = '747_000000000000000_094L';
	$locObj172->imageFile = 'shelf114.gif';
	$locObj172->locNote = 'Floor 2';


//location "Brooklyn Stacks" 747_000000000000000_094L - 747_000000000000000_852H
	$locObj173= new stdObject();
	$locObj173->libName = 'Brooklyn';
	$locObj173->location = "Brooklyn Stacks";
	$locObj173->callNumBegin = '747_000000000000000_094L';
	$locObj173->callNumEnd = '747_000000000000000_852H';
	$locObj173->imageFile = 'shelf115.gif';
	$locObj173->locNote = 'Floor 2';


//location "Brooklyn Stacks" 747_000000000000000_852H - 749R
	$locObj174= new stdObject();
	$locObj174->libName = 'Brooklyn';
	$locObj174->location = "Brooklyn Stacks";
	$locObj174->callNumBegin = '747_000000000000000_852H';
	$locObj174->callNumEnd = '749R';
	$locObj174->imageFile = 'shelf116.gif';
	$locObj174->locNote = 'Floor 2';


//location "Brooklyn Stacks" 749R - 749_000000000000000_32K
	$locObj175= new stdObject();
	$locObj175->libName = 'Brooklyn';
	$locObj175->location = "Brooklyn Stacks";
	$locObj175->callNumBegin = '749R';
	$locObj175->callNumEnd = '749_000000000000000_32K';
	$locObj175->imageFile = 'shelf117.gif';
	$locObj175->locNote = 'Floor 2';


//location "Brooklyn Stacks" 749_000000000000000_32K - 751_000000000000000_73B
	$locObj176= new stdObject();
	$locObj176->libName = 'Brooklyn';
	$locObj176->location = "Brooklyn Stacks";
	$locObj176->callNumBegin = '749_000000000000000_32K';
	$locObj176->callNumEnd = '751_000000000000000_73B';
	$locObj176->imageFile = 'shelf118.gif';
	$locObj176->locNote = 'Floor 2';


//location "Brooklyn Stacks" 751_000000000000000_73B - 759L
	$locObj177= new stdObject();
	$locObj177->libName = 'Brooklyn';
	$locObj177->location = "Brooklyn Stacks";
	$locObj177->callNumBegin = '751_000000000000000_73B';
	$locObj177->callNumEnd = '759L';
	$locObj177->imageFile = 'shelf119.gif';
	$locObj177->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759L - 759_000000000000000_0652N
	$locObj178= new stdObject();
	$locObj178->libName = 'Brooklyn';
	$locObj178->location = "Brooklyn Stacks";
	$locObj178->callNumBegin = '759L';
	$locObj178->callNumEnd = '759_000000000000000_0652N';
	$locObj178->imageFile = 'shelf120.gif';
	$locObj178->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_0652N - 759_000000000000000_1D
	$locObj179= new stdObject();
	$locObj179->libName = 'Brooklyn';
	$locObj179->location = "Brooklyn Stacks";
	$locObj179->callNumBegin = '759_000000000000000_0652N';
	$locObj179->callNumEnd = '759_000000000000000_1D';
	$locObj179->imageFile = 'shelf121.gif';
	$locObj179->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_1D - 759_000000000000000_1H766
	$locObj180= new stdObject();
	$locObj180->libName = 'Brooklyn';
	$locObj180->location = "Brooklyn Stacks";
	$locObj180->callNumBegin = '759_000000000000000_1D';
	$locObj180->callNumEnd = '759_000000000000000_1H766';
	$locObj180->imageFile = 'shelf122.gif';
	$locObj180->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_1H766 - 759_000000000000000_1N
	$locObj181= new stdObject();
	$locObj181->libName = 'Brooklyn';
	$locObj181->location = "Brooklyn Stacks";
	$locObj181->callNumBegin = '759_000000000000000_1H766';
	$locObj181->callNumEnd = '759_000000000000000_1N';
	$locObj181->imageFile = 'shelf123.gif';
	$locObj181->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_1N - 759_000000000000000_1S634W
	$locObj182= new stdObject();
	$locObj182->libName = 'Brooklyn';
	$locObj182->location = "Brooklyn Stacks";
	$locObj182->callNumBegin = '759_000000000000000_1N';
	$locObj182->callNumEnd = '759_000000000000000_1S634W';
	$locObj182->imageFile = 'shelf124.gif';
	$locObj182->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_1S634W - 759_000000000000000_2F
	$locObj183= new stdObject();
	$locObj183->libName = 'Brooklyn';
	$locObj183->location = "Brooklyn Stacks";
	$locObj183->callNumBegin = '759_000000000000000_1S634W';
	$locObj183->callNumEnd = '759_000000000000000_2F';
	$locObj183->imageFile = 'shelf125.gif';
	$locObj183->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_2F - 759_000000000000000_3A
	$locObj184= new stdObject();
	$locObj184->libName = 'Brooklyn';
	$locObj184->location = "Brooklyn Stacks";
	$locObj184->callNumBegin = '759_000000000000000_2F';
	$locObj184->callNumEnd = '759_000000000000000_3A';
	$locObj184->imageFile = 'shelf126.gif';
	$locObj184->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_3A - 759_000000000000000_36K
	$locObj185= new stdObject();
	$locObj185->libName = 'Brooklyn';
	$locObj185->location = "Brooklyn Stacks";
	$locObj185->callNumBegin = '759_000000000000000_3A';
	$locObj185->callNumEnd = '759_000000000000000_36K';
	$locObj185->imageFile = 'shelf127.gif';
	$locObj185->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_36K - 759_000000000000000_4D317
	$locObj186= new stdObject();
	$locObj186->libName = 'Brooklyn';
	$locObj186->location = "Brooklyn Stacks";
	$locObj186->callNumBegin = '759_000000000000000_36K';
	$locObj186->callNumEnd = '759_000000000000000_4D317';
	$locObj186->imageFile = 'shelf128.gif';
	$locObj186->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_4D317 - 759_000000000000000_4M27
	$locObj187= new stdObject();
	$locObj187->libName = 'Brooklyn';
	$locObj187->location = "Brooklyn Stacks";
	$locObj187->callNumBegin = '759_000000000000000_4D317';
	$locObj187->callNumEnd = '759_000000000000000_4M27';
	$locObj187->imageFile = 'shelf129.gif';
	$locObj187->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_4M27 - 759_000000000000000_4T7258
	$locObj188= new stdObject();
	$locObj188->libName = 'Brooklyn';
	$locObj188->location = "Brooklyn Stacks";
	$locObj188->callNumBegin = '759_000000000000000_4M27';
	$locObj188->callNumEnd = '759_000000000000000_4T7258';
	$locObj188->imageFile = 'shelf130.gif';
	$locObj188->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_4T7258 - 759_000000000000000_5B489
	$locObj189= new stdObject();
	$locObj189->libName = 'Brooklyn';
	$locObj189->location = "Brooklyn Stacks";
	$locObj189->callNumBegin = '759_000000000000000_4T7258';
	$locObj189->callNumEnd = '759_000000000000000_5B489';
	$locObj189->imageFile = 'shelf131.gif';
	$locObj189->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_5B489 - 759_000000000000000_5L581
	$locObj190= new stdObject();
	$locObj190->libName = 'Brooklyn';
	$locObj190->location = "Brooklyn Stacks";
	$locObj190->callNumBegin = '759_000000000000000_5B489';
	$locObj190->callNumEnd = '759_000000000000000_5L581';
	$locObj190->imageFile = 'shelf132.gif';
	$locObj190->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_5L581 - 759_000000000000000_55T454
	$locObj191= new stdObject();
	$locObj191->libName = 'Brooklyn';
	$locObj191->location = "Brooklyn Stacks";
	$locObj191->callNumBegin = '759_000000000000000_5L581';
	$locObj191->callNumEnd = '759_000000000000000_55T454';
	$locObj191->imageFile = 'shelf133.gif';
	$locObj191->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_55T454 - 759_000000000000000_8M963
	$locObj192= new stdObject();
	$locObj192->libName = 'Brooklyn';
	$locObj192->location = "Brooklyn Stacks";
	$locObj192->callNumBegin = '759_000000000000000_55T454';
	$locObj192->callNumEnd = '759_000000000000000_8M963';
	$locObj192->imageFile = 'shelf134.gif';
	$locObj192->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_8M963 - 759_000000000000000_9492M
	$locObj193= new stdObject();
	$locObj193->libName = 'Brooklyn';
	$locObj193->location = "Brooklyn Stacks";
	$locObj193->callNumBegin = '759_000000000000000_8M963';
	$locObj193->callNumEnd = '759_000000000000000_9492M';
	$locObj193->imageFile = 'shelf135.gif';
	$locObj193->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_9492M - 759_000000000000000_951F
	$locObj194= new stdObject();
	$locObj194->libName = 'Brooklyn';
	$locObj194->location = "Brooklyn Stacks";
	$locObj194->callNumBegin = '759_000000000000000_9492M';
	$locObj194->callNumEnd = '759_000000000000000_951F';
	$locObj194->imageFile = 'shelf136.gif';
	$locObj194->locNote = 'Floor 2';


//location "Brooklyn Stacks" 759_000000000000000_951F - 764C
	$locObj195= new stdObject();
	$locObj195->libName = 'Brooklyn';
	$locObj195->location = "Brooklyn Stacks";
	$locObj195->callNumBegin = '759_000000000000000_951F';
	$locObj195->callNumEnd = '764C';
	$locObj195->imageFile = 'shelf137.gif';
	$locObj195->locNote = 'Floor 2';


//location "Brooklyn Stacks" 764C - 769_000000000000000_943N
	$locObj196= new stdObject();
	$locObj196->libName = 'Brooklyn';
	$locObj196->location = "Brooklyn Stacks";
	$locObj196->callNumBegin = '764C';
	$locObj196->callNumEnd = '769_000000000000000_943N';
	$locObj196->imageFile = 'shelf138.gif';
	$locObj196->locNote = 'Floor 2';


//location "Brooklyn Stacks" 769_000000000000000_943N - 769_952000000000000
	$locObj197= new stdObject();
	$locObj197->libName = 'Brooklyn';
	$locObj197->location = "Brooklyn Stacks";
	$locObj197->callNumBegin = '769_000000000000000_943N';
	$locObj197->callNumEnd = '769_952000000000000';
	$locObj197->imageFile = 'shelf139.gif';
	$locObj197->locNote = 'Floor 2';


//location "Brooklyn Stacks" 769_952000000000000 - 770L
	$locObj198= new stdObject();
	$locObj198->libName = 'Brooklyn';
	$locObj198->location = "Brooklyn Stacks";
	$locObj198->callNumBegin = '769_952000000000000';
	$locObj198->callNumEnd = '770L';
	$locObj198->imageFile = 'shelf140.gif';
	$locObj198->locNote = 'Floor 2';


//location "Brooklyn Stacks" 770L - 770_000000000000000_5P
	$locObj199= new stdObject();
	$locObj199->libName = 'Brooklyn';
	$locObj199->location = "Brooklyn Stacks";
	$locObj199->callNumBegin = '770L';
	$locObj199->callNumEnd = '770_000000000000000_5P';
	$locObj199->imageFile = 'shelf141.gif';
	$locObj199->locNote = 'Floor 2';


//location "Brooklyn Stacks" 770_000000000000000_5P - 770_000000000000000_973G
	$locObj200= new stdObject();
	$locObj200->libName = 'Brooklyn';
	$locObj200->location = "Brooklyn Stacks";
	$locObj200->callNumBegin = '770_000000000000000_5P';
	$locObj200->callNumEnd = '770_000000000000000_973G';
	$locObj200->imageFile = 'shelf142.gif';
	$locObj200->locNote = 'Floor 2';


//location "Brooklyn Stacks" 770_000000000000000_973G - 778_000000000000000_6H
	$locObj201= new stdObject();
	$locObj201->libName = 'Brooklyn';
	$locObj201->location = "Brooklyn Stacks";
	$locObj201->callNumBegin = '770_000000000000000_973G';
	$locObj201->callNumEnd = '778_000000000000000_6H';
	$locObj201->imageFile = 'shelf143.gif';
	$locObj201->locNote = 'Floor 2';


//location "Brooklyn Stacks" 778_000000000000000_6H - 779A
	$locObj202= new stdObject();
	$locObj202->libName = 'Brooklyn';
	$locObj202->location = "Brooklyn Stacks";
	$locObj202->callNumBegin = '778_000000000000000_6H';
	$locObj202->callNumEnd = '779A';
	$locObj202->imageFile = 'shelf144.gif';
	$locObj202->locNote = 'Floor 2';


//location "Brooklyn Stacks" 779A - 779F
	$locObj203= new stdObject();
	$locObj203->libName = 'Brooklyn';
	$locObj203->location = "Brooklyn Stacks";
	$locObj203->callNumBegin = '779A';
	$locObj203->callNumEnd = '779F';
	$locObj203->imageFile = 'shelf145.gif';
	$locObj203->locNote = 'Floor 2';


//location "Brooklyn Stacks" 779F - 779M
	$locObj204= new stdObject();
	$locObj204->libName = 'Brooklyn';
	$locObj204->location = "Brooklyn Stacks";
	$locObj204->callNumBegin = '779F';
	$locObj204->callNumEnd = '779M';
	$locObj204->imageFile = 'shelf146.gif';
	$locObj204->locNote = 'Floor 2';


//location "Brooklyn Stacks" 779M - 779S
	$locObj205= new stdObject();
	$locObj205->libName = 'Brooklyn';
	$locObj205->location = "Brooklyn Stacks";
	$locObj205->callNumBegin = '779M';
	$locObj205->callNumEnd = '779S';
	$locObj205->imageFile = 'shelf147.gif';
	$locObj205->locNote = 'Floor 2';


//location "Brooklyn Stacks" 779S - 780_000000000000000_92C
	$locObj206= new stdObject();
	$locObj206->libName = 'Brooklyn';
	$locObj206->location = "Brooklyn Stacks";
	$locObj206->callNumBegin = '779S';
	$locObj206->callNumEnd = '780_000000000000000_92C';
	$locObj206->imageFile = 'shelf148.gif';
	$locObj206->locNote = 'Floor 2';


//location "Brooklyn Stacks" 780_000000000000000_92C - 784_000000000000000_19H
	$locObj207= new stdObject();
	$locObj207->libName = 'Brooklyn';
	$locObj207->location = "Brooklyn Stacks";
	$locObj207->callNumBegin = '780_000000000000000_92C';
	$locObj207->callNumEnd = '784_000000000000000_19H';
	$locObj207->imageFile = 'shelf149.gif';
	$locObj207->locNote = 'Floor 2';


//location "Brooklyn Stacks" 784_000000000000000_19H - 791_000000000000000_43015M
	$locObj208= new stdObject();
	$locObj208->libName = 'Brooklyn';
	$locObj208->location = "Brooklyn Stacks";
	$locObj208->callNumBegin = '784_000000000000000_19H';
	$locObj208->callNumEnd = '791_000000000000000_43015M';
	$locObj208->imageFile = 'shelf150.gif';
	$locObj208->locNote = 'Floor 2';


//location "Brooklyn Stacks" 791_000000000000000_43015M - 791_000000000000000_437F
	$locObj209= new stdObject();
	$locObj209->libName = 'Brooklyn';
	$locObj209->location = "Brooklyn Stacks";
	$locObj209->callNumBegin = '791_000000000000000_43015M';
	$locObj209->callNumEnd = '791_000000000000000_437F';
	$locObj209->imageFile = 'shelf151.gif';
	$locObj209->locNote = 'Floor 2';


//location "Brooklyn Stacks" 791_000000000000000_437F - 792_000000000000000_0945N
	$locObj210= new stdObject();
	$locObj210->libName = 'Brooklyn';
	$locObj210->location = "Brooklyn Stacks";
	$locObj210->callNumBegin = '791_000000000000000_437F';
	$locObj210->callNumEnd = '792_000000000000000_0945N';
	$locObj210->imageFile = 'shelf152.gif';
	$locObj210->locNote = 'Floor 2';


//location "Brooklyn Stacks" 792_000000000000000_0945N - 799_990000000000000
	$locObj211= new stdObject();
	$locObj211->libName = 'Brooklyn';
	$locObj211->location = "Brooklyn Stacks";
	$locObj211->callNumBegin = '792_000000000000000_0945N';
	$locObj211->callNumEnd = '799_990000000000000';
	$locObj211->imageFile = 'shelf153.gif';
	$locObj211->locNote = 'Floor 2';


//location "Brooklyn Stacks" 800_000000000000000 - 808_000000000000000_3G
	$locObj212= new stdObject();
	$locObj212->libName = 'Brooklyn';
	$locObj212->location = "Brooklyn Stacks";
	$locObj212->callNumBegin = '800_000000000000000';
	$locObj212->callNumEnd = '808_000000000000000_3G';
	$locObj212->imageFile = 'shelf154.gif';
	$locObj212->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 808_000000000000000_3G - 809_000000000000000_1H
	$locObj213= new stdObject();
	$locObj213->libName = 'Brooklyn';
	$locObj213->location = "Brooklyn Stacks";
	$locObj213->callNumBegin = '808_000000000000000_3G';
	$locObj213->callNumEnd = '809_000000000000000_1H';
	$locObj213->imageFile = 'shelf155.gif';
	$locObj213->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 809_000000000000000_1H - 810_000000000000000_99S
	$locObj214= new stdObject();
	$locObj214->libName = 'Brooklyn';
	$locObj214->location = "Brooklyn Stacks";
	$locObj214->callNumBegin = '809_000000000000000_1H';
	$locObj214->callNumEnd = '810_000000000000000_99S';
	$locObj214->imageFile = 'shelf156.gif';
	$locObj214->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 810_000000000000000_99S - 811O
	$locObj215= new stdObject();
	$locObj215->libName = 'Brooklyn';
	$locObj215->location = "Brooklyn Stacks";
	$locObj215->callNumBegin = '810_000000000000000_99S';
	$locObj215->callNumEnd = '811O';
	$locObj215->imageFile = 'shelf157.gif';
	$locObj215->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 811O - 812M
	$locObj216= new stdObject();
	$locObj216->libName = 'Brooklyn';
	$locObj216->location = "Brooklyn Stacks";
	$locObj216->callNumBegin = '811O';
	$locObj216->callNumEnd = '812M';
	$locObj216->imageFile = 'shelf158.gif';
	$locObj216->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 812M - 813H
	$locObj217= new stdObject();
	$locObj217->libName = 'Brooklyn';
	$locObj217->location = "Brooklyn Stacks";
	$locObj217->callNumBegin = '812M';
	$locObj217->callNumEnd = '813H';
	$locObj217->imageFile = 'shelf159.gif';
	$locObj217->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 813H - 814_000000000000000_6P
	$locObj218= new stdObject();
	$locObj218->libName = 'Brooklyn';
	$locObj218->location = "Brooklyn Stacks";
	$locObj218->callNumBegin = '813H';
	$locObj218->callNumEnd = '814_000000000000000_6P';
	$locObj218->imageFile = 'shelf160.gif';
	$locObj218->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 814_000000000000000_6P - 818T
	$locObj219= new stdObject();
	$locObj219->libName = 'Brooklyn';
	$locObj219->location = "Brooklyn Stacks";
	$locObj219->callNumBegin = '814_000000000000000_6P';
	$locObj219->callNumEnd = '818T';
	$locObj219->imageFile = 'shelf161.gif';
	$locObj219->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 818T - 821C
	$locObj220= new stdObject();
	$locObj220->libName = 'Brooklyn';
	$locObj220->location = "Brooklyn Stacks";
	$locObj220->callNumBegin = '818T';
	$locObj220->callNumEnd = '821C';
	$locObj220->imageFile = 'shelf162.gif';
	$locObj220->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 821C - 821Y
	$locObj221= new stdObject();
	$locObj221->libName = 'Brooklyn';
	$locObj221->location = "Brooklyn Stacks";
	$locObj221->callNumBegin = '821C';
	$locObj221->callNumEnd = '821Y';
	$locObj221->imageFile = 'shelf163.gif';
	$locObj221->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 821Y - 822_000000000000000_04F
	$locObj222= new stdObject();
	$locObj222->libName = 'Brooklyn';
	$locObj222->location = "Brooklyn Stacks";
	$locObj222->callNumBegin = '821Y';
	$locObj222->callNumEnd = '822_000000000000000_04F';
	$locObj222->imageFile = 'shelf164.gif';
	$locObj222->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 822_000000000000000_04F - 823C
	$locObj223= new stdObject();
	$locObj223->libName = 'Brooklyn';
	$locObj223->location = "Brooklyn Stacks";
	$locObj223->callNumBegin = '822_000000000000000_04F';
	$locObj223->callNumEnd = '823C';
	$locObj223->imageFile = 'shelf165.gif';
	$locObj223->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 823C - 824L
	$locObj224= new stdObject();
	$locObj224->libName = 'Brooklyn';
	$locObj224->location = "Brooklyn Stacks";
	$locObj224->callNumBegin = '823C';
	$locObj224->callNumEnd = '824L';
	$locObj224->imageFile = 'shelf166.gif';
	$locObj224->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 824L - 828_000000000000000_08L
	$locObj225= new stdObject();
	$locObj225->libName = 'Brooklyn';
	$locObj225->location = "Brooklyn Stacks";
	$locObj225->callNumBegin = '824L';
	$locObj225->callNumEnd = '828_000000000000000_08L';
	$locObj225->imageFile = 'shelf167.gif';
	$locObj225->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 828_000000000000000_08L - 842H
	$locObj226= new stdObject();
	$locObj226->libName = 'Brooklyn';
	$locObj226->location = "Brooklyn Stacks";
	$locObj226->callNumBegin = '828_000000000000000_08L';
	$locObj226->callNumEnd = '842H';
	$locObj226->imageFile = 'shelf168.gif';
	$locObj226->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 842H - 860F
	$locObj227= new stdObject();
	$locObj227->libName = 'Brooklyn';
	$locObj227->location = "Brooklyn Stacks";
	$locObj227->callNumBegin = '842H';
	$locObj227->callNumEnd = '860F';
	$locObj227->imageFile = 'shelf169.gif';
	$locObj227->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 860F - 888_000000000000000_4D
	$locObj228= new stdObject();
	$locObj228->libName = 'Brooklyn';
	$locObj228->location = "Brooklyn Stacks";
	$locObj228->callNumBegin = '860F';
	$locObj228->callNumEnd = '888_000000000000000_4D';
	$locObj228->imageFile = 'shelf170.gif';
	$locObj228->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 888_000000000000000_4D - 895_000000000000000_6B
	$locObj229= new stdObject();
	$locObj229->libName = 'Brooklyn';
	$locObj229->location = "Brooklyn Stacks";
	$locObj229->callNumBegin = '888_000000000000000_4D';
	$locObj229->callNumEnd = '895_000000000000000_6B';
	$locObj229->imageFile = 'shelf171.gif';
	$locObj229->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 895_000000000000000_6B - 910_000000000000000_28G
	$locObj230= new stdObject();
	$locObj230->libName = 'Brooklyn';
	$locObj230->location = "Brooklyn Stacks";
	$locObj230->callNumBegin = '895_000000000000000_6B';
	$locObj230->callNumEnd = '910_000000000000000_28G';
	$locObj230->imageFile = 'shelf172.gif';
	$locObj230->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 910_000000000000000_28G - 915_000000000000000_2H
	$locObj231= new stdObject();
	$locObj231->libName = 'Brooklyn';
	$locObj231->location = "Brooklyn Stacks";
	$locObj231->callNumBegin = '910_000000000000000_28G';
	$locObj231->callNumEnd = '915_000000000000000_2H';
	$locObj231->imageFile = 'shelf173.gif';
	$locObj231->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 915_000000000000000_2H - 917_000000000000000_56M
	$locObj232= new stdObject();
	$locObj232->libName = 'Brooklyn';
	$locObj232->location = "Brooklyn Stacks";
	$locObj232->callNumBegin = '915_000000000000000_2H';
	$locObj232->callNumEnd = '917_000000000000000_56M';
	$locObj232->imageFile = 'shelf174.gif';
	$locObj232->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 917_000000000000000_56M - 935B
	$locObj233= new stdObject();
	$locObj233->libName = 'Brooklyn';
	$locObj233->location = "Brooklyn Stacks";
	$locObj233->callNumBegin = '917_000000000000000_56M';
	$locObj233->callNumEnd = '935B';
	$locObj233->imageFile = 'shelf175.gif';
	$locObj233->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 935B - 941_000000000000000_081V
	$locObj234= new stdObject();
	$locObj234->libName = 'Brooklyn';
	$locObj234->location = "Brooklyn Stacks";
	$locObj234->callNumBegin = '935B';
	$locObj234->callNumEnd = '941_000000000000000_081V';
	$locObj234->imageFile = 'shelf176.gif';
	$locObj234->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 941_000000000000000_081V - 945_000000000000000_05B
	$locObj235= new stdObject();
	$locObj235->libName = 'Brooklyn';
	$locObj235->location = "Brooklyn Stacks";
	$locObj235->callNumBegin = '941_000000000000000_081V';
	$locObj235->callNumEnd = '945_000000000000000_05B';
	$locObj235->imageFile = 'shelf177.gif';
	$locObj235->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 945_000000000000000_05B - 952M
	$locObj236= new stdObject();
	$locObj236->libName = 'Brooklyn';
	$locObj236->location = "Brooklyn Stacks";
	$locObj236->callNumBegin = '945_000000000000000_05B';
	$locObj236->callNumEnd = '952M';
	$locObj236->imageFile = 'shelf178.gif';
	$locObj236->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 952M - 965_000000000000000_04F
	$locObj237= new stdObject();
	$locObj237->libName = 'Brooklyn';
	$locObj237->location = "Brooklyn Stacks";
	$locObj237->callNumBegin = '952M';
	$locObj237->callNumEnd = '965_000000000000000_04F';
	$locObj237->imageFile = 'shelf179.gif';
	$locObj237->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 965_000000000000000_04F - 973B
	$locObj238= new stdObject();
	$locObj238->libName = 'Brooklyn';
	$locObj238->location = "Brooklyn Stacks";
	$locObj238->callNumBegin = '965_000000000000000_04F';
	$locObj238->callNumEnd = '973B';
	$locObj238->imageFile = 'shelf180.gif';
	$locObj238->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 973B - 973_000000000000000_3S
	$locObj239= new stdObject();
	$locObj239->libName = 'Brooklyn';
	$locObj239->location = "Brooklyn Stacks";
	$locObj239->callNumBegin = '973B';
	$locObj239->callNumEnd = '973_000000000000000_3S';
	$locObj239->imageFile = 'shelf181.gif';
	$locObj239->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 973_000000000000000_3S - 973_000000000000000_8N
	$locObj240= new stdObject();
	$locObj240->libName = 'Brooklyn';
	$locObj240->location = "Brooklyn Stacks";
	$locObj240->callNumBegin = '973_000000000000000_3S';
	$locObj240->callNumEnd = '973_000000000000000_8N';
	$locObj240->imageFile = 'shelf182.gif';
	$locObj240->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 973_000000000000000_8N - 974_000000000000000_4M
	$locObj241= new stdObject();
	$locObj241->libName = 'Brooklyn';
	$locObj241->location = "Brooklyn Stacks";
	$locObj241->callNumBegin = '973_000000000000000_8N';
	$locObj241->callNumEnd = '974_000000000000000_4M';
	$locObj241->imageFile = 'shelf183.gif';
	$locObj241->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 974_000000000000000_4M - 976_000000000000000_4I
	$locObj242= new stdObject();
	$locObj242->libName = 'Brooklyn';
	$locObj242->location = "Brooklyn Stacks";
	$locObj242->callNumBegin = '974_000000000000000_4M';
	$locObj242->callNumEnd = '976_000000000000000_4I';
	$locObj242->imageFile = 'shelf184.gif';
	$locObj242->locNote = 'Floor 2M';


//location "Brooklyn Stacks" 976_000000000000000_4I - 999_990000000000000
	$locObj243= new stdObject();
	$locObj243->libName = 'Brooklyn';
	$locObj243->location = "Brooklyn Stacks";
	$locObj243->callNumBegin = '976_000000000000000_4I';
	$locObj243->callNumEnd = '999_990000000000000';
	$locObj243->imageFile = 'shelf185.gif';
	$locObj243->locNote = 'Floor 2M';


//location "Brooklyn Stacks Oversize" 720_000000000000000 - 730_948500000000000
	$locObj244= new stdObject();
	$locObj244->libName = 'Brooklyn';
	$locObj244->location = "Brooklyn Stacks Oversize";
	$locObj244->callNumBegin = '720_000000000000000';
	$locObj244->callNumEnd = '730_948500000000000';
	$locObj244->imageFile = 'shelf190.gif';
	$locObj244->locNote = 'Stacks Floor 2M';


//location "Brooklyn Stacks Oversize" 730_948500000000000 - 759_400000000000000
	$locObj245= new stdObject();
	$locObj245->libName = 'Brooklyn';
	$locObj245->location = "Brooklyn Stacks Oversize";
	$locObj245->callNumBegin = '730_948500000000000';
	$locObj245->callNumEnd = '759_400000000000000';
	$locObj245->imageFile = 'shelf191.gif';
	$locObj245->locNote = 'Stacks Floor 2M';


//location "Brooklyn Stacks Oversize" 759_400000000000000 - 912_000000000000000
	$locObj246= new stdObject();
	$locObj246->libName = 'Brooklyn';
	$locObj246->location = "Brooklyn Stacks Oversize";
	$locObj246->callNumBegin = '759_400000000000000';
	$locObj246->callNumEnd = '912_000000000000000';
	$locObj246->imageFile = 'shelf192.gif';
	$locObj246->locNote = 'Stacks Floor 2M';


//location "Brooklyn Stacks Oversize" 912_000000000000000 - 999_000000000000000
	$locObj247= new stdObject();
	$locObj247->libName = 'Brooklyn';
	$locObj247->location = "Brooklyn Stacks Oversize";
	$locObj247->callNumBegin = '912_000000000000000';
	$locObj247->callNumEnd = '999_000000000000000';
	$locObj247->imageFile = 'shelf193.gif';
	$locObj247->locNote = 'Stacks Floor 2M';


//location "Technical Services--Brooklyn"  - 999_990000000000000
	$locObj248= new stdObject();
	$locObj248->libName = 'Brooklyn';
	$locObj248->location = "Technical Services--Brooklyn";
	$locObj248->callNumBegin = '';
	$locObj248->callNumEnd = '999_990000000000000';
	$locObj248->imageFile = 'ref.gif';
	$locObj248->locNote = '';


//location "Brooklyn Zine Collection" A - Z
	$locObj249= new stdObject();
	$locObj249->libName = 'Brooklyn';
	$locObj249->location = "Brooklyn Zine Collection";
	$locObj249->callNumBegin = 'A';
	$locObj249->callNumEnd = 'Z';
	$locObj249->imageFile = 'ref.gif';
	$locObj249->locNote = '';


//location "VMR Desk, Lower Level"  - 999_990000000000000
	$locObj250= new stdObject();
	$locObj250->libName = 'Brooklyn';
	$locObj250->location = "VMR Desk, Lower Level";
	$locObj250->callNumBegin = '';
	$locObj250->callNumEnd = '999_990000000000000';
	$locObj250->imageFile = 'vmr_desk.gif';
	$locObj250->locNote = '';


//location "VMR Equipment Loan Office"  - 999_990000000000000
	$locObj251= new stdObject();
	$locObj251->libName = 'Brooklyn';
	$locObj251->location = "VMR Equipment Loan Office";
	$locObj251->callNumBegin = '';
	$locObj251->callNumEnd = '999_990000000000000';
	$locObj251->imageFile = 'equip.gif';
	$locObj251->locNote = '';


//location "VMR Media"  - 999_990000000000000
	$locObj252= new stdObject();
	$locObj252->libName = 'Brooklyn';
	$locObj252->location = "VMR Media";
	$locObj252->callNumBegin = '';
	$locObj252->callNumEnd = '999_990000000000000';
	$locObj252->imageFile = 'vmr_desk.gif';
	$locObj252->locNote = '';


//location "Manhattan Center Stacks" 000_000000000000000 - 020_190000000000000
	$locObj253= new stdObject();
	$locObj253->libName = 'Pratt Manhattan Center';
	$locObj253->location = "Manhattan Center Stacks";
	$locObj253->callNumBegin = '000_000000000000000';
	$locObj253->callNumEnd = '020_190000000000000';
	$locObj253->imageFile = 'PMC_shelf1.gif';
	$locObj253->locNote = '';


//location "Manhattan Center Stacks" 020_190000000000000 - 021_700000000000000
	$locObj254= new stdObject();
	$locObj254->libName = 'Pratt Manhattan Center';
	$locObj254->location = "Manhattan Center Stacks";
	$locObj254->callNumBegin = '020_190000000000000';
	$locObj254->callNumEnd = '021_700000000000000';
	$locObj254->imageFile = 'PMC_shelf2.gif';
	$locObj254->locNote = '';


//location "Manhattan Center Stacks" 021_700000000000000 - 025_000000000000000
	$locObj255= new stdObject();
	$locObj255->libName = 'Pratt Manhattan Center';
	$locObj255->location = "Manhattan Center Stacks";
	$locObj255->callNumBegin = '021_700000000000000';
	$locObj255->callNumEnd = '025_000000000000000';
	$locObj255->imageFile = 'PMC_shelf2-5.gif';
	$locObj255->locNote = '';


//location "Manhattan Center Stacks" 025_000000000000000 - 025_210000000000000
	$locObj256= new stdObject();
	$locObj256->libName = 'Pratt Manhattan Center';
	$locObj256->location = "Manhattan Center Stacks";
	$locObj256->callNumBegin = '025_000000000000000';
	$locObj256->callNumEnd = '025_210000000000000';
	$locObj256->imageFile = 'PMC_shelf3.gif';
	$locObj256->locNote = '';


//location "Manhattan Center Stacks" 025_210000000000000 - 025_500000000000000
	$locObj257= new stdObject();
	$locObj257->libName = 'Pratt Manhattan Center';
	$locObj257->location = "Manhattan Center Stacks";
	$locObj257->callNumBegin = '025_210000000000000';
	$locObj257->callNumEnd = '025_500000000000000';
	$locObj257->imageFile = 'PMC_shelf4.gif';
	$locObj257->locNote = '';


//location "Manhattan Center Stacks" 025_500000000000000 - 025_700000000000000
	$locObj258= new stdObject();
	$locObj258->libName = 'Pratt Manhattan Center';
	$locObj258->location = "Manhattan Center Stacks";
	$locObj258->callNumBegin = '025_500000000000000';
	$locObj258->callNumEnd = '025_700000000000000';
	$locObj258->imageFile = 'PMC_shelf4-5.gif';
	$locObj258->locNote = '';


//location "Manhattan Center Stacks" 025_700000000000000 - 027_600000000000000
	$locObj259= new stdObject();
	$locObj259->libName = 'Pratt Manhattan Center';
	$locObj259->location = "Manhattan Center Stacks";
	$locObj259->callNumBegin = '025_700000000000000';
	$locObj259->callNumEnd = '027_600000000000000';
	$locObj259->imageFile = 'PMC_shelf5.gif';
	$locObj259->locNote = '';


//location "Manhattan Center Stacks" 027_600000000000000 - 028_520000000000000
	$locObj260= new stdObject();
	$locObj260->libName = 'Pratt Manhattan Center';
	$locObj260->location = "Manhattan Center Stacks";
	$locObj260->callNumBegin = '027_600000000000000';
	$locObj260->callNumEnd = '028_520000000000000';
	$locObj260->imageFile = 'PMC_shelf6.gif';
	$locObj260->locNote = '';


//location "Manhattan Center Stacks" 028_520000000000000 - 029_700000000000000
	$locObj261= new stdObject();
	$locObj261->libName = 'Pratt Manhattan Center';
	$locObj261->location = "Manhattan Center Stacks";
	$locObj261->callNumBegin = '028_520000000000000';
	$locObj261->callNumEnd = '029_700000000000000';
	$locObj261->imageFile = 'PMC_shelf6-5.gif';
	$locObj261->locNote = '';


//location "Manhattan Center Stacks" 029_700000000000000 - 371_350000000000000
	$locObj262= new stdObject();
	$locObj262->libName = 'Pratt Manhattan Center';
	$locObj262->location = "Manhattan Center Stacks";
	$locObj262->callNumBegin = '029_700000000000000';
	$locObj262->callNumEnd = '371_350000000000000';
	$locObj262->imageFile = 'PMC_shelf7.gif';
	$locObj262->locNote = '';


//location "Manhattan Center Stacks" 371_350000000000000 - 700_000000000000000
	$locObj263= new stdObject();
	$locObj263->libName = 'Pratt Manhattan Center';
	$locObj263->location = "Manhattan Center Stacks";
	$locObj263->callNumBegin = '371_350000000000000';
	$locObj263->callNumEnd = '700_000000000000000';
	$locObj263->imageFile = 'PMC_shelf8.gif';
	$locObj263->locNote = '';


//location "Manhattan Center Stacks" 700_000000000000000 - 709_430000000000000
	$locObj264= new stdObject();
	$locObj264->libName = 'Pratt Manhattan Center';
	$locObj264->location = "Manhattan Center Stacks";
	$locObj264->callNumBegin = '700_000000000000000';
	$locObj264->callNumEnd = '709_430000000000000';
	$locObj264->imageFile = 'PMC_shelf8-5.gif';
	$locObj264->locNote = '';


//location "Manhattan Center Stacks" 709_430000000000000 - 741_609000000000000
	$locObj265= new stdObject();
	$locObj265->libName = 'Pratt Manhattan Center';
	$locObj265->location = "Manhattan Center Stacks";
	$locObj265->callNumBegin = '709_430000000000000';
	$locObj265->callNumEnd = '741_609000000000000';
	$locObj265->imageFile = 'PMC_shelf9.gif';
	$locObj265->locNote = '';


//location "Manhattan Center Stacks" 741_609000000000000 - 769_940000000000000
	$locObj266= new stdObject();
	$locObj266->libName = 'Pratt Manhattan Center';
	$locObj266->location = "Manhattan Center Stacks";
	$locObj266->callNumBegin = '741_609000000000000';
	$locObj266->callNumEnd = '769_940000000000000';
	$locObj266->imageFile = 'PMC_shelf10.gif';
	$locObj266->locNote = '';


//location "Manhattan Center Stacks" 769_940000000000000 - 808_000000000000000
	$locObj267= new stdObject();
	$locObj267->libName = 'Pratt Manhattan Center';
	$locObj267->location = "Manhattan Center Stacks";
	$locObj267->callNumBegin = '769_940000000000000';
	$locObj267->callNumEnd = '808_000000000000000';
	$locObj267->imageFile = 'PMC_shelf10-5.gif';
	$locObj267->locNote = '';


//location "Manhattan Center Stacks" 808_000000000000000 - 999_000000000000000
	$locObj268= new stdObject();
	$locObj268->libName = 'Pratt Manhattan Center';
	$locObj268->location = "Manhattan Center Stacks";
	$locObj268->callNumBegin = '808_000000000000000';
	$locObj268->callNumEnd = '999_000000000000000';
	$locObj268->imageFile = 'PMC_shelf11.gif';
	$locObj268->locNote = '';


//location "Manhattan Center Periodicals" A - Z
	$locObj269= new stdObject();
	$locObj269->libName = 'Pratt Manhattan Center';
	$locObj269->location = "Manhattan Center Periodicals";
	$locObj269->callNumBegin = 'A';
	$locObj269->callNumEnd = 'Z';
	$locObj269->imageFile = 'PMC_current_periodicals.gif';
	$locObj269->locNote = 'Pratt Manhattan Current Periodicals';


//location "Manhattan Center Reference" 000_000000000000000 - 999_990000000000000
	$locObj270= new stdObject();
	$locObj270->libName = 'Pratt Manhattan Center';
	$locObj270->location = "Manhattan Center Reference";
	$locObj270->callNumBegin = '000_000000000000000';
	$locObj270->callNumEnd = '999_990000000000000';
	$locObj270->imageFile = 'PMC_ref.gif';
	$locObj270->locNote = 'Pratt Manhattan Reference';


//location "Manhattan Center Fiction" A - Z
	$locObj271= new stdObject();
	$locObj271->libName = 'Pratt Manhattan Center';
	$locObj271->location = "Manhattan Center Fiction";
	$locObj271->callNumBegin = 'A';
	$locObj271->callNumEnd = 'Z';
	$locObj271->imageFile = 'PMC_fic.gif';
	$locObj271->locNote = 'Pratt Manhattan Fiction';


//location "Electronic Items"  - Z
	$locObj272= new stdObject();
	$locObj272->libName = 'Pratt Manhattan Center';
	$locObj272->location = "Electronic Items";
	$locObj272->callNumBegin = '';
	$locObj272->callNumEnd = 'Z';
	$locObj272->imageFile = 'web_resource.png';
	$locObj272->locNote = 'This is a digital item. Just click the back button on your browser and look for the link under Connect to near the bottom of the page.';


//location "World Wide Web"  - Z
	$locObj273= new stdObject();
	$locObj273->libName = 'Pratt Manhattan Center';
	$locObj273->location = "World Wide Web";
	$locObj273->callNumBegin = '';
	$locObj273->callNumEnd = 'Z';
	$locObj273->imageFile = 'web_resource.png';
	$locObj273->locNote = 'This is a digital item. Just click the back button on your browser and look for the link under Connect to near the bottom of the page.';


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
		227 => $locObj227,
		228 => $locObj228,
		229 => $locObj229,
		230 => $locObj230,
		231 => $locObj231,
		232 => $locObj232,
		233 => $locObj233,
		234 => $locObj234,
		235 => $locObj235,
		236 => $locObj236,
		237 => $locObj237,
		238 => $locObj238,
		239 => $locObj239,
		240 => $locObj240,
		241 => $locObj241,
		242 => $locObj242,
		243 => $locObj243,
		244 => $locObj244,
		245 => $locObj245,
		246 => $locObj246,
		247 => $locObj247,
		248 => $locObj248,
		249 => $locObj249,
		250 => $locObj250,
		251 => $locObj251,
		252 => $locObj252,
		253 => $locObj253,
		254 => $locObj254,
		255 => $locObj255,
		256 => $locObj256,
		257 => $locObj257,
		258 => $locObj258,
		259 => $locObj259,
		260 => $locObj260,
		261 => $locObj261,
		262 => $locObj262,
		263 => $locObj263,
		264 => $locObj264,
		265 => $locObj265,
		266 => $locObj266,
		267 => $locObj267,
		268 => $locObj268,
		269 => $locObj269,
		270 => $locObj270,
		271 => $locObj271,
		272 => $locObj272,
		273 => $locObj273,
		);

}

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
		$locations[] = array($lox1,$lox2);
		$callNum[] = array($post->children(1)->outertext,
					$post->children(2)->first_child()->outertext);
	}
	foreach($locations as $item) {
		//put the location into the books array
		$books[][0] = $item[0];

	}
	$n=0;
	foreach($callNum as $item) {
		//put the call number into the books array
		$books[$n][1] = $item[0];
		$n++;
	}
		//now the items are in an array
		//find the corresponding image
		getMap($books, $locArray);
}

//getMap function
function getMap($items, $locArray) {
	$i = 0;
	foreach($items as $item){
		$loc = strip_tags($items[$i][0]);
		$callNum = strip_tags($items[$i][1]);
		$subCall = sortNums(substr($callNum, 6, 20));
		$i++;

//begin checking for locations
	//variable to indicate that a match has been found
	$foundFlag = 0;
	foreach ($locArray as $locValue => $cur){

		//iterate through each location object and if a match is found, display the map
		if (((strcmp($cur->location, trim($loc)) === 0)) && ($subCall >= $cur->callNumBegin) && ($subCall < $cur->callNumEnd)){
			print '<p>Call number <span style="color: #FF6666;">' . $callNum . '</span> is located in ' . $cur->location . '.</p>';
			print '<img src="img/' . $cur->imageFile . '"/><br />';
			print '<p>' . $cur->locNote . '</p>';
			$foundFlag = 1;
			break;
		}

	}

	//if no match is found, display error message
		if($foundFlag === 0) {
			print '<img src="img/ref.gif"/><p>Could not find ' . $callNum . ' in ' . $loc . ' Please ask a librarian for assistance.</p>';
		}

//end location check

}
//end getMap function
}
makeLocArray();
getBooks($page, $locArray);

//text to print link to ask a librarian
    print'<div id="helpText">';
    print'<p>Questions? <a href="http://library.pratt.edu/research_assistance/ask-a-librarian/">Ask a Librarian.</a></p>';
        print'</div>';
 //end help link div
    $pageURL = $_SERVER['HTTP_REFERER'];
    /*button to report an error*/
    print'<div id="error">';
    print'<form action="sendError.php" method="POST">';
    print'<input type="hidden" name="pageURL" value="' . $pageURL . '"/>';
    	    print'<input type="submit" value="report an error" />';
    		print'</form>';	print "</div>";
	print "</body>";
	print "</html>";

?>