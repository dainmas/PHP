<?php

$siuksliadezes_turis = 40;
$siuksliu_turis_per_d = 15;
$max_kaupo_turis = rand(5, 10);
$d = ($siuksliadezes_turis + $max_kaupo_turis) / $siuksliu_turis_per_d;
$date = date('Y-m-d', strtotime('+' . $d . 'days'));
 
?>
<html>
    <head>
        <title>Šiukšlės</title>  
    </head>
    <body>
        <p>Po <?php print floor($d) . ' dienų' . ' ' . $date; ?> daryk ką nors, kad išvengtum konflikto.</p>
    </body>
</html>
