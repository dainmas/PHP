<?php

$distance = rand(100, 200);
$consumption = 7.5;
$price_1 = 1.3;
$my_money = 100;

$fuel_total = round(($distance * $consumption / 100), 2);
$price_trip = round(($fuel_total * $price_1), 2);
        
$title = 'Kelionės skaičiuoklė';
$text_1 = "Nuvažiuota distancija: $distance";
$text_2 = "Sunaudota $fuel_total l. kuro";
$text_3 = "Kaina: $price_trip pinigų";

if($my_money >= $price_trip){
    $perku ='įperkama';
}else{
    $perku ='neįperkama';
}
$text_4 = "Išvada: Kelionė $perku ";

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
        <hr>
        <p><?php print $text_4; ?></p>
    </body>
</html>