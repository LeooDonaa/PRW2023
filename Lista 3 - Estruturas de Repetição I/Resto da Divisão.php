<?php
// Lê os dois números digitados pelo usuário
$x = (int) readline();
$y = (int) readline();

// Verifica qual número é o menor e o maior e, se necessário, os troca
if ($x > $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

// Loop que itera sobre todos os números entre x e y (excluindo ambos)
for ($i = $x + 1; $i < $y; $i++) {
    // Verifica se o número é da forma 5k + 2 ou 5k + 3, para k inteiro
    if (($i % 5 == 2) || ($i % 5 == 3)) {
        // Imprime o número
        echo $i . "\n";
    }
}
?>
