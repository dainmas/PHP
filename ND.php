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

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach</title>
    </head>
    <body>
        <h1>Ką moteris turi rankinuke?</h1>
        <ul>
            <?php foreach ($rankinukas as $key => $value): ?>
                <li><?php print "{$value['name']} užima {$value['size']} cm3"; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>