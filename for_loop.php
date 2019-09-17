<?php

$grikiai = 5000;
$prad_grikiai = $grikiai;
$days = 0;
for (; $grikiai>0 ; ) {
    $per_day = rand(200, 500);
    $grikiai -= $per_day;
    $days ++;
}

$data = date('Y-m-d', strtotime('+' . $days . 'days'));
$text_1 = "Rasta grikių: $prad_grikiai g.";
$text_2 = "Išgyvensiu dar $days dienas, iki $data.";
?>

<html>
    <head>
        <title>for ciklo grikiai</title>
    </head>
    <body>
        <div class="container">
            <h1>Kiek dienų galėsi valgyti grikius?</h1>
            <h2><?php print $text_1; ?></h2>
            <h3><?php print $text_2; ?></h3>
        </div>
    </body>
</html>