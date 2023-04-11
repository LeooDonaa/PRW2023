<?php

// Inicia o array $x com os dois primeiros valores da sequência de Fibonacci
$x = array(0, 1);

// Lê um número inteiro do usuário para determinar quantos casos de teste serão executados
$b = intval(trim(readline()));

// Loop para executar cada caso de teste
for ($c = 0; $c < $b; $c++) {
    // Lê um número inteiro do usuário que indica o número de Fibonacci que deve ser calculado
    $n = intval(trim(readline()));
    
    // Loop para calcular a sequência de Fibonacci até chegar no número desejado
    for ($p = 2; $p <= $n; $p++) {
        $x[$p] = $x[$p-1] + $x[$p-2]; // Calcula o valor da sequência de Fibonacci na posição $p
    }
    
    // Imprime o resultado do caso de teste
    echo "Fib($n) = $x[$n]\n";
}

?>
