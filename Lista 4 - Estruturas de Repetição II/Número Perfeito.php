<?php
    // Define a função verificaPerfeito, que recebe um número como argumento e verifica se ele é perfeito ou não
    function verificaPerfeito($num) {
        // Inicializa a variável $somaDivisores com zero
        $somaDivisores = 0;

        // Loop que executa até $num - 1, somando os divisores de $num à variável $somaDivisores
        for ($i = 1; $i < $num; $i++) {
            if ($num % $i == 0) { // Verifica se $i é divisor de $num
                $somaDivisores += $i;
            }
        }

        // Verifica se a soma dos divisores é igual ao número original e imprime a mensagem correspondente
        if ($somaDivisores == $num) {
            echo $num . " eh perfeito\n";
        } else {
            echo $num . " nao eh perfeito\n";
        }
    }

    // Lê o número de casos de teste como um inteiro
    $n = intval(fgets(STDIN));

    // Loop que executa para cada caso de teste
    for ($i = 0; $i < $n; $i++) {
        // Lê o número a ser verificado como um inteiro
        $num = intval(fgets(STDIN));

        // Chama a função verificaPerfeito para verificar se o número é perfeito ou não
        verificaPerfeito($num);
    }
?>
