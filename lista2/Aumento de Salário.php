<?php
// Lê o valor do salário a partir da entrada padrão
$salario = (float) fgets(STDIN);

// Determina qual percentual de reajuste deve ser aplicado com base no salário atual
if ($salario <= 400.00) {
    $percentual = 15;
} elseif ($salario <= 800.00) {
    $percentual = 12;
} elseif ($salario <= 1200.00) {
    $percentual = 10;
} elseif ($salario <= 2000.00) {
    $percentual = 7;
} else {
    $percentual = 4;
}

// Calcula o valor do reajuste e o novo salário
$reajuste = $salario * $percentual / 100;
$novoSalario = $salario + $reajuste;

// Exibe o resultado final em três linhas de texto
echo "Novo salario: " . number_format($novoSalario, 2, '.', '') . "\n";
echo "Reajuste ganho: " . number_format($reajuste, 2, '.', '') . "\n";
echo "Em percentual: $percentual %\n";
?>
