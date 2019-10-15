
<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';


$form = [
    'attr' => [
//        'action' => 'join.php',
        'class' => 'bg-black'
    ],
    'title' => 'Žaidimas',
    'fields' => [
        'team' => [
            'type' => 'select',
            'label' => 'Enter new number name*:',
            'options' => get_options(),
            'value' => '', //selected flag
            'extra' => [
                'attr' => [
//                    'placeholder' => 'Team name',
                    'class' => 'input-text',
                    'id' => 'team'
                ]
            ],
            'validators' => [
                'validate_not_empty',
            ]
        ],
        'player' => [
            'type' => 'text',
            'label' => 'Player name*:',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Player name',
                    'class' => 'input-text',
                ]
            ],
            'validators' => [
                'validate_not_empty',
                'validate_player'
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Join',
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

function form_success($filtered_input, &$form) { // vykdoma, jeigu forma uzpildyta teisingai
    print 'veikia';
    $teams = file_to_array('data/teams.txt'); // users_array - kiekvieno submit metu uzkrauna esama teams.txt reiksme, ir padaro masyvu

    foreach ($teams as &$team) {
        if ($team['team'] === $filtered_input['team']) {
            $team['players'][] = $filtered_input['player'];
        }
        unset($team);
    }

    array_to_file($teams, 'data/teams.txt'); // User_array konvertuoja i .txt faila JSON formatu
}

function get_options() {
    $teams = file_to_array('data/teams.txt');

    if (!empty($teams)) {
        foreach ($teams as $team) {
            $team_names[$team['team']] = $team['team'];
        }
        return $team_names;
    }
}

function form_fail($filtered_input, &$form) { //vykdoma, jei forma užpildyta neteisingai
    $form['message'] = 'Yra klaidų!';
}

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Žaidimas. Join</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
        <div class="laukas">
            <?php require 'templates/form.tpl.php'; ?>
        </div>
    </body>
</html>
