<?php
$time = date('s');
$time_reversed = 59 - $time;
$title = 'Bomba pačios sukurta';
?>
<html>
    <head>
        <title><?php print $title; ?></title>
        <style>
            .bomba{
                width: 1<?php print $time; ?>px;
                height: 1<?php print $time; ?>px;
                border-radius: 100%;
                background-color: black;
                color: white;
                text-align: center;
                margin: auto;  
            }

            .time-0{
                background-color: red;
            }

        </style>
    </head>
    <body>
        <div class=" bomba time-<?php print $time_reversed; ?>">
            <h1><?php print $time_reversed; ?></h1>
        </div>
    </body>
</html>