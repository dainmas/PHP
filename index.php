<?php

$siuksliadezes_turis = 40;
$siuksliu_turis_per_d = 15;
$max_kaupo_turis = rand(5, 10);
$d = floor(($siuksliadezes_turis + $max_kaupo_turis) / $siuksliu_turis_per_d);
$date = date('Y-m-d', strtotime('+' . $d . 'days'));
$text = "Po $d ($date) daryk ką nors, kad išvengtum konflikto.";
$title = "Siuksline ($siuksliadezes_turis + $max_kaupo_turis 1)";
?>
<html>
    <head>
        <title><?php print $title; ?></title>  
    </head>
    <body>
        <p><?php print $text; ?></p>
    </body>
</html>
