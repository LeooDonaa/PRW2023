<?php

// Lê a operação a ser realizada a partir da entrada do usuário
$operacao = trim(fgets(STDIN));

// Cria uma matriz vazia com 12 linhas e 12 colunas e preenche com valores lidos a partir da entrada do usuário
$matriz = array();
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $matriz[$i][$j] = floatval(trim(fgets(STDIN)));
    }
}

// Inicializa variáveis para a soma e contagem dos valores acima da diagonal secundária da matriz
$soma = 0;
$qtd = 0;
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        if ($j > 11 - $i) { // Verifica se o elemento atual está acima da diagonal secundária
            $soma += $matriz[$i][$j];
            $qtd++;
        }
    }
}

if ($operacao == 'S') {
    // Se a operação for "S", exibe a soma dos valores acima da diagonal secundária da matriz com uma casa decimal
    printf("%.1f\n", $soma);
} elseif ($operacao == 'M') {
    // Se a operação for "M", calcula a média dos valores acima da diagonal secundária da matriz e exibe com uma casa decimal
    $media = $soma / $qtd;
    printf("%.1f\n", $media);
}

?>
