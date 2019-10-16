<?php
require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';


$form = [
//    'fields' => [],
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
//        'fail' => 'form_fail'
    ]
];

function form_success() { // vykdoma, jeigu forma uzpildyta teisingai
    $players = file_to_array('data/teams.txt'); // users_array - kiekvieno submit metu uzkrauna esama teams.txt reiksme, ir padaro masyvu

    if(isset($_POST['submit'])) {
        form_success();

        foreach ($teams as &$team) {
            if ($team['team'] === $_COOKIE['cookie_team']){
               foreach($team['players'] as &$player){
//                   var_dump($players);    
                   if($player['nickname']=== $_COOKIE['cookie_nickname']){
                       $player['score']++;
                   }
               } 
            }
        }
        unset($team);
    }

    array_to_file($teams, 'data/teams.txt'); // User_array konvertuoja i .txt faila JSON formatu
}

$text = 'Go for it, ' . $_COOKIE['cookie_nickname'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Žaidimas. Join</title>
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body class="bg">
        <h1 class="text"><?php print $text; ?></h1>
        <div class="laukas">
<?php require 'templates/form.tpl.php'; ?>
        </div>
    </body>
</html>
