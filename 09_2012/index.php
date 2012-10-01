<!DOCTYPE html>
<html>

<head>
<?php

$header = "WT empty";
include_once "header.php";
?>

<script type="text/javascript">

$(document).ready(function () {
	
	$("form").validationEngine();

	var select = $("#select_day");
	fill_select_with_days(select);

	var select = $("#select_month");
	fill_select_with_months(select);
	
	var select = $("#select_year");
	fill_select_with_years(select);

	
	
});


</script>
    
</head>

<body>

<h2>hello world</h2>

<form id="frm1" method="post" action="">

<div class="form_row">
	<label>Unesi Datum (GGG-MM-DD):</label>
	<input  class="validate[required,custom[date]]" type="text" id="datum1" name="txt1" value="" ></input>
</div>

<div class="form_row">
	<label>Unesi txt2:</label>
	<input type="text" class="validate[required,funcCall[valid_1]" id="txt2" name="txt2" value="" ></input>
</div>
<div class="form_row">
    <label>Unesi datum rodjenja:</label>
    <select id="select_day" class="validate[required]"></select>
    <select id="select_month" class="validate[required]"></select>
    <select id="select_year" class="validate[required]"></select>
</div>
</form>


</body>

</html>