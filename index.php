
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rand() + CSS</title>
    </head>
    <body style="background-color: rgb(<?php print rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255); ?>)">
        <h1 style="font-size: <?php print rand(10, 30) . 'px'; ?>">
            Aš keičiu savo dydį!
        </h1>
        <p style="color: rgb(<?php print rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255); ?>)">
            Aš keičiu savo spalvą!
        </p>
    </body>
</html>