<?php

// Lê uma linha da entrada padrão e a transforma em um array de inteiros.
list($x, $y) = array_map('intval', explode(" ", fgets(STDIN)));

// Loop que imprime uma sequência de números de 1 a $y.
for ($i = 1; $i <= $y; $i++) {
    // Imprime o número atual.
    echo $i;
    
    // Se o número atual for divisível por $x, pula para a próxima linha.
    if ($i % $x == 0) {
        echo "\n";
    } else {
        // Caso contrário, adiciona um espaço entre os números na mesma linha.
        echo " ";
    }
}

?>
