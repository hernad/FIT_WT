<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <style>
  p { background:yellow; }
</style>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>

<style>
 div { width:60px; height:60px; margin:10px; float:left; }
 p { clear:left; font-weight:bold; font-size:16px; 
     color:green; background-color: white; margin:0 10px; padding:2px; }
</style>
 


<body>
  početak <strong>prvi strong</strong>
  <strong>Hello strong!!!</strong>
  bla <strong>treći strong</strong>
  <p id="p0" >I would like to say: </p>

  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>

  <p/>
  
  <br/>
  
  <input type="checkbox" name="g1" id="chk1" value="check 1">Check 1</input>
  <input type="checkbox" name="g1" id="chk2" value="check 2">Check 2</input>
  <input type="checkbox" name="g1" id="chk3" value="check 3">Check 3</input>
 
 
  <br/>
  
  <input type="radio" name="g2" id="rb1" value="rb 1">Radio button 1</input>
  <input type="radio" name="g2" id="rb2" value="rb 2">Radio button 2</input>
  <input type="radio" name="g2" id="rb3" value="rb 3">Radio button 3</input>
  
  <br/>
  <input type="button" onclick="reci()" value="reci šta je checkirano" ></input>
  <br/>
  <input type="button" onclick="reci_radio()" value="reci koji radio je checkiran" ></input>
  
  
<script>
  var first_strong = $("strong").slice(2,3); 
  $("p").append( first_strong );


  $("div").css("border", "2px solid red").append("<p>hello</p>").css("background", "yellow");

  function reci() {

    $("input[name=g1]:checked").each( function() {
    alert($(this).val());
    });

  }

  function reci_radio() {

	    $("input[name=g2]:checked").each( function() {
	    alert($(this).val());
	    });

  }
</script>

  
</script>

</body>
</html>