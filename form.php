<?php

var_dump($_POST);
$value = 0;

if (isset($_POST['enter'])) {
    $value = $_POST['enter'];
    $value ++;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
        <style>
            .banana{
                background-image: url('https://i5.walmartimages.com/asr/209bb8a0-30ab-46be-b38d-58c2feb93e4a_1.1a15fb5bcbecbadd4a45822a11bf6257.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF');
                background-size:cover;
                width: 150px;
                height: 150px;
                display:inline-block;
                margin:5px;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <span>Give it to me!</span>
            <input type="submit" name="enter" value="<?php print $value; ?>"/>
            <span>*clic*</span>
        </form>
        <?php for($i =0; $i < $value; $i++): ?>
            <div class="banana"></div>
        <?php endfor; ?>
    </body>
</html>