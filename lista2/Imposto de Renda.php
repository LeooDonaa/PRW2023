<?php
//Lê o valor do salário
fscanf(STDIN, "%f", $salario);

//Verifica em qual faixa de imposto o salário se encontra e imprime o valor correspondente
if ($salario <= 2000.0) {
    echo "Isento\n";
} elseif ($salario <= 3000.0) {
    $x = ($salario - 2000.0) * 0.08;
    echo "R$ " . number_format($x, 2, '.', '') . "\n";
} elseif ($salario <= 4500.0) {
    $x = ($salario - 3000.0) * 0.18 + (1000 * 0.08);
    echo "R$ " . number_format($x, 2, '.', '') . "\n";
} else {
    $x = ($salario - 4500) * 0.28 + (1500 * 0.18) + (1000 * 0.08);
    echo "R$ " . number_format($x, 2, '.', '') . "\n";
}
?>