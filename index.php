<?php

$months = 12;
$wallet = 1000;
$month_income = 700;
$month_expenses = rand(550, 750);

for ($month = 1; $month <= 12; $month++) {
    $month_expenses = rand(550, 750);
    $wallet += $month_income;
    $wallet -= $month_expenses;
}

$text1 = "Po $months m., prognozuojamas likutis: $wallet";

?>
<html>
    <head>
        <title>for Wallet</title> 
    </head>
    <body>
        <div class="container">
            <h1>Wallet Forecast</h1>
            <h2><?php print $text1; ?></h2>
        </div>
    </body>
</html>