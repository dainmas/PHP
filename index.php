<?php

$days = 365;
$pack_price = 3.5;

$count_ttl = 0;
$count_mon_thu_ttl = 0;
$time_per_cig = 5;

for ($d = 0; $d < $days; $d++) {
    $savaites_diena = date('N', strtotime("+$d days"));
    if ($savaites_diena <= 4) {
        $cigs_mon_thu = rand(3, 4);
        $count_ttl += $cigs_mon_thu;
        $count_mon_thu_ttl += $cigs_mon_thu;
    } elseif ($savaites_diena == 5) {
        $cigs_fri = rand(3, 4);
        $count_ttl += $cigs_fri;
    } elseif ($savaites_diena == 6) {
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;
    } else {
        $cigs_sun = rand(1, 3);
        $count_ttl += $cigs_sun;
    }
}
for ($c = 0; $c < $count_ttl; $c++) {
    if ($c % 20 == 0) {
        $class = 'img-border';
    } else {
        $class = 'img';
    }
}
$number_packs = ceil($count_ttl / 20);
$number_packs_mon_thu = ceil($count_mon_thu_ttl / 20);
$price_ttl = $number_packs * 3.5;
$price_mon_thu = $number_packs_mon_thu * 3.5;
$time_total = round($count_ttl * $time_per_cig / 60);

$text_1 = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eur.";
$text_2 = "Nerūkydamas darbo dienomis, sutaupyčiau $price_mon_thu eur.";
$text_3 = "Viso traukdamas prastovėsiu $time_total valandų.";

?>
<html>
    <head>
        <title>Dumai</title>
        <style>
            .img{
                background-image: url(https://previews.123rf.com/images/kuzma/kuzma0603/kuzma060300104/339315-one-cigarette.jpg);
                background-size: cover;
                width: 40px;
                height: 80px;
                display: inline-block;

            }

            .img-border{
                border: 2px solid red;
                width: 900px;
                height: 85px;
                margin:10px 0px;;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Mano dūmų skaičiuoklė</h1>
            <h2><?php print $text_1; ?></h2>
            <h3><?php print $text_2; ?></h3>
            <h3><?php print $text_3; ?></h3>
        </div>
        <div class="container-img">
            <?php for ($c = 0; $c < $count_ttl; $c++) : ?>
                <?php if ($c % 20 == 0) : ?>
                    <div class="img-border">
                        <div class="img"></div>
                    <?php else: ?>
                        <div class="img"></div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </body>
</html>