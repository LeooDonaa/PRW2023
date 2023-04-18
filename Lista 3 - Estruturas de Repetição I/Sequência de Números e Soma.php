<?php
    // Loop infinito para ler valores de entrada e calcular a soma.
    while (true) {
        // Lê dois inteiros da entrada padrão.
        fscanf(STDIN, "%d %d", $m, $n);
        // Verifica se um dos valores lidos é menor ou igual a 0.
        if ($m <= 0 || $n <= 0) {
            // Se sim, encerra o loop.
            break;
        }
        // Variável para armazenar a soma.
        $sum = 0;
        // Verifica se m é maior que n.
        if ($m > $n) {
            // Se sim, troca os valores de m e n.
            list($m, $n) = array($n, $m);
        }
        // Loop para iterar por valores de m a n.
        for ($i = $m; $i <= $n; $i++) {
            // Imprime o valor de i seguido de um espaço em branco.
            echo $i . " ";
            // Adiciona i à soma.
            $sum += $i;
        }
        // Imprime a mensagem "Sum=" seguida do valor da soma na tela.
        echo "Sum=" . $sum . "\n";
    }
?>
