
<?php
session_start();

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

var_dump($_SESSION);

if (isset($_SESSION['cookie_email'])) {
    $h1_text = 'Labas, ' . $_SESSION['cookie_user_name'];
}else {
    $h1_text = 'Jūs neprisijungęs.';
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login form</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body class="registracion-bg">
<?php require 'navigation.php'; ?>
        <h1><?php print $h1_text; ?></h1>
<!--        <div><?php require 'templates/form.tpl.php'; ?></div>-->
    </body>
</html>


