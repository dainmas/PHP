<?php

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

$form = [
    'attr' => [
//        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'title' => 'Žaidimas',
    'fields' => [
        'nickname' => [
            'type' => 'text',
            'label' => 'Team name*:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Team name',
                    'class' => 'input-text',
                    'id' => 'first-name'
                ]
            ],
            'validators' => [
                'validate_not_empty',
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Create',
            'class' => 'submit',
//            'disabled'=> ''
        ],
    ],
    'message' => 'Užpildyk formą!',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Žaidimas</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
        <div class="laukas">
            <?php require 'templates/form.tpl.php'; ?>
        </div>
    </body>
</html>
