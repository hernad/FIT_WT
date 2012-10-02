<?php

if (!isset($_GET["fieldId"], $_GET["fieldValue"])) 
{
   $ret = array();
   echo json_encode($ret);
   
} else {
	
	switch ($_GET["fieldId"]) {
		case "email":
		    email_validate($_GET["fieldValue"]);
		    break;
		
		default:
		    break;
	}
	
}   

function email_validate($val) {
	
	$ret = array();
	$ret[] = "email";
	
	if ($val != "a@b.com") {
	    $ret[] = false;
	    $ret[] = "Mora biti a@b.com";
	}
	else {
		$ret[] = true;
		$ret[] = "";
	}
		
	echo json_encode($ret);
}

?>