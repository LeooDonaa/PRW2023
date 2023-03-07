<?php
$nome = readline();

$salarioFixo = (float) fgets(STDIN);

$totalVendas = (float) fgets(STDIN);

$comissao = $totalVendas * 0.15;

$salarioTotal = $salarioFixo + $comissao;

echo "TOTAL = R$ " . number_format($salarioTotal, 2, ".", "") . "\n";
?>
