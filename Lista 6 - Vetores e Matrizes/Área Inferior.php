<?php
// Lê a operação (S ou M) da entrada padrão
$O = fgets(STDIN);

// Inicializa a soma e o contador
$sum = 0.0;
$count = 0;

// Lê a matriz 12x12 de valores float da entrada padrão
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $M[$i][$j] = floatval(fgets(STDIN));

        // Verifica se o índice (i, j) está abaixo da diagonal secundária
        if ($i > $j && $i + $j > 11) {
            // Adiciona o valor de M[i][j] à soma e incrementa o contador
            $sum += $M[$i][$j];
            $count++;
        }
    }
}

// Verifica se a operação selecionada é S (soma) ou M (média)
if (trim($O) == 'S') {
    // Imprime a soma formatada com uma casa decimal
    echo number_format($sum, 1, '.', '') . "\n";
} else {
    // Calcula a média e imprime formatada com uma casa decimal
    echo number_format($sum / $count, 1, '.', '') . "\n";
}
?>
