<?php
header('refresh: 1');
$max_people_num = 30;

//for ($i = 0; $i < $max_people_num; $i++) {

$people_num = rand(1, 40);
$couple = rand(0, $people_num % 2 == 0);
if ($people_num <= $max_people_num) {
    $text = 'Sveiki';
} else {
    $text = 'Atsiprašome, vietų laisvų nėra.';
}
if ($couple) {
    $text_2 = "Iš jų $couple poros(a)";
    var_dump($couple);
}else{
    $text_2 ='Porų nėra';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pratybos kavine for</title>
    </head>
    <body>
        <h1>Ar tilps į kavinę?</h1>
        <h2><?php print $text; ?></h2>
        <h3><?php print $text_2; ?></h3>


    </body>
</html>