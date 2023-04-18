<?php

// Lê a operação a ser realizada a partir da entrada do usuário
$operacao = trim(fgets(STDIN));

// Cria uma matriz vazia com 12 linhas e 12 colunas e preenche com valores lidos a partir da entrada do usuário
for ($i = 0; $i < 12; $i++) {
  for ($j = 0; $j < 12; $j++) {
    $matriz[$i][$j] = (float) trim(fgets(STDIN));
  }
}

// Inicializa variáveis para a soma e contagem dos valores abaixo da diagonal secundária da matriz
$soma = 0;
$contador = 0;
for ($i = 0; $i < 12; $i++) {
  for ($j = 0; $j < 12; $j++) {
    if ($j < 11 - $i) { // Verifica se o elemento atual está abaixo da diagonal secundária
      $soma += $matriz[$i][$j];
      $contador++;
    }
  }
}

if ($operacao == "S") {
  // Se a operação for "S", exibe a soma dos valores abaixo da diagonal secundária da matriz com uma casa decimal
  printf("%.1f\n", $soma);
} elseif ($operacao == "M") {
  // Se a operação for "M", calcula a média dos valores abaixo da diagonal secundária da matriz e exibe com uma casa decimal
  $media = $soma / $contador;
  printf("%.1f\n", $media);
}
?>
