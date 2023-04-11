<?php

// Lê o número da coluna e o tipo de operação
$coluna = intval(trim(fgets(STDIN)));
$operacao = strval(trim(fgets(STDIN)));

// Cria a matriz 12x12 e inicializa a soma em 0
$matriz = array();
$soma = 0;

for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        // Lê o valor da matriz
        $valor = floatval(trim(fgets(STDIN)));
        $matriz[$i][$j] = $valor;
    }
}

// Calcula a soma dos valores da coluna escolhida
for ($a = 0; $a < 12; $a++) {
    $soma += $matriz[$a][$coluna];
}

// Formata o resultado com uma casa decimal
$soma = number_format($soma, 1, '.', '');

// Calcula a média dos valores da coluna escolhida
$media = $soma / 12;
$media = number_format($media, 1, '.', '');

// Imprime o resultado de acordo com o tipo de operação escolhida
switch ($operacao) {
    case 'S':
        echo "$soma\n";
        break;
    case 'M':
        echo "$media\n";
        break;
}
?>
