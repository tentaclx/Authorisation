<?php
//include __DIR__ . '/main_menu.php';
//include __DIR__ . '/print_main_menu.php';
//include '/home/CREAT0RS/smirnov.a/p3/htdocs/main_menu.php';
if (! empty($_SESSION['authorised']) && $_SESSION['authorised']) {
    setcookie('auth', $_SESSION['id'],time() + 3600, '/');
}

include '/home/CREAT0RS/smirnov.a/p3/htdocs/print_main_menu.php';
printMenu($mainMenu, $cssClassHeader, SORT_ASC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="http://p3.smirnova.newgrade.vpool/styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="http://p3.smirnova.newgrade.vpool/i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>
