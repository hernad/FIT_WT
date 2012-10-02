<html>

<header>

<?php
$header = "Login 3";
include "header.php";

?>

</header>


<body>

<div class="box_login">

   <h2>Facebook login:</h2>

   <div class="box_login_sub">

      <div style="display:block;" class="box_login_error_box">
          <b>Incorrect user name</b><br/>
          <div style="margin-top:5px; margin-bottom:5px; font-size:small;">
          Opis poruke<br/>
          Dodatna recenica.
          </div>
      </div>
      
      <div class="form_row">
         <label>Label 1</label>
         <input type="text" value="" />
      </div>
      
      <div class="form_row">
         <label>Label 2</label>
         <input type="text" value="" />
      </div>
     
      <div class="form_buttons">
         <input type="submit" value="Log In" />
          or <a href="test.php">Sigunp for Facebook</a>
      </div>
      
      <div class="form_link_bottom">
         <a href="test2.php">Forget your pwd ?</a>
      </div>
      
      
       
   </div>


</div>
  

</body>

</html>

