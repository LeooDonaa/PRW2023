<?php

// Lê os valores inseridos pelo usuário
$valores = fgets(STDIN);

// Separa os valores por espaço em um array
$valores = explode(" ", $valores);

// Converte cada elemento do array para inteiro
$a = intval($valores[0]);
$b = intval($valores[1]);
$c = intval($valores[2]);

// Determina qual é o menor, o maior e o valor intermediário entre os valores
$menor = min($a, $b, $c);
$maior = max($a, $b, $c);
$meio = ($a + $b + $c) - $menor - $maior;

// Imprime o menor, o valor intermediário e o maior valor
echo $menor . "\n";
echo $meio . "\n";
echo $maior . "\n";
echo "\n";

// Imprime os valores originais na ordem em que foram inseridos
echo $a . "\n";
echo $b . "\n";
echo $c . "\n";

?>
