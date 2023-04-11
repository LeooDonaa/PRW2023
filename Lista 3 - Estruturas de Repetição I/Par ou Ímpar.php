<?php
fscanf(STDIN, "%d\n", $N); // lê um valor inteiro da entrada padrão e armazena na variável $N

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d\n", $X); // lê um valor inteiro da entrada padrão e armazena na variável $X

    if ($X == 0) {
        echo "NULL\n"; // se $X for igual a zero, imprime "NULL" na tela
    } elseif ($X % 2 == 0) {
        if ($X > 0) {
            echo "EVEN POSITIVE\n"; // se $X for um número par e positivo, imprime "EVEN POSITIVE" na tela
        } else {
            echo "EVEN NEGATIVE\n"; // se $X for um número par e negativo, imprime "EVEN NEGATIVE" na tela
        }
    } else {
        if ($X > 0) {
            echo "ODD POSITIVE\n"; // se $X for um número ímpar e positivo, imprime "ODD POSITIVE" na tela
        } else {
            echo "ODD NEGATIVE\n"; // se $X for um número ímpar e negativo, imprime "ODD NEGATIVE" na tela
        }
    }
}
?>
