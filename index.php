<?php
$sunny = rand(0, 1);
$rainny = rand(0, 1);

if ($sunny && !$rainny) {
    $class = 'sunny';
    $oras = 'Saulėta';
} elseif (!$sunny && $rainny) {
    $class = 'rainny';
    $oras = 'Debesuota su lietum';
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
                width: 140px;
                height: 140px;
                position:relative;
            }
            .debesuota{
                background-image: url('https://cdn4.iconfinder.com/data/icons/programming-line-style/32/Cloud-512.png');
                background-size: cover;
                width: 140px;
                height: 140px;
                position:relative;
            }

            .rainny{
                background-image: url('https://i.dlpng.com/static/png/501468_preview.png');
                background-size: cover;
                width: 140px;
                height: 140px;
                position:relative; 
            }  


            .text{
                display:inline-block;
                position:absolute;
                left: 150px;
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