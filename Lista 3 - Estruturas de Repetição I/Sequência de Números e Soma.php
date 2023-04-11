<?php
    // loop para ler valores M e N enquanto ambos forem maiores que zero
    while (true) {
        // lê os valores de M e N como uma única linha de entrada e os separa em um array de inteiros
        $input = explode(" ", fgets(STDIN));
        $m = intval($input[0]);
        $n = intval($input[1]);

        // verifica se algum dos valores é menor ou igual a zero, e para o loop caso seja
        if ($m <= 0 || $n <= 0) {
            break;
        }

        // inicia a sequência e a soma com o valor mínimo entre M e N
        $seq = "";
        $sum = min($m, $n);

        // adiciona cada número da sequência à string e soma ao total
        for ($i = $sum + 1; $i <= max($m, $n); $i++) {
            $seq .= "$i ";
            $sum += $i;
        }

        // imprime a sequência e a soma formatadas
        echo trim($seq) . " Sum=$sum\n";
    }
?>