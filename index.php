<?php

$size = rand(3, 5);

/**
 * 
 * @param type $size
 * @return type
 */
function slot_run($size) {
    $array = [];

    for ($i = 0; $i < $size; $i++) {
        for ($a = 0; $a < $size; $a++) {
            $array[$i][$a] = rand(0, 1);
        }
    }

    return $array;
}

$matrix = slot_run($size);

$matrix_display = [];
foreach ($matrix as $row_idx => $row) {
    $col = 0;
    $col_1 = 0;

    $matrix_display[$row_idx] = [
        'class' => ' ',
        'columns' => []
    ];

    foreach ($row as $column) {

        if ($column == 0) {
            $matrix_display[$row_idx]['columns'][] = [
                'class' => 'blue',
            ];
            $col_1++;
        } else {
            $matrix_display[$row_idx]['columns'][] = [
                'class' => 'orange',
            ];
            $col++;
        }

        if ($col == $size || $col_1 == $size) {
            $matrix_display[$row_idx]['class'] = 'winning';
        }
    }
}

$slot_machine = slot_run(3);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach</title>
        <style>
            * {
                box-sizing: border-box;
            }

            .row{

            }

            .winning{
                width: 550px;
                border: 2px solid red;

            }

            .column{
                border: 1px solid grey;
                height: 50px; 

            }

            .orange{
                width:100px;
                height: 100px;
                border:1px solid grey;
                display:inline-block;
                background-color: orange;
            }

            .blue{
                width:100px;
                height: 100px;
                border:1px solid grey;
                display:inline-block;
                background-color: blue;
            }

        </style>
    </style>
</head>
<body>
    <h1>slot run</h1>
    <div class="container">
        <?php foreach ($matrix_display as $row): ?>
            <div class="row <?php print $row['class']; ?>">
                <?php foreach ($row['columns'] as $column): ?>
                    <div class="column <?php print $column['class']; ?>"></div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
