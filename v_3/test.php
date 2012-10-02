<?php

include 'data.php';

class C1 {
	public $id = "1";
	public $name = "test";
}

$c = new C1();

$d = new DataUsers();

$arr = array( "a" => "test", "b" => "test2");

$d->debug = true;

var_dump($d->get_users_json());

?>