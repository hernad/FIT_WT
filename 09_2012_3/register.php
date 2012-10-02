<html>

<header>

<style>




</style>


<?php
$header = "Register";
include "header.php";

?>



</header>

<body>

<div class="box_reg">

       <div class="box_reg_header">
       
           <div class="box_reg_header_img">
	          <img src="register_img.png"></img>
	       </div>
	       
	       <div class="box_reg_header_right">
	          <p style="font-weight:bold; padding-top: 10px; margin-bottom: 3px">Signup for Facebook</p>
	          <span style="font-size:small;">Join Facebok bla bla  ...</span>
	       </div>
	       
       </div>
       
       <div class="box_reg_body">
       
             <br/>
             <div class="form_row">
                <label>First Name:</label>
                <input type="text" value="" />
             </div>
             
             <div class="form_row">
                <label>Last Name:</label>
                <input type="text" value="" />
             </div>
             
             <div class="form_row">
                <label>Your email:</label>
                <input type="text" value="" />
             </div>
             
             <div class="form_row">
                <label>Re-enter email:</label>
                <input type="text" value="" />
             </div>
             
             <div class="form_row">
                <label>New password:</label>
                <input type="password" value="" />
             </div>
             
             <div class="form_row">
                <label>Sex:</label>
                <select name="s_sex" ></select>
             </div>
             
             <div class="form_row">
                <label>Birthday:</label>
                <select  name="s_month" ></select>
                <select  name="s_day" ></select>
                <select  name="s_year" ></select>
             </div>
      
             <div class="box_reg_button"><input type="submit" value="Continue" /></div>
      
       </div>
       

</div>



</body>

</html>
