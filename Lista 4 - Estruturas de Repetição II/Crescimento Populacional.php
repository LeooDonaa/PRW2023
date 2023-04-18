<?php
    // Lê o número de casos de teste como um inteiro
    $cases = intval(fgets(STDIN));

    // Loop que executa para cada caso de teste
    for ($i = 0; $i < $cases; $i++) {
        // Lê os valores de PA, PB, G1 e G2 para o caso de teste atual
        list($pa, $pb, $g1, $g2) = array_map("floatval", explode(" ", fgets(STDIN)));

        // Inicializa a variável $years com zero
        $years = 0;

        // Loop que executa enquanto PA for menor ou igual a PB
        while ($pa <= $pb) {
            // Calcula a população de cada cidade após um ano
            $pa += intval(($pa * $g1) / 100); 
            $pb += intval(($pb * $g2) / 100); 

            // Incrementa a variável $years
            $years++;

            // Verifica se o tempo limite de 100 anos foi atingido
            if ($years > 100) {
                // Se sim, imprime "Mais de 1 seculo." e sai do loop
                echo "Mais de 1 seculo.\n";
                break;
            }
        }

        // Se o tempo limite não foi atingido, imprime o número de anos necessário para que a população de PA ultrapasse a de PB
        if ($years <= 100) { 
            echo $years . " anos.\n";
        }
    }
?>
