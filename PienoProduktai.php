<?php
$pieno_produktai = [
    [
        'name' => 'liesa varske',
        'price' => 1,
        'akcija' => 0.9
    ],
    [
        'name' => 'riebi varske',
        'price' => 1.5,
        'akcija' => 1
    ],
    [
        'name' => 'Rokiskio varske',
        'price' => 2,
        'akcija' => 1.5
    ],
    [
        'name' => 'namine varske',
        'price' => 1.5,
        'akcija' => 1
    ]
];

//$nameProduct = $PienoProduktai[0][$_POST[0]]['name'];
//$priceProduct = $PienoProduktai[0][$_POST[0]]['price'];
//$akcijaProduct = $PienoProduktai[0][$_POST[0]]['akcija'];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pieno produktai</title>
        <style>
            body {
                width: 80vp;
                text-align: center;
                background-color: whitesmoke;
            } 
            .container{
                display: inline-block;
                width: 400px;
                height: 400px;
                background-color: yellow;
            }
            .products{
                display: inline-block;
                width: 49%;
                height: 49%;
                background-color: white;
                margin-bottom: 5px;

            }
        </style>
    </head>

    <body>
        <div class="container" >
            <?php foreach ($pieno_produktai as $key => $value): ?>
            <div class="products">
                <div class="name"><?php print $value['name']; ?></div> 
                <div class="price"><?php print $value['price']; ?></div>
                <div class="akcija"><?php print $value['akcija']; ?></div>
            </div>
            <?php enforeach; ?>
        </div>
    </body>
</html>