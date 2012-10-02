<?php

if (!isset($_REQUEST["login_request"]))
{
	$ret = array(array());
	return json_encode($ret);
} 

$email = $_REQUEST["email"];

// ... provjeravaj ...

$ret = array();

$ret_email = array();
$ret_email[] = "email";
$ret_email[] = true;
$ret_email[] = "";

$ret[] = $ret_email;

/*
$ret_txt2 = array();
$ret_txt2[] = "txt2";
$ret_txt2[] = false;
$ret_txt2[] = "Vako je nako je txt2 - ERR";
*/

$ret_txt2 = array();
$ret_txt2[] = "txt2";
$ret_txt2[] = true;
$ret_txt2[] = "";


$ret[] = $ret_txt2;

echo json_encode($ret);

?>