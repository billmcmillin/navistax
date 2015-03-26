<?php
/*send error report*/

	$pageURL = $_POST["pageURL"];

	$headers = "";
	$body = "";
	$body .="<p><b>Page : </b>". $pageURL."</p>\r\n";


	$REPLY='';
	$SUBJECT="stacks map error report";
	
	//Create the headers, including the $FROM header.
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=us-ascii\r\n";
	$headers .= "Content-Transfer-Encoding: 7bit\r\n";

	
	$libemail = 'billmcmillin@gmail.com';
	$adminemail = mail($libemail,$SUBJECT,$body,$headers);

	
	print '<p>Thank you. An error report has been sent regarding this item.</p>';


?> 
