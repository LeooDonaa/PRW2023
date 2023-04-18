<?php

// Define uma função que verifica se uma risada é engraçada ou não
function risadaEngracada($risada) {

    // Cria um array de vogais
    $vogais = array('a', 'e', 'i', 'o', 'u');

    // Encontra as vogais na risada, retornando um array com as vogais presentes
    $vogaisRisada = array_intersect(str_split($risada), $vogais);

    // Concatena as vogais encontradas em uma única string
    $vogaisJuntas = implode("", $vogaisRisada);

    // Inverte a string de vogais
    $vogaisJuntasInvertidas = strrev($vogaisJuntas);

    // Verifica se a string de vogais é igual à sua inversa, indicando que a risada é engraçada
    return $vogaisJuntas == $vogaisJuntasInvertidas;
}

// Lê uma linha de entrada do usuário usando a função fgets() e remove espaços em branco extras usando a função trim()
$risada = trim(fgets(STDIN));

// Chama a função risadaEngracada() para verificar se a risada é engraçada ou não e exibe a saída apropriada
if (risadaEngracada($risada)) {
    echo "S\n";
} else {
    echo "N\n";
}

?>
