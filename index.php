<?php
    // version 1

    include_once("lib/env.php");
    $env = new Env("");
    include_once($env->basedir."lib/db_handler.php");
    $dbh = new dbHandler($env);

    $lang = @$_GET['l'] ? $_GET['l'] : 'cz';

    include_once($env->basedir."lib/local.php");
    $local = new Local($lang, $dbh);

    switch ($lang) {
        case 'en':
            include($env->basedir.'templates/index.tpl.php');
        break;

        default:


            include($env->basedir.'templates/index.tpl.php');
        break;
    }
?>
