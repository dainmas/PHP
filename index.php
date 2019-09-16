<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$pavyko = rand(0, 1);
$text = 'Katašunių išeiga';
$katasuniai = $kates + $pavyko;
?>
<html>
    <head>
        <title>for kates</title> 
    </head>
    <body>
        <div class="container">
            <h1><?php print $text; ?></h1>
            <h2><?php print "Dalyvavo $kates katės ir $sunys šunys"; ?></h2>
            <?php for ($kates = 1; $kates <= $sunys; $kates++): ?>
                <?php if ($kates == $pavyko) : ?>
                    <h3><?php print "Katašunių išeiga: $katasuniai";
            break; ?></h3>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </body>
</html>