<?php
// Lê o número de casos de teste a serem executados
$testCase = intval(trim(fgets(STDIN)));

while ($testCase--) {
  // Lê a entrada atual do usuário
  $a = trim(fgets(STDIN));

  // Verifica se a entrada tem exatamente 5 caracteres, se sim, imprime 3 e passa para a próxima entrada
  if (strlen($a) == 5) {
    echo "3\n";
  } else {
    // Inicializa a contagem de caracteres correspondentes como 0
    $cnt = 0;

    // Verifica se cada caractere da entrada corresponde às letras 'one', incrementando a contagem de correspondências, se for o caso
    if ($a[0] == 'o') {
      $cnt++;
    }
    if ($a[1] == 'n') {
      $cnt++;
    }
    if ($a[2] == 'e') {
      $cnt++;
    }

    // Se houver pelo menos 2 caracteres correspondentes, imprime 1, caso contrário, imprime 2
    if ($cnt >= 2) {
      echo "1\n";
    } else {
      echo "2\n";
    }
  }
}
?>
