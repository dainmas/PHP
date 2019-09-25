<?php

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

function get_winning_rows($matrix) {
    $array = [];
    foreach ($matrix as $row_id => $row) {
        $suma = 0;
        foreach ($row as $column_id =>$column) {
            var_dump($column);
            $suma += $column;
        }
        if ($suma == 3 || $suma == 0) {
            $array[] = $row_id;
            var_dump($array);
        }
    }

    return $array;
}

$slot_machine = slot_run(3);
var_dump($slot_machine);
$winners = get_winning_rows($slot_machine);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach</title>
        <style>
            * {
                box-sizing: border-box;
            }

            .row {


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
        <?php foreach ($slot_machine as $row) : ?>
            <div class="row"> 
                <?php foreach ($row as $column) : ?>
                    <?php if ($column == 1): ?>
                        <div class="<?php print 'orange' ?>"></div>
                    <?php else: ?>
                        <div class="<?php print 'blue' ?>"></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div> 
        <?php endforeach; ?>
        <?php foreach ($winners as $winner) : ?>
            <h2><?php print $winner; ?></h2>
        <?php endforeach; ?>
    </div>
</body>
</html>
