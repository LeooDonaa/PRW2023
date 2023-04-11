<?php
$n = intval(fgets(STDIN)); // lê um valor inteiro da entrada padrão e armazena na variável $n

for ($i = 0; $i < $n; $i++) { // laço que percorre cada um dos $n casos de teste
    list($a, $b, $c) = array_map('floatval', explode(' ', fgets(STDIN))); // lê os valores de $a, $b e $c da entrada padrão e os converte para float usando a função array_map() e a função explode() para separar os valores em um array

    $average = ($a * 2 + $b * 3 + $c * 5) / 10; // calcula a média ponderada das notas de acordo com o enunciado do problema e armazena na variável $average
    echo number_format($average, 1) . "\n"; // imprime o valor da média formatado com uma casa decimal na tela
}
?>
