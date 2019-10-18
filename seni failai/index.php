<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
$form = [
    'attr' => [
        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'title' => 'Kal?d? norai',
    'fields' => [
        'first_name' => [
            'type' => 'text',
            'value' => '',
            'label' => 'Vardas*:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your name',
                    'class' => 'input-text',
                    'id' => 'first-name'
                ]
            ],
//            'error' => 'Vardas per trumpas!'
            'validators' => [
                'validate_not_empty',
            ]
        ],
        'last_name' => [
            'type' => 'text',
            'value' => '',
            'label' => 'Pavard?:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your last name',
                    'class' => 'input-text',
                    'id' => 'last-name'
                ]
            ],
//            'error' => 'Paliktas tuÅ¡Ä?ias laukas!'
            'validators' => [
                'validate_not_empty',
            ]
        ],
        'age' => [
            'type' => 'number',
            'label' => 'Age*:',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your age',
                    'class' => 'input-text',
                    'id' => 'age'
                ]
            ],
//            'error' => 'Paliktas tuš?ias laukas!'
            'validators' => [
                'validate_not_empty',
                'validate_is_number',
                'validate_is_positive',
                'validate_max_120'
            ]
        ],
        'email' => [
            'type' => 'email',
            'label' => 'Email*:',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your email',
                    'class' => 'input-text',
                    'id' => 'email'
                ]
            ],
//            'error' => 'Paliktas tuÅ¡Ä?ias laukas!'
            'validators' => [
                'validate_not_empty',
                'validate_is_email'
            ]
        ],
        'wish' => [
            'type' => 'select',
            'value' => 'car', //Ä?ia Ä¯raÅ¡ome 'option' indeksÄ…, by default bus tas selected
            'label' => 'Kal?dom noriu:',
            'extra' => [
                'attr' => [
                    'class' => 'input-select',
                    'id' => 'wish'
                ]
            ],
            'options' => [
                'car' => 'BMW',
                'tv' => 'Teliko',
                'socks' => 'Kojini?'
            ],
            'validators' => [
                'validate_not_empty',
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'SiÅ³sti'
        ],
        'reset' => [
            'type' => 'reset',
            'value' => 'Išvalyti'
        ]
    ],
    'message' => 'Užpildyk form?!',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

function form_success($filtered_input, &$form) {
    $form['message'] = 'Success!';
}

function form_fail($filtered_input, &$form) {
    $form['message'] = 'Yra klaidÅ³!';
}


$filtered_input = get_filtered_input($form);

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