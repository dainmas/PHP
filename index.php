<?php
$black_coffee = rand(true, false);

if ($black_coffee == true) {

    $coffee = 'Black-coffee';
} else {

    $coffee = 'Latte';
}
$text = 'Gersiu ' . $coffee;
?>

<html>
    <head>
        <title>Kava</title> 
        <style>
            div{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .black-coffee{
                background-color: brown;
                color: white;
                height: 100vh;

            }
            .latte{
                background-color: yellow;
                color: white;
                height: 100vh;
            }
            p{
                font-size:40px;
            }

        </style>
    </head>
    <body>
        <div class="<?php print $coffee; ?>">
            <h1><?php print $text; ?></h1>
        </div>
    </body>
</html>
