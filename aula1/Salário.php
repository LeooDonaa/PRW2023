<?php
$numerofunc = intval(fgets(STDIN));
$horastrab = intval(fgets(STDIN));
$valorece = floatval(fgets(STDIN));

$salario = $valorece * $horastrab;

echo "NUMBER = " . $numerofunc . "\n";
echo "SALARY = U$ " . number_format($salario, 2, ".", "") . "\n";
?>