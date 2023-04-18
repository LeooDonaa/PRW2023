<?php
    // Define a função ehPrimo, que verifica se um número é primo ou não
    function ehPrimo($num){
        // Casos especiais: 1, 2 e 3 são números primos
        if($num == 2 || $num == 3) return true;

        // Se o número for 1 ou par, não é primo
        if($num == 1 || $num % 2 == 0) return false;

        // Loop que executa até a raiz quadrada do número, testando se ele é divisível por cada número ímpar
        for($i = 3; $i <= sqrt($num); $i += 2){
            if($num % $i == 0) return false; // Se for divisível, não é primo
        }
        return true; // Se não encontrou nenhum divisor, é primo
    }

    // Lê o número de casos de teste como um inteiro
    $n = intval(fgets(STDIN));

    // Loop que executa para cada caso de teste
    for($i = 0; $i < $n; $i++){
        // Lê o número a ser verificado como um inteiro
        $num = intval(fgets(STDIN));

        // Verifica se o número é primo e imprime a mensagem correspondente
        if(ehPrimo($num)){
            echo "$num eh primo\n";
        }else{
            echo "$num nao eh primo\n";
        }
    }
?>
