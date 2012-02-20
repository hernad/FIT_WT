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

?>

</body>

</html>

