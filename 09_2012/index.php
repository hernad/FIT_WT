<!DOCTYPE html>
<html>

<head>
<?php

$header = "WT empty";
include_once "header.php";
?>

<script type="text/javascript">

$(document).ready(function () {


	
	var select = $("#select_day");
	fill_select_with_days(select);

	var select = $("#select_month");
	fill_select_with_months(select);
	
	var select = $("#select_year");
	fill_select_with_years(select);

	
	$("form").validationEngine({
		ajaxFormValidation: true, 
		onAjaxFormComplete: ajax_form_callback, 
		onBeforeAjaxFormValidation: ajax_before_call
	  });

	
});

function ajax_form_callback(status, form, json, options){
	
	console.log(status);
            
	if (status === true) {
			alert("the form is valid!");
			// uncomment these lines to submit the form to form.action
			//form.validationEngine('detach');
			//form.submit();
			//or you may use AJAX again to submit the data

			/*
			// reset svih polja forme
			$('form').each (function(){
				  this.reset();
			});
			*/

			document.location = "test.php";
			

	} else {
		   alert("form nije validna");
				
	}
        
}

function ajax_before_call(form, options) {

	console.log("before ajax form");
}


</script>
    
</head>

<body>

<h2>hello world</h2>

<form id="frm1" method="post" action="valid_form.php">

<input type="hidden" name="login_request" value="true" />
<div class="form_row">
	<label>Unesi Datum (GGG-MM-DD):</label>
	<input  class="validate[required,custom[date]]" type="text" id="datum1" name="txt1" value="" ></input>
</div>

<div class="form_row">
	<label>Unesi txt2:</label>
	<input type="text" class="validate[required,funcCall[valid_1]" id="txt2" name="txt2" value="" ></input>
</div>

<div class="form_row">
	<label>Unesi email (ajax kontrola):</label>
	<input type="text" class="validate[ajax[ajaxValid]]" id="email" name="email" value="" ></input>
</div>

<div class="form_row">
    <label>Unesi datum rodjenja:</label>
    <select id="select_day" class="validate[required]"></select>
    <select id="select_month" class="validate[required]"></select>
    <select id="select_year" class="validate[required]"></select>
</div>

<input type="submit" value="posalji me"></input>

</form>


</body>

</html>