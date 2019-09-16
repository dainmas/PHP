<?php
$x = rand(1, 10);
?>
<html>
    <head>
        <title>for</title> 
    </head>
    <body>
        <div class="container">
            <?php for ($x = 1; $x <= 10; $x++): ?>
                <p><?php print $x; ?></p>
            <?php endfor; ?>
        </div>
    </body>
</html>