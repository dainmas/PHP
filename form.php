<?php 

var_dump($_POST);

function square($x){
    return $x ** 2;
}

if (isset($_POST['enter'])){
    $ats = square($_POST['skaicius']);
//    print $ats;
} 

$text = "Atsakymas: $ats";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
    </head>
    <body>
        <form method="POST">
            <span>Ką pakelti kvadratu:</span> 
            <input type="number" name="skaicius" required/>
            <input type="submit" name="enter"/>
            <h1><?php print $text; ?></h1>
        </form>
    </body>
</html>