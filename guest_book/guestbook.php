
<?php 

$my_name = "hernad";

echo <<<text
<script> 
alert('hello $my_name');
</script>
text;

$i = 1;

echo "Nema nista ...
<br />
<br />
kraj $i. ";

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

        tinyMCE.init({
                // General options
                mode : "textareas",
                theme : "simple",
                plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

                // Theme options
                //theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
                //theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
                //theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
                //theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
                //theme_advanced_toolbar_location : "top",
                //theme_advanced_toolbar_align : "left",
                //theme_advanced_statusbar_location : "bottom",
                theme_advanced_resizing : true,

                // Skin options
                skin : "o2k7",
                skin_variant : "silver",

                // Example content CSS (should be your site CSS)
                //content_css : "css/example.css",

                // Drop lists for link/image/media/template dialogs
                //template_external_list_url : "js/template_list.js",
                //external_link_list_url : "js/link_list.js",
                //external_image_list_url : "js/image_list.js",
                //media_external_list_url : "js/media_list.js",

                // Replace values for the template plugin
                template_replace_values : {
                        username : "Some User",
                        staffid : "991234"
                }
        });



      </script>
</head>
<body>




<form method="post" action="somepage">
        <textarea name="content" style="width:100%"></textarea>
</form>



</body>
</html>