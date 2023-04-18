<?php

// Lê um valor inteiro do usuário usando a função fgets() e converte para inteiro usando a função intval()
$n = intval(fgets(STDIN));

// Inicia um loop que itera $n vezes para processar os $n casos de teste
for ($i = 0; $i < $n; $i++) {

    // Lê um valor inteiro do usuário usando a função fgets() e converte para inteiro usando a função intval()
    $k = intval(fgets(STDIN));

    // Cria um array para armazenar as línguas faladas pelos participantes
    $languages = [];

    // Inicia um loop que itera $k vezes para ler as $k línguas faladas pelos participantes
    for ($j = 0; $j < $k; $j++) {

        // Lê uma linha de entrada do usuário usando a função fgets() e remove espaços em branco extras usando a função trim()
        $language = trim(fgets(STDIN));

        // Adiciona a língua atual ao array de línguas, marcando-a como verdadeira
        $languages[$language] = true;
    }

    // Verifica se há apenas uma língua no array de línguas
    if (count($languages) == 1) {

        // Se houver apenas uma língua, imprime o nome da língua
        echo key($languages) . "\n";
    } else {

        // Se houver mais de uma língua, imprime "ingles"
        echo "ingles\n";
    }
}

?>