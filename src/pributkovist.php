<?php
$koef = 0.6;

$smallFactoryIncome = 30000;
$smallFactoryLoss = -30000;
$largeFactoryIncome = 60000;
$largeFactoryLoss = -65000;

$resSmall = $koef * $smallFactoryIncome + (1 - $koef) * $smallFactoryLoss;
$resLarge = $koef * $largeFactoryIncome + (1 - $koef) * $largeFactoryLoss;

if ($resSmall > $resLarge) {
    echo "краще вибрати маленьку майстерю: $resSmall грн \n";
}
else {
    echo "краще вибрати велику майстерю: $resLarge грн \n";
}
var_dump($resSmall);
var_dump($resLarge);