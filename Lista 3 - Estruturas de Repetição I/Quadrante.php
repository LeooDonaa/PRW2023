<?php
    // Loop infinito para ler coordenadas e determinar o quadrante correspondente.
    while (true) {
        // Lê dois inteiros da entrada padrão e armazena em $x e $y.
        list($x, $y) = fscanf(STDIN, "%d %d");
        // Verifica se $x ou $y é igual a zero.
        if ($x == 0 || $y == 0) {
            // Se sim, encerra o loop.
            break;
        }
        // Determina o quadrante correspondente.
        if ($x > 0 && $y > 0) {
            echo "primeiro\n";
        } else if ($x < 0 && $y > 0) {
            echo "segundo\n";
        } else if ($x < 0 && $y < 0) {
            echo "terceiro\n";
        } else if ($x > 0 && $y < 0) {
            echo "quarto\n";
        }
    }
?>
