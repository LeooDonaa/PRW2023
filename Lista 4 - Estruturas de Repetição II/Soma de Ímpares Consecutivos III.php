<?php
// Lê um número inteiro da entrada padrão.
$N = intval(fgets(STDIN));

// Loop que executa N vezes.
for ($i = 0; $i < $N; $i++) {
    // Lê dois números inteiros da entrada padrão.
    list($X, $Y) = explode(" ", fgets(STDIN));

    // Variáveis para armazenar a soma dos números ímpares e a quantidade de números ímpares encontrados.
    $sum = 0;
    $count = 0;

    // Loop que encontra Y números ímpares a partir de X e soma os valores encontrados.
    while ($count < $Y) {
        if ($X % 2 != 0) {
            $sum += $X;
            $count++;
        }
        $X++;
    }

    // Imprime a soma dos Y números ímpares encontrados e pula para a próxima linha.
    echo "$sum\n";
}
?>
