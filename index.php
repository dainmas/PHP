<?php

$random_drink = rand(0, 2);

if ($random_drink === 0) {
    $drink = 'Black-coffee';
} elseif ($random_drink === 1) {
    $drink = 'Latte';
} else {
    $drink = 'Tea';
}
$text = 'Gersiu ' . $drink;

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
                color: brown;
                height: 100vh;
            }

            .tea{
                background-color: green;
                color: white;
                height: 100vh;  
            }

            p{
                font-size: 60px;
                font-weight: bold;
            }

        </style>
    </head>
    <body>
        <div class="<?php print $drink; ?>">
            <p><?php print $text; ?></p>
        </div>
    </body>
</html>
