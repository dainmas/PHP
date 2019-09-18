<?php

$mano_atmintis = [
'Penktadienis', 'Bėgimas', 'Valgymas',
 'Filmas', 'Lijo'
];

$count_mano_atmintis = count($mano_atmintis) - 1;
$rand_flashback_idx = rand(0, $count_mano_atmintis);
$flashback_text = "Flashback $rand_flashback_idx : $mano_atmintis[$rand_flashback_idx]";

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Kas buvo penktadienį?</h1>
        <h2>Dainoros atmintis</h2>
        <h3><?php print $flashback_text; ?></h3>
        <ul>
            <?php foreach ($mano_atmintis as $prisiminimas): ?>
                <li><?php print $prisiminimas; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
