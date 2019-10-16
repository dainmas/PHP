
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

function validate_player($field_input, &$field) {
    //komandų masyva is duonbazes gaunam:
    $teams = file_to_array('data/teams.txt');


    foreach ($teams as $team) {
        foreach ($team['players'] as $player) {

            if (strtoupper($player['nickname']) == strtoupper($field_input)) {
                $field['error'] = 'Toks žaidėjas jau egzistuoja';
                return false;
            }
        }
    }
    return true;
}

function form_success($filtered_input, &$form) { // vykdoma, jeigu forma uzpildyta teisingai
  
    $teams = file_to_array('data/teams.txt'); // users_array - kiekvieno submit metu uzkrauna esama teams.txt reiksme, ir padaro masyvu

    foreach ($teams as &$team) {
        if ($team['team'] === $filtered_input['team']) {
            $team['players'][] = [
                'nickname' => $filtered_input['player'],
                'score' => '0'
            ];
        }
    }

    array_to_file($teams, 'data/teams.txt'); // User_array konvertuoja i .txt faila JSON formatu
    //nustato cookie:
//    var_dump($filtered_input);
    setcookie('cookie_team', $filtered_input['team'], time() + (86400 * 30), '/');
    setcookie('cookie_nickname', $filtered_input['player'], time() + (86400 * 30), '/');
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

//var_dump($_POST);
function form_fail($filtered_input, &$form) { //vykdoma, jei forma užpildyta neteisingai
    $form['message'] = 'Yra klaidų!';
}

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
}

if(isset($_COOKIE['cookie_nickname'])){
     $text = 'Labas, žaidėjau ' . $_COOKIE['cookie_nickname'] . ', jau esi komandoje ' . $_COOKIE['cookie_team'] . '!';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Žaidimas. Join</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
<?php if (isset($_COOKIE['cookie_nickname'])): ?>
        <h1><?php print $text; ?></h1>
        <?php else: ?>
            <div class="laukas">
            <?php require 'templates/form.tpl.php'; ?>
            </div>
            <?php endif; ?>
    </body>
</html>
