<?php
// Loop que executa até que o valor lido da entrada padrão seja zero.
while (true) {
    // Lê um número inteiro da entrada padrão.
    $x = intval(fgets(STDIN));
    if ($x == 0) {
        break;
    }

    // Variáveis para armazenar a soma dos próximos 5 números pares a partir de x e a quantidade de números pares encontrados.
    $soma = 0;
    $qtd_pares = 0;

    // Loop que encontra os próximos 5 números pares a partir de x e soma seus valores.
    while ($qtd_pares < 5) {
        if ($x % 2 == 0) {
            $soma += $x;
            $qtd_pares++;
        }
        $x++;
    }

    // Imprime a soma dos próximos 5 números pares encontrados e pula para a próxima linha.
    echo $soma . "\n";
}
?>
