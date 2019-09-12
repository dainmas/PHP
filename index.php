<?php

$siuksliadezes_turis = 40;
$siuksliu_turis_per_d = 15;
$max_kaupo_turis = rand(45, 55);
$d = $max_kaupo_turis / $siuksliu_turis_per_d;
$date = date('Y-m-d', strtotime('+' . $d . 'days'));
 
?>
<html>
    <head>
        <title>Šiukšlės</title>  
    </head>
    <body>
        <p>Po <?php print round($d, 0) . ' dienų' . ' ' . $date; ?> daryk ką nors, kad išvengtum konflikto.</p>
    </body>
</html>
