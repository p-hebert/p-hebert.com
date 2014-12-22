<?php
require_once '/lang/Lang.class.php';
$lang = Lang::getArrayLang('en', Lang::CommonLang);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
	<meta name="author" content="Philippe Hebert"/>
        <title><?= $lang['title_index'] ?></title>
    </head>
    <body>
        <p> Hello World </p>
    </body>
</html>
