<?php
// Lê o valor X
$X = floatval(fgets(STDIN));

// Cria um vetor N com 100 elementos, onde o primeiro elemento é X
$N = array($X);

// Preenche as posições subsequentes de N com a metade do valor anterior
for ($i = 1; $i < 100; $i++) {
    $N[] = $N[$i-1]/2;
}

// Imprime o vetor N formatado com 4 casas decimais
for ($i = 0; $i < 100; $i++) {
    printf("N[%d] = %.4f\n", $i, $N[$i]);
}
?>
