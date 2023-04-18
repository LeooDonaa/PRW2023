<?php
while (true) {
    // Lê o valor de entrada do usuário e o converte para inteiro
    $N = intval(fgets(STDIN));

    // Verifica se o valor de entrada é zero, se sim, sai do loop
    if ($N == 0) {
        break;
    }

    // Cria uma matriz vazia para armazenar os valores
    $M = array();

    // Preenche a matriz com os valores apropriados
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            // Calcula o valor mínimo entre a posição atual e as bordas da matriz
            $M[$i][$j] = min($i, $j, $N - $i - 1, $N - $j - 1) + 1;
        }
    }

    // Exibe os valores da matriz na saída padrão
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            // Formata a saída com espaços e zeros à esquerda
            echo sprintf("%3d", $M[$i][$j]);

            // Adiciona um espaço entre os valores da matriz, exceto para o último valor
            if ($j != $N - 1) {
                echo " ";
            }
        }

        // Adiciona uma quebra de linha após exibir cada linha da matriz
        echo "\n";
    }

    // Adiciona uma linha em branco após exibir a matriz
    echo "\n";
}
?>
