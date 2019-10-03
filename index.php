<?php
$form = [
    'form_title' => 'Užpildyk formą',
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form'
    ],
    'fields' => [
        'first_name' => [
            'attr' => [
                'type' => 'text',
            ],
            'extra' => [
                'attr' => [
                    'class' => 'my-form',
                    'id' => 'login-form',
                    'placeholder' => 'Enter your Name'
                ]
            ],
            'label' => 'Vardas:',
            'error' => 'Užpildykite lauką'
        ],
        'last_name' => [
            'attr' => [
                'type' => 'text',
            ],
            'extra' => [
                'attr' => [
                    'class' => 'my-form',
                    'id' => 'login-form',
                    'placeholder' => 'Enter your Last Name'
                ]
            ],
            'label' => 'Pavardė:',
            'error' => 'Laukas tuščias'
        ],
        'amzius' => [
            'attr' => [
                'type' => 'number'
            ],
            'extra' => [
                'attr' => [
                    'class' => 'my-form',
                    'id' => 'login-form',
                    'placeholder' => 'Enter your Age'
                ]
            ],
            'label' => 'Amžius:',
            'error' => 'Užpildykite teisingai lauką'
        ],
        'selector' => [
            'attr' => [
                'type' => 'select',
                'value' => 'dainora'
            ],
            'extra' => [
                'attr' => [
                    'class' => 'my-form',
                    'id' => 'login-form',
                ],
            ],
            'options' => [
                'dainora' => 'Dainora',
                'aurimas' => 'Aurimas',
                'milda' => 'Milda'
            ],
            'label' => 'Vardai:'
        ]
            
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'name' => 'enter',
            'value' => 'Submit',
        ],
        'reset' => [
            'type' => 'submit',
            'name' => 'reset',
            'value' => 'Reset',
        ]
    ],
    'message' => 'Message!'
];

/**
 * Generates HTML attributes
 * @param array $attr
 * @return string
 */
function html_attr($attr) {
    $html_attr_array = [];
    
    foreach ($attr as $attribute_key => $attribute_value) {
        $html_attr_array[] = strtr('@key = "@value"', [
            '@key' => $attribute_key,
            '@value' => $attribute_value
        ]);
        //strtr suformuoja kokį stringą nori matyti ,pvz.strtr('#key turi #value $, $masyvas')
        //@ arba # raso, kad atskirtu, nes tai ne musu $key foreache
        //vietoj strtr būtų taip:
//            'action = "index.php"',
//            'method = "POST"',
//            'class = "my-form"',
//            'id = login-form"'
    }
    return implode(" ", $html_attr_array);
}

var_dump($form);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form templates Require</title>
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>
