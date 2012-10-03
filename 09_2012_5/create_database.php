<?php

include "db.php";

$db = new Db();

if (!isset($_REQUEST["password"]) || $_REQUEST["password"] != "admin") {
  echo "zabranjeno bez parametara pokretati ovu stranicu";
  exit();
}
else
  echo "kreiram tabelu, radim insert testnog sloga<br/>";

$db->create_tables();

$row = array( "firstname" => "Ernad", "lastname" => "Husremovic", 
		"email" => "hernad@bring.out.ba", "password" => "test", "birthday" => "1970-01-03" );

$db->insert($row);

$row = array( "firstname" => "Bakir", "lastname" => "Husremovic",
		"email" => "bakir@bring.out.ba", "password" => "test", "birthday" => "1970-01-03" );
$db->insert($row);

$id = $db->insert_id($row);

echo "<br/>insert_id $id";

var_dump($db->get_user($id));

echo "<br/>";
$db->insert_message($id, "hello world");

echo "<br/>";
$db->insert_message(10000, "ovo ce biti error");
