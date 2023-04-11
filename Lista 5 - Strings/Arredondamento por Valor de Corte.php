<?php

while (($num = fgets(STDIN)) !== false && ($cutoff = fgets(STDIN)) !== false) {
    // Converte as entradas em números de ponto flutuante
    $num = floatval($num);
    $cutoff = floatval($cutoff);

    // Verifica se a parte decimal do número é maior ou igual ao limite especificado
    if ($num - floor($num) >= $cutoff) {
        // Se sim, arredonda para cima e imprime o resultado
        echo ceil($num) . PHP_EOL;
    } else {
        // Caso contrário, arredonda para baixo e imprime o resultado
        echo floor($num) . PHP_EOL;
    }
}

?>
