<?php
    // Lê o número de elementos do array a ser criado
    $n = readline();
    
    // Lê os valores do array e armazena em um array numérico
    $X = array_map('intval', explode(' ', trim(fgets(STDIN))));
    
    // Obtém o menor valor do array
    $minValue = min($X);
    
    // Obtém a posição do menor valor no array usando array_search
    $minIndex = array_search($minValue, $X);
    
    // Imprime o resultado na tela
    echo "Menor valor: $minValue\n";
    echo "Posicao: $minIndex\n";
?>
