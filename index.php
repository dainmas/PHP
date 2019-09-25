<?php

$x = rand(0, 50);

function is_prime($x) {
    if ($x % 2 == 0 || $x % 3 == 0 || $x % 4 == 0 || $x % 5 == 0) {
        print "$x nėra pirminis skaičius";
    } else {
        print "$x yra pirminis skaičius";
    }
}
    $is_prime = is_prime($x);
    
    ?>
    <html>
        <head>
            <title>function</title>

        </head>
        <body>
            <h1><?php print $is_prime; ?></h1>
    </body>
</html>