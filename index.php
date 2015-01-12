<?php
/*display-none on icons*/
require_once 'session_module.php';
require_once 'lang/Lang.class.php';
$lang = Lang::getArrayLang($_SESSION['_LANG'], array(Lang::CommonLang));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
	<meta name="author" content="Philippe Hebert"/>
        <title><?= $lang['pagetitle-index'] ?></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/fontastic-p-hebert.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php  
            require_once "intro.php";
            require_once "header.php";
            require_once "main.php";
            require_once "footer.php";
        ?>
        
        <!-- Javascript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            function langSubmit(lang){
                var value = $('#lang-hidden').val();
                if(lang !== value){
                    if(window.intro){
                        $('#intro-lang-hidden').val(lang);
                        document.forms['intro-lang'].submit();
                    }else{
                        $('#main-lang-hidden').val(lang);
                        document.forms['main-lang'].submit();
                    }
                }
            }
            function navClick(){
                var id = $(this).attr('id');
                
            }
        </script>
        <script>
            $(document).ready(function(){
                window.intro = true;
                window.navId = "nav-home";
                $('#intro-below').children('li').each(function(i){
                    if($(this).attr('class') === 'intro-trigger'){
                        $(this).delay((i++)*750).fadeTo(1000, 0.5);
                    }else{
                        $(this).delay((i++)*750).fadeTo(1000, 0.3);
                    }
                });
                
                $('.intro-trigger').click(function(){
                    $('#intro').fadeOut();
                    window.intro = false;
                    $('#main-menu-lang').find('button').addClass('white');
                });
                
                $('#navbar-trigger').click(function(){
                    $('#nav-button').fadeOut();
                    $('#nav-navbar').fadeIn();
                });
                
                $('#nav-navbar').find('li').each(function(){
                    console.log(this);
                    $(this).click(function(){
                        console.log('#'. window.navId);
                        $('#'. window.navId).removeClass('active');
                        $(this).addClass('active');
                        navId = $(this).attr('id');
                    });
                });
            });
        </script>
        <script async src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r69/three.min.js'></script>
    </body>
</html>
