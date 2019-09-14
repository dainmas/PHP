<?php
$date = date('s');
if ($date % 2 == 0) {
    $output = 'even';
} else {
    $output = 'odd';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ND boolean ar lyginis</title>
        <style>
            .even{
                width: 400px;
                height: 400px;
                background-color: black;
                color: white;
                position:realative;  
            }
            .odd{
                width: 400px;
                height: 400px;
                border-radius: 100%;
                background-color: yellow;
                color: white;
                position:realative;    
            }
            p{
                position:absolute; 
                font-size: 40px;
                top: 150px;
                left: 180px;
            }
        </style>
    </head>
    <body>
        <div class="<?php print $output; ?>">
            <p><?php print $date; ?></p>
        </div>
    </body>
</html>