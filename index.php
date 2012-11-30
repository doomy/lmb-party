<?php
    include_once("lib/env.php");
    $env = new Env("");
    include_once($env->basedir."lib/db_handler.php");
    $dbh = new dbHandler($env);

    $lang = @$_GET['l'];

    switch ($lang) {
        case 'en':
            include($env->basedir.'templates/index-en.tpl.php');
        break;
        
        default:
            include($env->basedir.'templates/index.tpl.php');
        break;
    }
?>
