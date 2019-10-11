<?php


//setcookie('mycookie','cookiedata', time() + 3600, '/');

//setcookie('mycookie1','cookiedata1', time() -1, '/');

var_dump($_COOKIE);
$cookie_name = 'cookiename';
$array=[
    'email' => 'dainorai@inbox.lt',
    'vardas' => 'Dainora'
    
];

$encoded_array = json_encode($array);
setcookie($cookie_name, $encoded_array, time() +3600, '/');
var_dump($_COOKIE);
$decoded_array = json_decode($_COOKIE['cookiename'], true);
var_dump($decoded_array);
