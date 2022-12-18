<?php
$experts = [
    [4, 0.8],
    [10, 0.3],
    [7, 0.5],
    [8, 0.9],
    [6, 0.2],
    [4, 0.4]
];

$samoocinkaSum = array_sum(array_column($experts, 0));
echo "samoocinkaSum: $samoocinkaSum \n";

$imovirnistArr = array_column($experts, 1);
$imovirnistSum = array_sum(array_column($experts, 1));

$serednioGrupova = $samoocinkaSum / count($experts);
echo "serednioGrupova: $serednioGrupova \n";

$prosta = $imovirnistSum / count($experts);
echo "prosta: $prosta \n";

foreach ($experts as $expert) {
    $res[] = array_product($expert);
}
//4*0,8 + 10 * 0,3 + 7 * 0,5 + 8 * 0,9 + 6 * 0,2 + 4 * 0,4
$seredioVzvagena = array_sum($res) / $samoocinkaSum;
echo "seredioVzvagena: $seredioVzvagena \n";

sort($imovirnistArr);
$count = count($imovirnistArr);
$median = ($imovirnistArr[($count / 2) - 1] + $imovirnistArr[($count / 2)]) / 2;
echo "median: $median \n";

$quartil = ($imovirnistArr[$count - 1] - $imovirnistArr[0]) / 4;
echo "quartil: $quartil \n";

$dovirchiviyInterval = [$imovirnistArr[0] + $quartil, $imovirnistArr[$count - 1] - $quartil];
var_dump($dovirchiviyInterval);