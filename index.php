<?php

$distance = rand(100, 200);
$consumption = 7.5;
$price_1 = 1.3;

$fuel_total = $distance * $consumption / 100;
$price_trip = $fuel_total * $price_1;
        
$title = 'Kelionės skaičiuoklė';
$text_1 = "Nuvažiuota distancija: $distance";
$text_2 = "Sunaudota $fuel_total l. kuro";
$text_3 = "Kaina: $price_trip pinigų";

?>
<html>
    <head>
        <title><?php print $title; ?></title>  
    </head>
    <body>
        <ul>
            <li><?php print $text_1; ?></li>
            <li><?php print $text_2; ?></li>
            <li><?php print $text_3; ?></li>
        </ul>
    </body>
</html>
