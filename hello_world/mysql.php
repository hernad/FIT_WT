<html>

<head>
<meta charset="utf-8"/>

</head>
<body>
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

echo print_r($result);

echo "<br><br>";


echo "query vratio zapisa: "  . $result->num_rows;


echo "<br><br>";

while ($row = $result->fetch_object()) {
   	
	echo $row->naziv . " ; "  . $row->naziv_2;
}


$stmt = $mysqli->stmt_init();
$qry_update = "INSERT INTO autori(naziv, naziv_2) values(?, ?)";

$stmt->prepare($qry_update);

$naziv = $mysqli->real_escape_string("vako nako");
$naziv_2 = $mysqli->real_escape_string("evo 'mene vamo");


$stmt->bind_param('ss', $naziv, $naziv_2);

if ($stmt->execute()) {
  echo "<hr/><br/>";
  echo "uspješno dodao  $naziv ; $naziv_2 / $stmt->affected_rows  <br/>";
}

$stmt->close();
$mysqli->close();

?>
</body>

</html>