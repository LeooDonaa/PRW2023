<?php

// lê o valor de N
$n = intval(fgets(STDIN));

// percorre todos os números de 1 a N
for ($i = 1; $i <= $n; $i++) {
  // verifica se o número é divisor de N
  if ($n % $i == 0) {
    // se for divisor, imprime na tela
    echo $i . "\n";
  }
}

?>