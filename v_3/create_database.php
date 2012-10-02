<?php

// http://localhost/jquery/create_database.php?create=1

if  (! ( isset($_GET["create"]) && ($_GET["create"]=="1") ))
{
   echo "neispravan url";
   exit();
}

	
include 'data.php';

$d = new DataUsers();
$d->debug = true;

$d->test();
$d->create_tables();

$rec = array( "name" => "ernad", "phone" => "1111", "ptt" => 72000);
$d->insert($rec);

$rec = array( "name" => "ernad2", "phone" => "2222", "ptt" => 73000);
$d->insert($rec);

$ret = $d->get_user(1);
($ret) ? print_r($ret) : printf("null") ;
echo "<br/>";

$ret = $d->get_user(2);
($ret) ? print_r($ret) : printf("null") ;
echo "<br/>";


$ret = $d->get_user(3);

($ret) ? print_r($ret) : printf("null") ;

echo "<br/>";


?>