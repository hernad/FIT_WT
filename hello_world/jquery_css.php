<!DOCTYPE html>
<html>
<head>
  <style>
  
div { width:60px; height:60px; margin:5px; float:left; }

  </style>

  <script src="http://code.jquery.com/jquery-latest.js"></script>

</head>

<body>



<?php

echo "<a href=\"http://api.jquery.com/css/\">api jquery css</a>";
 
?>
<br/>
  
<span id="result">&nbsp;</span>

<div style="background-color:black;"></div>
<div style="background-color:yellow;"></div>
<div style="background-color:white;"></div>

<div style="background-color:blue;"></div>
<div style="background-color:rgb(15,99,30);"></div>

<div style="background-color:#123456;"></div>
<div style="background-color:#f11;"></div>

<script>

$("div").click(  
  function() {
	
  var color = $(this).css("background-color");
  //alert("'color:"  + color + ";background-color:" + ((color == "rgb(255, 255, 255)") ? "rgb(0, 0, 0)" : "rgb(255, 255, 255)") + "';'>" + color + "</span>.");
  
  $("#result").html("That div is <span style='color:"  + color + ";background-color:" + 
		  ((color == "rgb(255, 255, 255)") ? "seagreen" : "rgb(255, 255, 255)") + "';'>" + 
		  color + "</span>.");
 

   alert("pao mi mrak !");
   $(this).css("background-color", "black");

  }
 
);

</script>

</body>
</html>


<html>