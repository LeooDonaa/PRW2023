<?php
    // Loop infinito para ler valores de entrada e imprimir "Crescente" ou "Decrescente".
    while (true) {
        // Lê dois inteiros da entrada padrão e armazena em $x e $y.
        list($x, $y) = fscanf(STDIN, "%d %d");
        // Verifica se $x é igual a $y.
        if ($x == $y) {
            // Se sim, encerra o loop.
            break;
        }
        // Verifica se $x é menor que $y.
        if ($x < $y) {
            // Se sim, imprime "Crescente" na tela.
            echo "Crescente\n";
        } else {
            // Caso contrário, imprime "Decrescente" na tela.
            echo "Decrescente\n";
        }
    }
?>
