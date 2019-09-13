<?php
$sunny = rand(true, false);

if ($sunny == true) {
    $class = 'sunny';
    $oras = 'Saulėta';
} else {
    $class = 'debesuota';
    $oras = 'Debesuota';
}
?>
<html>
    <head>
        <title>Oras</title> 
        <style>
            .sunny{
                background-image: url('https://images.vexels.com/media/users/3/145134/isolated/preview/46b65a02ff99e7bb4e84d4d3d627a729-sun-sharp-beams-icon-by-vexels.png'); 
                background-size: cover;
                width: 100px;
                height: 100px;
               position:relative;
            }
            .debesuota{
                background-image: url('https://cdn4.iconfinder.com/data/icons/programming-line-style/32/Cloud-512.png');
                background-size: cover;
                width: 100px;
                height: 100px;
                position:relative;
            }
            .text{
                display:inline-block;
                position:absolute;
                left: 120px;
                top: 50px; 
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="<?php print $class; ?>"></div>
            <div class="text"><?php print $oras; ?></div>
        </div>
    </body>
</html>
