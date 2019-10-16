<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';


$form = [
    'attr' => [
//        'action' => 'join.php',
        'class' => ''
    ],
    'title' => '',
    'message' => '',
    'fields' => [],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Kick the ball',
            'class' => 'submit_kick',
//            'disabled'=> ''
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];


$form['title'] = 'Go for it, ' . $_COOKIE['nickname'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Žaidimas. Join</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body class="bg">
<!--        <div><?php print $form['message']; ?></div>-->
        <div class="laukas">
            <?php require 'templates/form.tpl.php'; ?>
        </div>
        
        
    </body>
</html>
