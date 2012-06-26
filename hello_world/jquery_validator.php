<?php 


if (isset($_GET['ime'])) {
	//echo "<script>alert('setovao header !');</script>";
	//header("Location: " . $_SERVER["PHP_SELF"]);
	
}

?>

<html>

<head>

<title>Hello jquery validator</title>

<meta content="text/html" charset="utf-8" http-equiv="content-type"></meta>


<link href="templates/admin/main.css" type="text/css" rel="stylesheet" />

<link href="templates/shared/validation/validationEngine.jquery.css" type="text/css" rel="stylesheet" />

<script type="text/javascript"  src="scripts/jquery/jquery-1.7.1.min.js" ></script>
<script type="text/javascript"  src="scripts/jquery/jquery-ui-1.8.17.custom.min.js" ></script>

<!-- validation engine engleski -->
<script type="text/javascript"  src="scripts/jquery/validation/jquery.validationEngine.js"></script>
<script type="text/javascript"  src="scripts/jquery/validation/languages/jquery.validationEngine-en.js"></script>

<script type="text/javascript"  src="scripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript"  src="scripts/tiny_mce/tiny_mce_init.js"></script>



<script type="text/javascript">


$(document).ready(function() { 


	 $('#mainform').validationEngine();

	 
	 $('#mainform').submit(function() {
	        var error = 0;

            //ovo radi za textarea ali ne radi kada je tinyMCE
	        //var comment = $('#ta_komentar').val();

	        var comment = tinyMCE.get('ta_komentar').getContent();
	                
	        if (comment == '') {
	            error = 1;
	            alert('Comment cannot be empty.');
	        }  else {    
		        alert('postavio hidden na vrijednost: ' + comment);
		        //  postavi hidden input polje
	        	$('#komentar_val').attr('value', comment);
		    }

	        if (error) {
	            return false;
	        } else {
	            return true;
	        }

	 });
	 
});

function set_komentar_val() {
	
//var comment = $('#komentar').val();

//alert("set comentar val");

//  postavi hidden input polje
//$('#komentar_val').attr('value', comment);
return true;
		
}



</script>

</head>

<body onload="<?php 
if (!isset($_GET["ime"])) {

	//echo "tinyMCE.activeEditor.setContent('hello world from tiny_mce');";
	echo "tinyMCE.get('ta_komentar').setContent('hello world from tiny_mce');";
		
} else {
	echo "tinyMCE.get('ta_komentar').setContent('" . $_GET["komentar_val"]  . "');";
}
?>">

<h2>jQuery validation engine hello</h2>
<hr/>


<form id="mainform"  method="get"  action="<?php echo $_SERVER['PHP_SELF']; ?>" > 

<fieldset>
<legend>Fieldset 1</legend>
<input type="text" id="ime" name="ime" class="input_field validate[required]"  value="Ime"></input>

<br/>

<input type="text" id="prezime" name="prezime" class="input_field validate[required]"  value="Prezime"></input>

<input type="text" id="email" name="email" class="input_field validate[required, custom[email]]"  value="hernad@bring.out.ba"></input>

<input type="hidden" id="komentar_val" name="komentar_val"></input>
<br/>

<textarea id="ta_komentar" onchange="set_komentar_val();" ></textarea>

<input type="submit" name="salji" value="Pošalji sa hidden"></input>

<!--  
<input type="button" id="btn1" name="btn1" value="dugme 1" onClick="alert('sta hoces ?');" ></input>
-->

</fieldset>

</form>



</body>
	

</html>