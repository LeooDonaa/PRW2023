<?php
    // Lê a entrada como um inteiro
    $n = intval(fgets(STDIN));

    // Inicializa as variáveis $prev e $current com 0 e 1, respectivamente
    $prev = 0;
    $current = 1;

    // Imprime o valor de $prev, que é igual a 0
    echo $prev;

    // Loop que executa $n - 1 vezes
    for ($i = 1; $i < $n; $i++) {
        // Imprime o valor de $current, separado por um espaço em branco
        echo " $current";

        // Calcula o próximo número da sequência
        $next = $prev + $current;

        // Atualiza os valores de $prev e $current para a próxima iteração
        $prev = $current;
        $current = $next;
    }

    // Imprime uma quebra de linha
    echo "\n";
?>
