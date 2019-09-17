<?php

$grikiai = 5000;
$prad_grikiai = $grikiai;
$days = 0;
for ($per_day = rand(200, 500); $grikiai> $per_day; ) {
    $grikiai -= $per_day;
    $per_day = rand(200, 500);      
    if ($grikiai > $per_day) {
        $days ++;          
    } else {
        $next_day = $days + 1;
        var_dump("Diena: $next_day neisgyvensiu, nes liko $grikiai, o suvalgyciau $per_day"); 
    }
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