<?php

echo "test";

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


foreach ($arr as $key => $value) {
	echo "item: $key " . "->" . "$value <br>";
}

?>