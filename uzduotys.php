<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
$form = [
    'attr' => [
//        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'title' => 'Užduotis',
    'fields' => [
        'x' => [
            'type' => 'number',
            'label' => 'X*:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter number',
                    'class' => 'input-text',
                    'id' => 'first-name'
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_is_number'
            ]
        ],
        'y' => [
            'type' => 'number',
            'label' => 'Y*:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter number',
                    'class' => 'input-text',
                    'id' => 'last-name'
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_is_number'
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Siųsti'
        ]
    ],
    'message' => 'Užpildyk formą!',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

function form_success($filtered_input, &$form) {
    $sum = $filtered_input['x'] + $filtered_input['y'];
    var_dump($sum);
    $form['message'] = "Suma: $sum";
}

function form_fail($filtered_input, &$form) {
    $form['message'] = 'Yra klaidų!';
}

$filtered_input = get_form_input($form);

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Security</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
<?php require 'templates/form.tpl.php'; ?>
    </body>
</html>