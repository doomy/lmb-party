<?php
    include_once("lib/env.php");
    $env = new Env("/");

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
