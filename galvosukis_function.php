<?php
$pieno_produktai = [
    'Liesa varske',
    'Riebi varske',
    'Rokiskio varske',
    'Namine varske'
];

//function factorial($n) {
//
//    // Base case
//    if ($n == 0) {
//        return 1;
//    }
//    // Recursion
//    $result = ( $n * factorial($n - 1) );
//    return $result;
//}
//
//$text = "The factorial of 4 is: " . factorial(4);

$str = '';

foreach ($pieno_produktai as $key => $value) {

        $str = ($str == '' ? '' : $str . ', ') . $value;

}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>factorial</title>
    </head>
    <body>
        <h1>Factorial</h1>
<!--        <h1><?php print $text; ?></h1>-->
        <div><?php print print $str; ?></div>