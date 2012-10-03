
<html>

<header>

<?php
$header = "Login";
include "header.php"

?>

<script>

$(document).ready(function () {

	 console.log("login.php");

	 $("#form_login").validationEngine({
		 ajaxFormValidation: true,
		 onAjaxFormComplete: ajax_login_complete,
		 onBeforeAjaxFormValidation: ajax_login_before
		 
     });
	 
	
});


function ajax_login_complete(status, form, json, options)
{
  
}


function ajax_login_before(form) {
	
}
		

function valid_1(field) {

   var value = field.val();

   var div = $("#status");

   if (! value.match(/^\d+/)) {
	   
		 var r = "moraju biti brojevi";
		 //div.empty();
		 div.prepend(new Date() + " : " + r + "<br/>");
   }

   
}


</script>

</header>

<body>

<form id="form_login" action="valid.php" >

<div class="box_login">

    <div class="box_login_header">
    Login form:
    </div>
	
	<div class="form_row">
		<label>Test:</label>
		<input type="text" id="txt1" class="validate[required,funcCall[valid_1]]" value="" placeholder="test"></input>
	</div>
	
	<div class="form_row">
		<label>Test:</label>
		<input type="text" id="txt2" class="validate[required,funcCall[valid_1]]" value="" placeholder="test2"></input>
	</div>
		
	<div class="form_buttons">
		<input type="submit"  value="Submit"></input>
	</div>

</div>

</form>

<div id="status"></div>

</body>

</html>