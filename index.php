
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bomb img game, and date()</title>
        <style>
            .bomb-img {
                background-image: url(http://pngimg.com/uploads/bomb/bomb_PNG16.png);
                background-size: cover;
                width: 1<?php print date('s'); ?>px;
                height: 1<?php print date('s'); ?>px;
            }
        </style>
    </head>
    <body>
        <div class="bomb-img"></div>
        <div><?php print date('s'); ?></div>
    </body>
</html>



