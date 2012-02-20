
<?php 

echo "There is nothing! :( 
<br />
<br />
Please implement guestbook here. ";

?>
<html>
<head>
<title>Guestbook</title>
      <link href="templates/public/main.css" rel="stylesheet" type="text/css" />

    <link href="scripts/jquery/themes/custom-theme/jquery-ui-1.8.17.custom.css" rel="stylesheet" type="text/css" />
    <script src="scripts/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script>
    
   <script src="scripts/tiny_mce/tiny_mce_src.js" type="text/javascript"></script>
    <script src="scripts/tiny_mce/tiny_mce_init.js" type="text/javascript"></script>

    <link href="templates/shared/validation/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
    <script src="scripts/jquery/validation/languages/jquery.validationEngine-en.js" type="text/javascript"></script>
    <script src="scripts/jquery/validation/jquery.validationEngine.js" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery("#mainForm").validationEngine();
        });
    </script>
</head>
<body>
<form id="mainForm" method="post" action="">
</form>
</body>
</html>