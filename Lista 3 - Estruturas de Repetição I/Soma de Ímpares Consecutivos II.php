<?php

$n = intval(fgets(STDIN)); // Lê o número de casos de teste

while ($n--) { // Loop que executa enquanto houver casos de teste
    list($x, $y) = array_map('intval', explode(" ", fgets(STDIN))); // Lê os valores de x e y e converte para inteiros

    if ($x > $y) { // Verifica se x é maior que y e, se for, troca os valores de x e y
        $temp = $x;
        $x = $y;
        $y = $temp;
    }

    $sum = 0; // Inicializa a variável de soma com o valor 0

    for ($i = $x + 1; $i < $y; $i++) { // Loop que itera de x+1 até y-1
        if ($i % 2 == 1) { // Verifica se o número é ímpar
            $sum += $i; // Se for, adiciona o número à soma
        }
    }

    echo $sum . "\n"; // Imprime a soma dos números ímpares entre x e y
}

?>
