<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>

<body>

<?php

$name = "world";


for ($i = 0; $i < 2; $i++) {
   print("Heljo, $name ($i) \n<p>");
}

$a = array("a"=>"Dog","b"=>"Cat","c"=>"Horse");

$a["a"] = "Pašće" . " grr....";
echo "<br/>";

print_r($a);
echo "<br/>";

$tmp = $a["a"];

echo "tmp = $tmp<br/>";

$tmp = date(DATE_ATOM, mktime(12, 30,0, 1, 1, 1970));

echo "tmp = $tmp<br/>";

echo(date(DATE_RFC822) . "<br />");



$people = array("hernad", "bakir", "samra");
reset($people);

while (list($key, $val) = each($people))
{
	echo "$key => $val<br />";
}

if(!filter_has_var(INPUT_GET, "name"))
{
	echo("Input type does not exist");
}
else
{
	echo("Input type exists");
}

echo("<br/>================ <br/><br/>");


$x=9;
switch ($x)
{
	case 1:
		echo "Number 1";
		break;
		
	case 2:
		echo "Number 2";
		break;
		
	case 3:
		echo "Number 3";
		break;
		
	default:
		echo "No number between 1 and 3";
}

echo("<br/>================ <br/><br/>");

$i=1;
while($i<=3)
{
	echo "The number is " . $i . "<br />";
	$i++;
}

?>

</body>

</html>

