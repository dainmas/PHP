<?php

$kates = rand(1, 3);
$sunys = rand(1, 3);

$katasuniai = 0;
$text = 'Katašunių išeiga';
$text1 = "Dalyvavo $kates katės ir $sunys šunys";
$text2 = "Katašunių išeiga: $katasuniai";

for ($k = 1; $k <= $sunys; $k++) {
    for ($s = 1; $s <= $kates; $s++) {
        $pavyko = rand(0, 1);
        if ($pavyko == true) {
      $katasuniai++;
            break;
        }
    }
}

?>
<html>
    <head>
        <title>for kates</title> 
    </head>
    <body>
        <div class="container">
            <h1><?php print $text; ?></h1>
            <h2><?php print $text1; ?></h2>
            <h3><?php print $text2; ?></h3>
        </div>
    </body>
</html>