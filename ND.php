<?php

$mano_atmintis = ['Penktadienis', 'Bėgimas', 'Valgymas', 'Filmas', 'Lijo'];
$draugo_atmintis = ['Penktadienis', 'Baigėsi darbo savaitė', 'Bėgimas', 'Valgymas', 'Filmas', 'Spintelės konstravimas'];
$bendra_atmintis = array_intersect($mano_atmintis, $draugo_atmintis);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach</title>
    </head>
    <body>
        <h1>Kas buvo penktadienį?</h1>
        <h2>Mano atmintis</h2>

        <ul>
            <?php foreach ($mano_atmintis as $atminties_id => $prisiminimai): ?>
                <li><?php print $prisiminimai; ?></li>
            <?php endforeach; ?>
        </ul>
        <h2>Draugo atmintis</h2>
        <ul>
            <?php foreach ($draugo_atmintis as $atminties_id => $prisiminimai): ?>
                <li><?php print $prisiminimai; ?></li>
            <?php endforeach; ?>
        </ul>
        <h3>Sutapę prisiminimai:</h3> 
        <ul>
            <?php foreach ($bendra_atmintis as $atminties_id => $prisiminimai): ?>
                <li><?php print $prisiminimai; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>