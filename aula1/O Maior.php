<?php

list($a, $b, $c) = explode(' ', trim(fgets(STDIN)));

$maiorAB = ($a + $b + abs($a - $b)) / 2;
$maiorABC = ($maiorAB + $c + abs($maiorAB - $c)) / 2;

echo $maiorABC . " eh o maior\n";

?>
