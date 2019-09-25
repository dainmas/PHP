<?php

$n = rand(11, 12);

function Is_prime($n) {
    for ($x = 2; $x < $n; $x++) {
        if ($n % $x == 0) {
            return false;
        }      
    }
    return true;
}
 
$p = Is_prime($n);

if ($p == 0) {
   $text= "$n nėra pirminis skaičius";
} else {
   $text = "$n yra pirminis skaičius";
}

?>
<html>
    <head>
        <title>function</title>
    </head>
    <body>
        <h1><?php print $text; ?></h1>
    </body>
</html>