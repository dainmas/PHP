<?php

$drinks = [
    [
        'name' => 'Buratino limonadas',
        'price_stock' => 3.6,
        'discount' => 0,
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwH0I51INpAIdR8Ur_y4VtLL5y8Njsa4GBJXRtEjBmdCoa9b34'
    ],
    [
        'name' => 'Rugilės gira',
        'price_stock' => 5.79,
        'discount' => 6,
        'img' => 'http://intermarket.lt/image/cache/catalog/G%C4%97rimai/Vaisvandeniai,%20gira/GUBERNIJA-1,5L-Gira-Rugile-Kwas-chlebowy-litewski%20copy-1000x1000.jpg'
    ],
    [
        'name' => 'Čipolino gėrimas',
        'price_stock' => 10.15,
        'discount' => 7,
        'img' => 'https://cdn.shopify.com/s/files/1/0752/2329/products/7up_2048x.JPG?v=1424665568'
    ],
    [
        'name' => 'Grafų gėrimas',
        'price_stock' => 5.79,
        'discount' => 5,
        'img' => 'https://suebeehomemaker.com/wp-content/uploads/2019/05/Strawberry-Lemonade-Vodka-Slushies-8.jpg'
    ],
];


foreach ($drinks as $drink_id => $drink) {
//$drinks['$drink_id']['price_retail'] = 0;
    $drinks[$drink_id]['price_retail'] = $drink['price_stock'] - ($drink['price_stock'] * $drink['discount'] / 100);
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach</title>
        <style>
            .container {

            }

            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 20%;
                flex-wrap: wrap;
                border:1px solid black;
                justify-content:space-around;
                display:inline-block;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                transform: rotateY(180deg);
            }

            .container {
                padding: 2px 16px;
            }

            h4,
            .price_stock,
            .price_retail{
                background-color: white;
                display: inline-block;
                margin:10px 0;
            }

            .price_stock{
                background-color: grey;
                text-align: left;

            }

            .price_retail{
                background-color: red;
                color:white;
                text-align: right;
                float: right;
            }

            p{
                text-align: center;
            }

        </style>
    </head>
    <body>
        <h1>Drink Catalogue</h1>
        <div class="container">


            <?php foreach ($drinks as $drink_id => $drink) : ?>
                <div class="card">
                    <?php if ($drink['discount'] !== 0): ?>
                        <h4 class="price_stock"><b><?php print $drink['price_stock'] . 'eur'; ?></b></h4>
                        <h4 class="price_retail"><b><?php print round($drinks[$drink_id]['price_retail'], 2) . 'eur'; ?></b></h4>

                    <?php else: ?>
                        <h4><b><?php print round($drinks[$drink_id]['price_retail'], 2) . 'eur'; ?></b></h4> 

                    <?php endif; ?>
                    <div class="drink-image" style="width: 100%; height: 300px; background-image:url( <?php print $drink['img']; ?>);  background-image: cover; background-position: center;"></div>
                    <div class="container">
                        <p><?php print $drinks[$drink_id]['name']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>
