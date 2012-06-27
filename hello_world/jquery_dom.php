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
  
<script>
  var first_strong = $("strong").slice(2,3); 
  $("p").append( first_strong );

  //$("p#p0").append( '<p id="new">new paragraph</p>' );
  //$("p#p0").add( '<p id="new">new paragraph</p>' );


  $("div").css("border", "2px solid red").append("<p>hello</p>").css("background", "yellow");
  
  //.add("p")
  //.css("background", "yellow");


</script>

  
</script>

</body>
</html>