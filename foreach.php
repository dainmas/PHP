<?php

$mano_atmintis = ['Penktadienis, Bėgimas, Valgymas, Filmas, Lijo'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach</title>
    </head>
    <body>
        <h1>Kas buvo penktadienį?</h1>
        <h2>Dainoros atmintis</h2>
        <ul>
            <?php foreach ($mano_atmintis as $atninties_id => $atmintis): ?>
                <li><?php print $atmintis; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
