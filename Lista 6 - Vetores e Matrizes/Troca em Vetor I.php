<?php
// Cria um array vazio para armazenar os valores
$N = array();

// Loop para ler 20 valores do usuário
for ($i = 0; $i < 20; $i++) {
    // Lê um valor inteiro do usuário e armazena no array
    fscanf(STDIN, "%d\n", $N[$i]);
}

// Loop para inverter a ordem dos primeiros 10 valores no array com os últimos 10 valores
for ($i = 0; $i < 10; $i++) {
    // Armazena temporariamente o valor do primeiro conjunto de valores
    $temp = $N[$i];
    // Substitui o valor do primeiro conjunto de valores pelo valor correspondente no segundo conjunto de valores
    $N[$i] = $N[19 - $i];
    // Substitui o valor correspondente no segundo conjunto de valores pelo valor temporário do primeiro conjunto de valores
    $N[19 - $i] = $temp;
}

// Loop para imprimir todos os valores do array com seus índices
for ($i = 0; $i < 20; $i++) {
    // Imprime o índice, o sinal de igualdade e o valor correspondente no array
    echo "N[" . $i . "] = " . $N[$i] ."\n";
}
?>
