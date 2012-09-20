<?php
?>

<!DOCTYPE html>

<html>
<head>

<style type="text/css" href="css/validationEngine.jquery.css"></style>
<script src="js/jquery.js"></script>
<script src="js/jquery.validationEngine.js"></script>
<script src="js/jquery.validationEngine-en.js"></script>

<meta charset="utf-8" />

<style>

html {
 /* bez ovoga gradient ne valja*/
 height: 100%;
}

body {

padding: 0 0 0 0;

margin-top: 0;
margin-left: 20%;

/*
 background-color: DeepSkyBlue;
 background: url(img/bg.png);
 background-repeat: repeat-x;
*/

 background: -webkit-linear-gradient(top, DeepSkyBlue, white);
 background: -moz-linear-gradient(top, DeepSkyBlue, white);
 background: -ms-linear-gradient(top, DeepSkyBlue, white);
  
 font-family: sans-serif;
}

body h1 {
  font-family: Tahoma;
  font-weight: bold;
  padding-top: 1em;
  margin-bottom: 0.4em;
}

body .podnaslov {
  font-style: italic;
  
  /*background-color: green;*/
}
 
#dlogin {

  position: relative;
  /*top: 22%;*/
  background-color: white;
  padding-top: 0.9em;
  padding-left: 1em;
  padding-bottom: 0.9em;
  padding-rigt: 1em;
  
  margin-top: 0.5em;
  margin-bottom: 1em;
  
  /*margin-left: 20%;*/
  /*margin-right: 20%;*/
  
  width: 40em;
  border: solid 1px black;
  
  /*height: auto;*/
  height: 9em;

}

#dlogin .lbl {
  
  position: relative;
  float: left;
  /* bez clear se raspe ko ri�a */
  clear: both;
  margin-left: 0.5em;
  
  line-height: 1.2em;
  
  margin-top: 0.7em;
  margin-bottm: 0.3em;
  
  width: 12em;
  left: 0;
  background-color: transparent;
}

#dlogin .inp {
  
  position: relative;
  float: left;
  
  /*
  padding-left:0.3em;
  padding-top:0.3em;
  padding-bottom:0.3em;
  padding-right: 0.3em;
  */
  
  /* bez ovog padding-a ne valja unos u rounded box */ 
  padding: 0.3em;
  
  line-height: 1.2em;
  
  margin-left: 0.5em;
  
  margin-top: 0.7em;
  margin-bottom: 0.3em;
  
  
  width: 20em;
  border: solid 1px;
  border-radius: 5px;
}

#dlogin .btn {
  
  position: relative;
  float: left;
  margin-left: 0.5em;
  
  margin-top: 1.1em;
  margin-bottom: 0.9em;
  
  font-size: 1.05em;
  
  width: 8em;
  border: solid 1.5px black;
  border-radius: 5px;
  background-color: DeepSkyBlue;
  color: white;
  
}

</style>


<script>

$(document).ready(function () {
	console.log("login");
});


</script>


</head>

<body>

<h1>WT naslov</h1>
<span class="podnaslov">Shoutbox</span>
<div id="dlogin">
<form id="flogin">

<span class="lbl">
	<label for="text">Email:</label>
</span>
<input class="inp" type="text" name="email"></input>
<br/>


<span class="lbl">
	<label for="pwd">Password:</label>
</span>
<input class="inp" type="password" name="pwd"></input>

<span class="lbl">
&nbsp;
</span>

<input class="btn" style="background-color:dodgerblue1;" type="button" value="Login"></input>

</form>

</div>

<span style="font-size:small;">
Copyright: bujrum, koristi kako ti volja.
</span>

</body>

</html>
