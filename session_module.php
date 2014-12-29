<?php
session_start();
//Checking for language
//If user requested a language change
if(isset($_POST['lang-hidden'])){ 
    switch($_POST['lang-hidden']){
        case 'en':
        case 'fr':
            $_SESSION['_LANG'] = $_POST['lang-hidden'];
            break;
        default:
            $_SESSION['_LANG'] = 'en';
            break;
    }
    setcookie('p-hebert.com_lang', $_SESSION['_LANG'], 3600*24*30); 
    
}elseif(!isset($_SESSION['_LANG'])){
    //Second+ visit, _LANG equal to _lang cookie
    if(isset($_COOKIE['p-hebert.com_lang'])){
        switch($_COOKIE['p-hebert.com_lang']){
            case 'en':
            case 'fr':
                $_SESSION['_LANG'] = $_COOKIE['p-hebert.com_lang'];
            break;
            default:
                $_SESSION['_LANG'] = 'en';
                setcookie('p-hebert.com_lang', $_SESSION['_LANG'], 3600*24*30);
            break;
        }
    //First visit, _LANG default to en
    }else{
        $_SESSION['_LANG'] = 'en';
        setcookie('p-hebert.com_lang', $_SESSION['_LANG'], 3600*24*30);
    }
}

