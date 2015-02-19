<?php
require_once 'session_module.php';
require_once 'lang/Lang.class.php';
$lang = Lang::getArrayLang($_SESSION['_LANG'], array(Lang::CommonLang));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
	<meta name="author" content="Philippe Hebert"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
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
        <!--commented out for dev on slow connection <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
        <script>
            if (!window.jQuery) {
                document.write('<script type="text/javascript" src="js/jquery-2.1.3.min.js"><\/script>'); 
            }
        </script>
        <script>
            window.onresize = function(){
                if(window.innerwidth > 767 && intro){
                    $('footer').css({'text-align':'left', 'margin-left':'82px'});
                }else if(intro){
                    $('footer').css({'text-align':'center', 'margin-left':0});
                }
            }
            
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
            
            function navHover(id){
                changeLetters(id);
            }
            
            function changeLetters(id){
                var $this = $('#'+ id).children('div');
                var characters = '0123456789ABCDEF';
                var text = $this.html();
                var i = Math.floor(text.length * Math.random());
                var j = Math.floor(characters.length * Math.random());
                text = text.substring(0,i) + characters.charAt(j) + text.substring(i+1);
                $this.html(text);
            }
        </script>
        <script>
            var intervalID;
            var navID;
            var intro = true;
            
            $(document).ready(function(){
                /*Cosmetic part, setting up for the grand show*/
                $('#nav-home').children('div').css({'padding-left':0});
                
                /*Time for the grand Entrance!*/
                $('#intro-below').children('li').each(function(i){
                    if($(this).attr('class') === 'intro-trigger'){
                        $(this).delay((i++)*750).fadeTo(1000, 0.5);
                    }else{
                        $(this).delay((i++)*750).fadeTo(1000, 0.3);
                    }
                });
                
                /*Welcome the main act of this piece, you will be delighted by how our actors play their roles*/
                $('.intro-trigger').click(function(){
                    if(window.innerWidth > 992) {
                        $('.fadeout-intro').fadeOut();
                    }else{
                        $('#intro').fadeOut();
                    }
                    intro = false;
                    setTimeout(function(){
                        if(window.innerWidth > 992) {
                            $('footer').css({'text-align':'left', 'margin-left':'82px'});
                        }
                        $('.fadein-main').fadeIn();
                    }, 500);
                    $('#main-menu-lang').find('button').addClass('white');
                });
                
                $('#navbar-trigger').click(function(){
                    $('#nav-button').fadeOut();
                    $('#nav-navbar').fadeIn();
                });
                
                $('#nav-close').click(function(){
                    $('#nav-navbar').fadeOut();
                    $('#nav-button').fadeIn();       
                });
                
                $('#nav-navbar').find('li').each(function(){
                    if($(this).attr('id') !== 'nav-close'){
                        $(this).click(function(){
                            if($(this).hasClass('inactive')){
                                $('#nav-navbar').find('li').each(function(){
                                    if($(this).hasClass('active')){
                                        $(this).removeClass('active');
                                        $(this).children('div').removeAttr('style');
                                        $(this).addClass('inactive');
                                        if($(this).attr('id') !== 'nav-home'){
                                            $('section').animate({'margin-right':'-75%'},500);
                                        }
                                    }
                                });
                                $(this).removeClass('inactive');
                                $(this).addClass('active');
                                $(this).children('div').animate({'padding-left':0}, 200);
                                if($(this).attr('id') !== 'nav-home'){
                                    $('section').animate({'margin-right':0},500);
                                }
                            }
                        });
                    }
                    /*Cunning!*/
                    $(this).children('div').on('mouseenter', function(){
                        navID = $(this).parent().attr('id');
                        intervalID = setInterval(function(){
                            navHover(navID);
                        }, 100);
                    });
                    /*Such acting!*/
                    $(this).children('div').on('mouseleave', function(){
                        clearInterval(intervalID);
                        var html = $(this).data('content');
                        $(this).html(html);
                    });
                });
            });
        </script>
        <script async src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r69/three.min.js'></script>
    </body>
</html>
