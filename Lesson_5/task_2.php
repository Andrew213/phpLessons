<?php
/**
*Вы вложили 100 000 рублей на депозит в банк под 8% годовых.
*Вычислите, через сколько лет сумма на вашем депозите удвоится, при условии,
*что каждые три года банк будет увеличивать процентную ставку на 2%.
*/

$deposit = 100000;
$currentValueDeposit = $deposit;
$rate = 8;
$yearCount = 0;
$year=0;
while($currentValueDeposit <= $deposit * 2){
    $yearCount++;
    $year++;
    if($yearCount === 3){
        $yearCount=1;
        $rate = $rate+2;
    }
    $currentProfit = $currentValueDeposit * ($rate / 100);
    $currentValueDeposit = $currentValueDeposit + $currentProfit;

}

var_dump("Капитал удвоится через ".$year." лет");