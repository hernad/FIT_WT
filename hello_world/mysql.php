<?php

$host = "localhost";
$user = "root";
$pwd = "";
$db_name = "wt0";

$mysqli = new mysqli($host, $user, $pwd, $db_name);

echo "client ver: " . $mysqli->client_info  . " server ver: " . $mysqli->server_info;

$qry = "SELECT * from autori";

$result = $mysqli->query($qry);

echo "<br><br>";

while ($row = $result->fetch_object()) {
   	
	echo $row->naziv . " ; "  . $row->naziv_2;
}


?>