<?php
    // Loop para iterar por valores de i de 0 a 2, aumentando em 0,2 a cada iteração.
    for ($i = 0; $i <= 2; $i += 0.2) {
        // Loop para iterar por valores de j de 1 a 3.
        for ($j = 1; $j <= 3; $j++) {
            // Verifica se i é igual a 0, igual a 1 ou maior que 1,8.
            if ($i == 0 || $i == 1 || $i > 1.8) {
                // Se sim, imprime i arredondado e j+i arredondado na tela.
                echo "I=" . round($i) . " J=" . round($j + $i) . "\n";
            } else {
                // Caso contrário, imprime i com uma casa decimal e j+i com uma casa decimal na tela.
                echo "I=" . number_format($i, 1) . " J=" . number_format($j + $i, 1) . "\n";
            }
        }
    }
?>
