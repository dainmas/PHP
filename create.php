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
                ]
            ],
            'players' => [],
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



//$teams = [
//    [
//      'team_name'  => 'kazkokie',
//        'players' => [
//            [
//                'nickname' => 'killer',
//                'score' => 10
//            ],
//            [
//                'nickname' => 'thriller',
//                'score' => 10
//            ]
//        ]
//    ],
//    [
//      'team_name'  => 'nekazkokie',
//        'players' => [
//            [
//                'nickname' => 'winner',
//                'score' => 10
//            ],
//            [
//                'nickname' => 'newinner',
//                'score' => 10
//            ]
//        ]
//    ],   
//];
function form_success($filtered_input, &$form) {
	$form['message'] = 'success!';
    $db_data = file_to_array('data/teams.txt');
	
    if (!empty($db_data)) {
        $teams = $db_data;
    }
	
    $teams[] = $filtered_input;
    array_to_file($teams, 'data/teams.txt');
}
if (file_exists('data/teams.txt')) {
	$db = file_to_array('data/teams.txt');
}
$filtered_input = get_filtered_input($form);
if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}
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
