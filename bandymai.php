<?php
//setcookie('mycookie','cookiedata', time() + 3600, '/');
//setcookie('mycookie1','cookiedata1', time() -1, '/');
//var_dump($_COOKIE);
//$cookie_name = 'cookiename';
//$array=[
//    'email' => 'dainorai@inbox.lt',
//    'vardas' => 'Dainora'
//    
//];
//
//$encoded_array = json_encode($array);
//setcookie($cookie_name, $encoded_array, time() +3600, '/');
//var_dump($_COOKIE);
//$decoded_array = json_decode($_COOKIE['cookiename'], true);
//var_dump($decoded_array);
$id = rand(1, 999999);
$apsilankymai = 0;


if (!empty($_COOKIE)) {
    $apsilankymai = $_COOKIE['apsilankymai'] + 1;
    $id = $_COOKIE['user_id'];

}


setcookie('user_id', $id, strtotime('+ 30d'), '/');
setcookie('apsilankymai', $apsilankymai, strtotime('+ 30d'), '/');
var_dump($_COOKIE);
?>

<html></html>
<head>
    <meta charset="UTF-8">
    <title>Form Security</title>
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>
    <?php print "User ID: $id"; ?>
    <?php print "Apsilankymai:  $apsilankymai"; ?>
</body>
</html>