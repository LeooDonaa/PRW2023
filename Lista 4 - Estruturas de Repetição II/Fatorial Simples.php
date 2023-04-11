<?php

// Lê um número inteiro da entrada padrão.
fscanf(STDIN, "%d", $n);

// Se o número lido for menor ou igual a zero, ou maior ou igual a 13, encerra o programa.
if ($n <= 0 || $n >= 13) {
  exit();
}

// Variável para armazenar o resultado do fatorial.
$fat = 1;

// Loop que calcula o fatorial do número lido.
for ($i = $n; $i >= 1; $i--) {
  $fat *= $i;
}

// Imprime o resultado do fatorial e pula para a próxima linha.
echo $fat . "\n";

?>
