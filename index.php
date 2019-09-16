<?php
$months = 12;
$wallet = 1000;
$month_income = 700;


for ($month = 1; $month <= 12; $month++) {
    $month_expenses = rand(550, 1000);
    $wallet += $month_income - $month_expenses;
    if ($wallet < 0) {
        $text_1 = "Atsargiai, $month mėnesį gali baigtis pinigai!";
        break;
    }
    $text_1 = "Po $months m., prognozuojamas likutis: $wallet";
}

?>
<html>
    <head>
        <title>for Wallet</title> 
    </head>
    <body>
        <div class="container">
            <h1>Wallet Forecast</h1>
            <h2><?php print $text_1; ?></h2>
        </div>
    </body>
</html>