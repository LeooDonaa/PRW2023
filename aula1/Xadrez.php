<?php

// Lê o número de linhas e colunas
list($linhas, $colunas) = explode(" ", trim(fgets(STDIN)));

// Verifica se a última casa é branca ou preta
if (($linhas + $colunas) % 2 == 0) {
    echo "Branca\n";
} else {
    echo "Preta\n";
}

?>
