<?php

$days = 365;
$pack_price = 3.5;

$count_ttl = 0;

for ($d = 0; $d < $days; $d++) {
    $savaites_diena = date('N', strtotime("+$d days"));

    if ($savaites_diena < 6) {
        $cigs_mon_fri = rand(3, 4);
        $count_ttl += $cigs_mon_fri;
    } elseif ($savaites_diena == 6) {
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;
    } else {
        $cigs_sun = rand(1, 3);
        $count_ttl += $cigs_sun;
    }

    $number_packs = ceil($count_ttl / 20);
    $price_ttl = $number_packs * 3.5;
    $text_1 = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eur.";
}

?>
<html>
    <head>
        <title>Dumai</title> 
    </head>
    <body>
        <div class="container">
            <h1>Mano dūmų skaičiuoklė</h1>
            <h2><?php print $text_1; ?></h2>
        </div>
    </body>
</html>