<?php

[$codigo1, $num1, $valor1] = explode(' ', trim(fgets(STDIN)));
[$codigo2, $num2, $valor2] = explode(' ', trim(fgets(STDIN)));

$num1 = (int) $num1;
$valor1 = (float) $valor1;
$num2 = (int) $num2;
$valor2 = (float) $valor2;

$valorTotal = ($num1 * $valor1) + ($num2 * $valor2);

echo "VALOR A PAGAR: R$ " . number_format($valorTotal, 2, '.', '') . "\n";

?>
