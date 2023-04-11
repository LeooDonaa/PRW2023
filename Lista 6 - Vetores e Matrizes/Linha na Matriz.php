<?php

// Lê o número da linha e o tipo de operação (S ou M)
    $l = intval(trim(fgets(STDIN)));
    $t = strval(trim(fgets(STDIN)));

    // Declara uma matriz 12x12 e uma variável para armazenar a soma
    $M = array();
    $sum = 0;

    // Preenche a matriz com os valores da entrada padrão
    for ($i = 0; $i < 12; $i++) {
        for ($j = 0; $j < 12; $j++) {
            $valor = floatval(trim(fgets(STDIN)));
            $M[$i][$j] = $valor;
        }
    }

    // Soma os valores da linha especificada pelo usuário
    for ($a = 0; $a < 12; $a++) {
        $sum += $M[$l][$a];
    }

    // Exibe o resultado da operação escolhida pelo usuário
    if ($t == 'S') {
        echo number_format($sum, 1, '.', '') . "\n";
    } else if ($t == 'M') {
        echo number_format($sum/12, 1, '.', '') . "\n";
    }

    ?>
