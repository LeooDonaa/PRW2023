<?php

// Lê a operação a ser realizada a partir da entrada do usuário
$operacao = readline();

// Cria uma matriz vazia com 12 linhas e 12 colunas
$matriz = array();
for ($i = 0; $i < 12; $i++) {
    $linha = array();
    for ($j = 0; $j < 12; $j++) {
        // Lê um valor de ponto flutuante a partir da entrada do usuário e adiciona na linha atual da matriz
        $linha[] = (float) readline();
    }
    // Adiciona a linha atual na matriz
    $matriz[] = $linha;
}

// Inicializa variáveis para a soma e contagem dos valores abaixo da diagonal principal da matriz
$soma = 0;
$contador = 0;
for ($i = 1; $i < 12; $i++) {
    for ($j = 0; $j < $i; $j++) {
        // Soma o valor atual na variável $soma e incrementa a variável $contador
        $soma += $matriz[$i][$j];
        $contador++;
    }
}

if ($operacao == "S") {
    // Se a operação for "S", exibe a soma dos valores abaixo da diagonal principal da matriz com uma casa decimal
    echo number_format($soma, 1, ".", "") . "\n";
} else if ($operacao == "M") {
    // Se a operação for "M", calcula a média dos valores abaixo da diagonal principal da matriz e exibe com uma casa decimal
    $media = $soma / $contador;
    echo number_format($media, 1, ".", "") . "\n";
}

?>
