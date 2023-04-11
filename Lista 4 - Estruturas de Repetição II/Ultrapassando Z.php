<?php
// Lê um número inteiro da entrada padrão.
fscanf(STDIN, "%d", $x);

// Lê um segundo número inteiro da entrada padrão até que seja maior do que $x.
do {
    fscanf(STDIN, "%d", $z);
} while ($z <= $x);

// Variáveis para contar quantos números devem ser somados e qual é a soma total.
$sum = 0;
$count = 0;

// Loop que adiciona números à soma até que ela seja maior do que $z.
while ($sum <= $z) {
    $sum += $x;
    $x++;
    $count++;
}

// Imprime a quantidade de números que foram somados.
echo $count . "\n";
?>
