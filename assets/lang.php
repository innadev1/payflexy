<?php

    $SiteUrl = 'http://localhost/www/payflexydem/';
    $lang;

    if (isset($_GET['lang'])&&!empty($_GET['lang'])) {
        if ($_GET['lang']=='en'||$_GET['lang']=='ru') {
            $_SESSION['lang'] = $_GET['lang'];
        }
    }

    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    }else{
        $lang = 'en';
    }




?>