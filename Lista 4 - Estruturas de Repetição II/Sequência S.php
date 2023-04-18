<?php
    // Inicializa a variável $s com zero
    $s = 0;

    // Loop que executa 100 vezes, somando 1 dividido por $i a cada iteração
    for ($i = 1; $i <= 100; $i++) {
        $s += 1 / $i;
    }

    // Imprime o valor de $s formatado com duas casas decimais e uma quebra de linha
    echo number_format($s, 2) . "\n";
?>
