<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';

$form = [
    'attr' => [
        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'title' => 'Registracijos forma',
    'fields' => [
        'full_name' => [
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
        'email' => [
            'type' => 'text',
            'value' => '',
            'label' => 'Email*:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter email',
                    'class' => 'input-text',
                    'id' => 'last-name'
                ]
            ],
//            'error' => 'Paliktas tuÅ¡Ä?ias laukas!'
            'validators' => [
                'validate_not_empty',
                'validate_email',
                'validate_email_unique'
            ]
        ],
        'password' => [
            'type' => 'number',
            'label' => 'Password*:',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your password',
                    'class' => 'input-text',
                    'id' => 'age'
                ]
            ],
//            'error' => 'Paliktas tuš?ias laukas!'
            'validators' => [
                'validate_not_empty',
                'validate_password', //8 ženklai
                'validate_is_email'
            ]
        ],
        'password_repeat' => [
            'type' => 'email',
            'label' => 'Repeat_password*:',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Repeat your password',
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
    ],
    'buttons' => [
        'register' => [
            'type' => 'submit',
            'value' => 'Registruokis'
        ],
//        'reset' => [
//            'type' => 'reset',
//            'value' => 'Išvalyti'
//        ]
    ],
    'message' => 'Užpildyk form?!',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

function form_success($filtered_input, &$form) {
    $form['message'] = 'Success!';
    
    $users_array = file_to_array('data/users.txt'); 
  
    $filtered_input['users'] = [];

    $users_array[] = $filtered_input; 

    array_to_file($users_array, 'data/users.txt'); 
  
}

function form_fail($filtered_input, &$form) {
    $form['message'] = 'Yra klaid?!';
}

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Registration</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
        <div class="formos-fonas">
        
            <div> <?php require 'templates/form.tpl.php'; ?></div>
         
        </div>
    </body>
</html>