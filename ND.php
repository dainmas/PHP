<?php

header('refresh: 1');
$daiktai = [
    [
        'name' => 'Kremas',
        'size' => 8,
    ],
    [
        'name' => 'Lūpdažis',
        'size' => 5,
    ],
    [
        'name' => 'Bananas',
        'size' => 12,
    ],
    [
        'name' => 'Telefonas',
        'size' => 10,
    ]
];
$rankinukas = [];

for ($index = 0; $index < rand(0, count($daiktai) - 1); $index++) {
    $rankinukas[] = $daiktai[rand(0, count($daiktai) - 1)];
}

$kiekis= count($rankinukas);
if($kiekis === 0){
    $kiekis = 1;
}

$probability = round(100 / $kiekis);
$text_1 = "Tikimybė rasti: $probability %";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach</title>
    </head>
    <body>
        <h1>Moters rankinuko mistika</h1>
        <ul>
            <?php foreach ($rankinukas as $key => $value): ?>
                <li><?php print "{$value['name']} užima {$value['size']} cm3."; ?></li>
            <?php endforeach; ?>
        </ul>
        <h2><?php print $text_1; ?></h2>
    </body>
</html>