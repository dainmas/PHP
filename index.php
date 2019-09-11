
<html>
    <head>
        <meta charset="UTF-8">
        <title>bomba</title>
        <style>

            .bomba {
                background-image: url('https://storage.needpix.com/rsynced_images/atomic-bomb-2026117_1280.png');
                background-size: contain;
                width: 1<?php print date('s'); ?>px;                  
                height: 1<?php print date('s'); ?>px;
                background-position: center;
                background-repeat: no-repeat;
            }

            .time-00 {
                background-image: url('https://image.shutterstock.com/image-illustration/nuclear-bomb-explosion-mushroom-cloud-260nw-1083546056.jpg');   
            }

        </style>
    </head>
    <body>
        <div class="bomba time-<?php print date('s'); ?>"></div>

        <h1><?php print date('s'); ?> </h1>
    </body>
</html>