<?php

    // Lê a entrada como uma string e separa em um array com base nos espaços em branco
    $l1 = explode(" ", readline());

    // Inicializa a variável $t com zero
    $t = 0;

    // Obtém o último elemento do array $l1, que é o valor de $n
    $n = ($l1[count($l1) - 1]);

    // Obtém o primeiro elemento do array $l1, que é o valor de $a
    $a = ($l1[0]);

    // Verifica se $n é menor ou igual a zero
    if ($n <= 0) {
        // Se sim, solicita que o usuário informe um novo valor para $n
        $n = readline();
    }

    // Loop que soma $a e $i em cada iteração, até que $i seja igual a $n-1
    for ($i = 0; $i < $n; $i++) {
        $t += $a + $i;
    }

    // Imprime o valor de $t e uma quebra de linha
    echo "$t\n";
?>
