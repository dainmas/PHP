<?php

$natos = [
    'C',
    'D',
    'E',
    'F',
    'G',
    'A',
    'B'
];
$song = [];

$natu_suma = count($natos);
for ($i = 0; $i < 3; $i++) {
    $root = rand(0, $natu_suma - 1);

    for ($j = 0; $j < 3; $j++, $root += 2) {
        if ($root >= $natu_suma) {
            $root = $root - $natu_suma;
        }
        
        $song[$i][$root] = $natos[$root];
    }
}
var_dump($song);

?>
<html>
    <head>
        <title>Song</title>
        <style>
            .key {
                height: 200px;
                width: 50px;
                border: 1px solid black;
                display: inline-block;
            }
            .key-black {
                height: 200px;
                width: 50px;
                border: 1px solid black;
                display: inline-block;
                background: black;
                color: white;

            }
        </style>
    </head>
    <body>
        <div class="container">
         <?php foreach ($natos as $nata_id => $nata): ?>
                <?php if ($nata === $song[$key]): ?>
                    <?php print $song[$key]; ?>
                    <div class="key-black">
                    </div>
                <?php else: ?>
                    <div class="key">
                        <?php print $nata; ?>
                    <?php endif; ?>          
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>