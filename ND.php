<?php

header('refresh: 1');
$zodziai = ['Petras', 'laukė', 'ryte', 'prie', 'Maksimos'];
$rasinys = [];

for ($index = 0; $index < rand(0, count($zodziai) - 1); $index++) {
    $rasinys[] = $zodziai[rand(0, count($zodziai) - 1)];
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach</title>
    </head>
    <body>
        <h1>Lietuvių egzaminas</h1>
        <p>
            <?php foreach ($rasinys as $key => $value): ?>
                <?php print $value; ?>
            <?php endforeach; ?>
        </p>
    </body>
</html>