<?php

$_SESSION = [];

setcookie('PHPSESSID', '', time() -1, '/');
//istrinam kukius serveryje
session_destroy();

header('Location: create.php');