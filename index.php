<?php

$grizai_velai = rand(0, 1);
$grizai_isgeręs = rand(0, 1);

if ($grizai_velai > $grizai_isgeręs) {
    $text_1;
} elseif (
        $grizai_velai && $grizai_isgeręs) {
    $text_2;
} elseif (
        $grizai_velai < $grizai_isgeręs) {
    $text_3;
} else {
    $text_4;
}
$title = 'Buitinė skaičiuoklė';
$text_1 = "Situacija: grįžai vėlai";
$text_2 = "Situacija: grįžai vėlai ir išgėręs";
$text_3 = "Situacija: grįžai išgėręs";
$text_4 = "Situacija: nieko nepadarei";

?>
<html>
    <head>
        <title><?php print $title; ?></title>  
    </head>
    <body>
        <h1><?php print $title; ?></h1>
    <li><h2><?php print $text_1; ?></h2></li>
    <li><h2><?php print $text_2; ?></h2></li>
    <li><h2><?php print $text_3; ?></h2></li>
    <li><h2><?php print $text_4; ?></h2></li>

</body>
</html>