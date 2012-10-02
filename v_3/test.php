<?php

include 'data.php';

$d = new DataUsers();

/*
$arr = array( "a" => "test", "b" => "test2");

$d->debug = false;
*/

echo $d->get_users_json();
?>