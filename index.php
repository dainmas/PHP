<?php

function add($x, $y) {
    print $x + $y;
}

$a = add(1, 2);

?>
<html>
    <head>
        <title>function</title>

    </head>
    <body>
        <h1<?php print $a; ?></h1>
    </body>
</html>