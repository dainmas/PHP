<?php

$skola1 = rand(1,100);
$skola2 = rand(101,200);
$skola3 = rand(201,300);
$skola4 = rand(301,400);

?>
<html>
    <head>
        <title>Skola</title>  
    </head>
    <body>
        <div class="container">
            <h1>Skolos skaičiuoklė</h1>
            <h3>Jei pasiskolinai <?php print $skola1; ?> eurų,</h3>
            <h3>Jei skola grąžinima per 2 metus, grąžinti: <?php print $skola3; ?> eurų.</h3>
            <h3>Jei skola grąžinima per 1 metus, grąžinti: <?php print $skola2; ?> eurų.</h3>
        </div>
    </body>

</html>
