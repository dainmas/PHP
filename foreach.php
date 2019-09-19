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


foreach ($bank_report as $operacijos_nr => $reiksme) {
    if ($reiksme['amount'] < 0) {
        $bank_report[$operacijos_nr]['css_class'] = 'expense';
    } else {
        $bank_report[$operacijos_nr]['css_class'] = 'income';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Banko ataskaita su forach</title>
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
        <h1>Banko ataskaita</h1>
        <ul>
            <?php foreach ($bank_report as $operacijos_nr => $reiksme) : ?>
                <li class="<?php print $reiksme['css_class']; ?>">
                    <?php print "{$reiksme['name']}: {$reiksme['amount']}"; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
