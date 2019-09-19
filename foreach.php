<?php

$bank_report = [
    [
        'name' => 'Iki darbo užmokestis',
        'amount' => 600,
    ],
    [
        'name' => 'Pirktas maistas Iki parduotuvėje',
        'amount' => -15
    ],
    [
        'name' => 'Sumokėti mokesčiai',
        'amount' => -150
    ],
    [
        'name' => 'Pirktas maistas max parduotuvėje',
        'amount' => -20
    ],
];

$total_expenses = 0;
$total_income = 0;
$balance = 0;

foreach ($bank_report as $operacijos_nr => $reiksme) {
    if ($reiksme['amount'] < 0) {
        $bank_report[$operacijos_nr]['css_class'] = 'expense';
        $total_expenses += $reiksme['amount'];
    } else {
        $bank_report[$operacijos_nr]['css_class'] = 'income';
        $total_income += $reiksme['amount'];
    }
    $balance += $reiksme['amount'];
}


$text_h1 = 'Mano banko išklotinė';
$text_1 = "Balansas: $balance eur";
$text_2 = "Įplaukos: $total_income eur";
$text_3 = "Išlaidos: $total_expenses eur";

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Banko ataskaita su foreach</title>
        <style>
            .expense{
                color: red;
            }
            .income{
                color: green;
            }
        </style>
    </head>
    <body>
        <h1><?php print $text_h1; ?></h1>
        <ul>
            <?php foreach ($bank_report as $operacijos_nr => $reiksme) : ?>
                <li class="<?php print $reiksme['css_class']; ?>">
                    <?php print "{$reiksme['name']}: {$reiksme['amount']}"; ?>
                </li>
            <?php endforeach; ?>
            <h2><?php print $text_1; ?></h2>
            <h3 class="income"><?php print $text_2; ?></h3>
            <h3 class="expense"><?php print $text_3; ?></h3>
        </ul>
    </body>
</html>
