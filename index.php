<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);
if ($grizai_velai && !$grizai_isgeres) {
    $pasekmes = 'Grizai velai';
    $kur_miegosi = 'Miegosi';
} else if ($grizai_velai && $grizai_isgeres) {
    $pasekmes = 'Grizai velai ir isgeres';
    $kur_miegosi = 'Miegosi';
} else if (!$grizai_velai && $grizai_isgeres) {
    $pasekmes = 'Grizai isgeres';
    $kur_miegosi = 'Miegosi';
} else {
    $pasekmes = 'Nieko nepadarei';
    $kur_miegosi = 'Nemiegosi';
}
$kur_miegosi = 'Išvada: ' . $kur_miegosi . ' ant sofos!';
?>
<html>
    <head>
        <title>Buitinė skaičiuoklė</title>  
    </head>
    <body>
        <h1>Buitine skaiciuokle </h1>
        <h2><?php print $pasekmes; ?></h2>
        <h3><?php print $kur_miegosi; ?></h3>
    </body>
</html>
