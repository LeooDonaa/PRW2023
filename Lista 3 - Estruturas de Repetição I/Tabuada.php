<?php
fscanf(STDIN, "%d\n", $N); // lê um valor inteiro da entrada padrão e armazena na variável $N

for ($i = 1; $i <= 10; $i++) { // laço que percorre os números de 1 a 10
  $resultado = $i * $N; // calcula o resultado da multiplicação entre $i e $N e armazena na variável $resultado
  echo "$i x $N = $resultado\n"; // imprime o resultado da multiplicação formatado na tela
}
?>