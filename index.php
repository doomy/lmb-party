<?php
    $lang = @$_GET['l'];

    switch ($lang) {
        case 'en':
            include('templates/index-en.tpl.php');
        break;
        
        default:
            include('templates/index.tpl.php');
        break;
    }
?>
