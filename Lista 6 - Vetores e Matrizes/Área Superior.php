<?php

// Lê a operação a ser realizada (S ou M)
$operacao = trim(fgets(STDIN));

// Lê a matriz 12x12 de números
$matriz = array();
for ($i = 0; $i < 12; $i++) {
  $linha = array();
  for ($j = 0; $j < 12; $j++) {
    $linha[] = floatval(trim(fgets(STDIN)));
  }
  $matriz[] = $linha;
}

// Inicializa as variáveis de soma e contador
$soma = 0;
$contador = 0;

// Percorre os elementos acima da diagonal secundária da matriz
for ($i = 0; $i < 6; $i++) { // linha
  for ($j = $i + 1; $j < 11 - $i; $j++) { // coluna
    $soma += $matriz[$i][$j];
    $contador++;
  }
}

// Calcula a média, se a operação for 'M'
if ($operacao == 'M') {
  $resultado = $soma / $contador;
} else { // caso contrário, o resultado é a soma
  $resultado = $soma;
}

// Imprime o resultado com uma casa decimal
echo number_format($resultado, 1, '.', '') . "\n";

?>
