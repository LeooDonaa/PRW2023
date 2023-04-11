<?php

// Lê a opção escolhida pelo usuário (S ou M)
$op = readline();

// Declara uma matriz 12x12
$M = array();

// Popula a matriz com os valores digitados pelo usuário
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $valor = readline();
        $M[$i][$j] = $valor;
    }
}

// Realiza o cálculo da soma dos valores da matriz que compõem a área desejada
$S = $M[5][7] + $M[6][7] + $M[4][8] + $M[5][8] + $M[6][8] + $M[7][8] + $M[3][9] + $M[4][9] + $M[5][9] + $M[6][9] + $M[7][9] + $M[8][9] + $M[2][10] +$M[3][10] + $M[4][10] + $M[5][10] + $M[6][10] + $M[7][10] + $M[8][10] + $M[9][10] + $M[1][11] + $M[2][11] + $M[3][11] + $M[4][11] + $M[5][11] + $M[6][11] + $M[7][11] + $M[8][11] + $M[9][11] + $M[10][11];

// Realiza o cálculo da média dos valores da matriz que compõem a área desejada
$M = $S/30;

// Verifica a opção escolhida pelo usuário e exibe o resultado formatado de acordo com a opção
switch($op){
    case 'S':
        $S = number_format($S, 1, ".", "");
        echo "$S\n";
        break;
    case 'M':
        $M = number_format($M, 1, ".", "");
        echo "$M\n";
        break;
}

?>