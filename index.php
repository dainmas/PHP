
<?php
session_start();

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

var_dump($_SESSION);

if (isset($_SESSION['cookie_email'])) {
    $text = 'Sveiki sugrįžę, ' . $_SESSION['cookie_user_name'];
}else {
    $text = 'Jūs neprisijungęs.';
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
        <h1><?php print $text; ?></h1>
        <div><?php require 'templates/form.tpl.php'; ?></div>
    </body>
</html>


