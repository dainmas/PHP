<?php

$x = 1;
$y = 2;

function sum($x, $y) {
    return $x + $y;
}

$sum = "$x ir $y suma: " . sum($x, $y);

?>
<html>
    <head>
        <title>function</title>

    </head>
    <body>
        <h1><?php print $sum; ?></h1>
    </body>
</html>