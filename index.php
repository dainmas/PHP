<?php

$title = 'Buitinė skaičiuoklė';

$grizai_velai = rand(0, 1);
$grizai_isgeręs = rand(0, 1);
$text_outcome = 'Situacija: ';
if ($grizai_velai > $grizai_isgeręs) {
    $text_outcome .= 'grįžai vėlai';
} elseif (
        $grizai_velai && $grizai_isgeręs) {
    $text_outcome .= 'grįžai vėlai ir išgėręs';
} elseif (
        $grizai_velai < $grizai_isgeręs) {
    $text_outcome .= 'grįžai išgėręs';
} else {
    $text_outcome .= 'grįžai išgėręs';
}

?>
<html>
    <head>
        <title><?php print $title; ?></title>  
    </head>
    <body>
        <h1><?php print $title; ?></h1>
    <li><h2><?php print $text_outcome; ?></h2></li>

</body>
</html>