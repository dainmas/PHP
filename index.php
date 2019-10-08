<?php
$form = [
    'attr' => [
        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'title' => 'Kalėdų norai',
    'fields' => [
        'first_name' => [
            'type' => 'text',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your name',
                    'class' => 'input-text',
                    'id' => 'first-name'
                ]
            ],
            'label' => 'Vardas:',
//            'error' => 'Vardas per trumpas!'
            'validators' => [
                'validate_not_empty',
            ]
        ],
        'last_name' => [
            'type' => 'text',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your last name',
                    'class' => 'input-text',
                    'id' => 'last-name'
                ]
            ],
            'label' => 'Pavardė:',
//            'error' => 'Paliktas tuščias laukas!'
            'validators' => [
                'validate_not_empty',
            ]
        ],
        'age' => [
            'type' => 'number',
            'value'=> '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your age',
                    'class' => 'input-text',
                    'id' => 'age'
                ]
            ],
            'label' => 'Age:',
//            'error' => 'Paliktas tuščias laukas!'
            'validators' => [
                'validate_not_empty',
                'validate_is_number',
                'validate_is_positive',
                'validate_max_120'
            ]
        ],
        'email' => [
            'type' => 'email',
            'value' => '',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your email',
                    'class' => 'input-text',
                    'id' => 'email'
                ]
            ],
            'label' => 'Email:',
//            'error' => 'Paliktas tuščias laukas!'
            'validators' => [
                'validate_not_empty',
                'validate_is_email'
            ]
        ],
        'wish' => [
            'type' => 'select',
            'value' => 'car',
            'extra' => [
                'attr' => [
                    'class' => 'input-select',
                    'id' => 'wish'
                ]
            ],
            'options' => [
                'car' => 'BMW',
                'tv' => 'Teliko',
                'socks' => 'Kojinių'
            ],
            'label' => 'Kalėdom noriu:',
            'validators' => [
                'validate_not_empty',
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Siųsti'
        ],
        'reset' => [
            'type' => 'reset',
            'value' => 'Išvalyti'
        ]
    ],
    'message' => 'Formos Message!',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

function form_success($filtered_input, $form) {
    var_dump('Success');
}

function form_fail($filtered_input, $form) {
    var_dump('fail');
}

/**
 * Generates HTML attributes
 * @param array $attr
 * @return string
 */
function html_attr($attr) {
    $html_attr_array = [];

    foreach ($attr as $attribute_key => $attribute_value) {
        $html_attr_array[] = strtr('@key="@value"', [
            '@key' => $attribute_key,
            '@value' => $attribute_value
        ]);
    }

    return implode(' ', $html_attr_array);
}

function get_form_input($form) {
    $filter_parameters = [];

    foreach ($form['fields'] as $field_id => $field) {

        $filter_parameters[$field_id] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $filter_parameters);
}

function validate_not_empty($field_input, &$field) {
    if ($field_input === '') {
        $field['error'] = 'Laukas negali būti tuščias!';
    } else {
        return true;
    }
}

function validate_is_number($field_input, &$field) {
    if (!is_numeric($field_input)) {
        $field['error'] = 'Turi būti įrašytas skaičius!';
    } else {
        return true;
    }
}

function validate_is_positive($field_input, &$field) {
    if ($field_input <= 0) {
        $field['error'] = 'Privalo būti teigiamas skaičius!';
    } else {
        return true;
    }
}

function validate_max_120($field_input, &$field) {
    if ($field_input > 120) {
        $field['error'] = 'Skaičius turi būti mažesnis, negu 120!';
    } else {
        return true;
    }
}

function validate_is_string($field_input, &$field) {
    if (!is_string($field_input)) {
        $field['error'] = 'Įrašykite raides!';
    } else {
        return true;
    }
}

function validate_is_email($field_input, &$field) {
    if (!filter_var($field_input, FILTER_VALIDATE_EMAIL)) {
        $field['error'] = 'Neteisingas emailo formatas!';
    } else {
        return true;
    }
}

function validate_form($filtered_input, &$form) {
    $success = true;
    foreach ($form['fields'] as $field_id => &$field) {
        $field_input = $filtered_input[$field_id];
        $field['value'] = $field_input;

        if (isset($field['validators'])) {
            foreach ($field['validators'] as $validator) {
                $is_valid = $validator($field_input, $field);
                if (!$is_valid) {
                    $success = false;
                    break;
                }
            }
        }
    }

    if ($success) {
        if (isset($form['callbacks']['success'])) {
            $form['callbacks']['success']($filtered_input, $form);
        }
    } else {
        if (isset($form['callbacks']['fail'])) {
            $form['callbacks']['fail']($filtered_input, $form);
        }
    }

    return $success;
}

$filtered_input = get_form_input($form);
if ($filtered_input) {
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