<?php
require_once 'session_module.php';
require_once 'lang/Lang.class.php';
$lang = Lang::getArrayLang($_SESSION['_LANG'], [Lang::CommonLang]);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
	<meta name="author" content="Philippe Hebert"/>
        <title><?= $lang['title-index'] ?></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php 
            require_once "header.php"; 
            require_once "intro.php"; 
        ?>
        
        <!-- Javascript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            function langSubmit(lang){
                var value = $('#lang-hidden').val();
                if(lang !== value){
                    $('#lang-hidden').val(lang);
                    document.forms['lang'].submit();
                }
            }
        </script>
        <script>
            $(document).ready(function(){
                /*$('#option-menu-icon').click(function(){
                    if($('#option-menu-lang').css('display') === 'none'){
                        $('#option-menu-icon').attr('class', 'close');
                        $('#option-menu-icon').html('&times;');
                        $('#option-menu-lang').attr('class', 'btn-group option-visible');
                    }else{
                        $('#option-menu-icon').html('');
                        $('#option-menu-icon').attr('class', 'glyphicon glyphicon-cog');
                        $('#option-menu-lang').attr('class', 'btn-group option-invisible');
                    }
                });*/
                
                $('#intro-below').children('li').each(function(i){
                    if($(this).attr('id') === 'subtitle-trigger'){
                        $(this).delay((i++)*750).fadeTo(1000, 0.5);
                    }else{
                        $(this).delay((i++)*750).fadeTo(1000, 0.3);
                    }
                });
                
                $('#subtitle-trigger').click(function(){
                    $('#intro').fadeOut();
                    $('#option-menu-lang').find('button').addClass('white');
                });
            });
        </script>
    </body>
</html>
