<?php

$x = rand(1, 10);

?>
<html>
    <head>
        <title>for</title> 
    </head>
    <body>
        <div class="container">
            <?php for ($i = 1; $i <= $x; $i++): ?>
                <p><?php print "Tai yra $i-tasis ciklas"; ?></p>
            <?php endfor; ?>
        </div>
    </body>
</html>