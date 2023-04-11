<?php

while (true) {
  // Lê a entrada do usuário até que uma linha em branco seja digitada
  $input = trim(fgets(STDIN));
  if (!$input) break;

  // Divide a entrada em três variáveis
  list($N, $L, $C) = explode(" ", $input);

  // Divide a próxima linha de entrada em um array de palavras
  $words = explode(" ", trim(fgets(STDIN)));

  // Inicializa as variáveis ​​de página, linha e contagem de caracteres
  $page = 1; 
  $line = 1; 
  $charCount = 0; 

  // Loop através de cada palavra no array de palavras
  foreach ($words as $word) {
    // Obtém o comprimento da palavra atual
    $wordLength = strlen($word);

    // Se a adição da palavra atual ultrapassar o limite de caracteres por linha, inicie uma nova linha
    if ($charCount + $wordLength + ($charCount > 0 ? 1 : 0) > $C) {
      $line++;
      $charCount = 0;
    }

    // Se a página atual tiver mais linhas do que o limite de linhas por página, vá para a próxima página
    if ($line > $L) {
      $page++;
      $line = 1;
    }

    // Adiciona o comprimento da palavra atual à contagem total de caracteres na linha atual
    $charCount += $wordLength + ($charCount > 0 ? 1 : 0);
  }

  // Imprime o número da página atual
  echo $page . "\n";
}

?>
