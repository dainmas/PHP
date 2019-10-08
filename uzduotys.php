<?php
$array = [
    'participants' => [
        [
            'name' => 'Juozas',
            'surname' => 'Juozaitis',
            'age' => 86
        ],
        [
            'name' => 'Dalia',
            'surname' => 'Zemkalnyte',
            'age' => 28
        ],
        [
            'name' => 'Mantas',
            'surname' => 'Britkus',
            'age' => 41
        ],
    ]
];

$new_array = [];
foreach ($array['participants'] as $key => $value) {
        $new_array[] = $value['age'];
    }

var_dump($new_array);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

    </body>
</html>


