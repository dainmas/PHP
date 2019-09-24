<?php
$drinks = [
    [
        'name' => 'Buratino limonadas',
        'price_stock' => 3.6,
        'discount' => 0,
        'img' => 'https://fsmedia.imgix.net/43/08/cc/ef/67f0/499f/a6dc/d4fcf129c0c6.jpeg?rect=0%2C879%2C5592%2C2798&auto=format%2Ccompress&dpr=2&w=650'
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
        'img' => 'https://thesweetestoccasion.com/wp-content/uploads/2018/08/mermaid-water-fish-bowl-drinks-18.jpg'
    ],
    [
        'name' => 'Grafų gėrimas',
        'price_stock' => 5.79,
        'discount' => 5,
        'img' => 'https://suebeehomemaker.com/wp-content/uploads/2019/05/Strawberry-Lemonade-Vodka-Slushies-8.jpg'
    ],
];


foreach($drinks as $drink_id => $drink){
//$drinks['$drink_id']['price_retail'] = 0;
 $drinks[$drink_id]['price_retail'] = $drink['price_stock'] - ($drink['price_stock'] * $drink['discount'] / 100) ;
}
var_dump($drinks);
