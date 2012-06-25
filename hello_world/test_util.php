<?php

include('util.php');

$v1 = 'a';
$v2 = 'b';
$v3 = 'c';

echo "Test 1:<br/>";

if  (str_isset_and_not_empty($v1, $v2, $v3)) {
  echo "sve varijable setovane i napunjene";
} else {
  echo "neke varijable nisu setovane";
}

echo "<br/>";

echo "<br/>Test 2:<br/>";

 
unset($v2);

if  (str_isset_and_not_empty($v1, $v2, $v3)) {
	echo "sve varijable setovane i napunjene";
} else {
	echo "neke varijable nisu setovane - v2";
}



echo "<br/><br/>Test 3:<br/>";

$v2 = "ok";
$v3 = "";


if  (str_isset_and_not_empty($v1, $v2, $v3)) {
	echo "sve varijable setovane i napunjene";
} else {
	echo "v3 je empty";
}

?>