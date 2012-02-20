<script src="scripts/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>

<?php 

echo <<<txt
<head>
<script>
alert('process_1.php');



</script>
</head>

txt;


?>

<html>

<body>

<form id="frm1" name="frm1" action="guestbook.php">
<input type="submit" value="vrati me na guest book" />
</form>

</body>

<script>
$('#frm1').submit(function() {
	  alert('Handler for .submit() called.');
	  return true;
});

$('#frm1').submit();


 
</script>


</html>
