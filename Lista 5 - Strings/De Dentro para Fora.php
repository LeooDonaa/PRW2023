<?php

// Lê um valor inteiro do usuário usando a função readline() e converte para inteiro usando a função intval()
$n = intval(readline());

// Inicia um loop while que itera até o valor de $n ser 0
while ($n--) {
    // Lê uma linha de entrada do usuário usando a função readline()
    $f = readline();

    // Calcula o índice central da string $f
    $hl = intval(strlen($f) / 2);

    // Imprime a primeira metade da string $f ao contrário
    for ($i = $hl - 1; $i >= 0; $i--) {
        echo $f[$i];
    }

    // Imprime a segunda metade da string $f ao contrário
    for ($i = strlen($f) - 1; $i >= $hl; $i--) {
        echo $f[$i];
    }

    // Imprime uma nova linha para separar as saídas dos diferentes casos de teste
    echo "\n";
}

?>
