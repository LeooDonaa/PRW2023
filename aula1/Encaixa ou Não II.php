// echo $cor . "\n";

<?php
  // leitura dos valores de entrada
  $linhas = readline();
  $colunas = readline();

  // cálculo da cor da última casa
  $soma = $linhas + $colunas;
  $cor = $soma % 2 == 0 ? 1 : 0;

  // exibição do resultado
  echo "$cor\n";

?>


