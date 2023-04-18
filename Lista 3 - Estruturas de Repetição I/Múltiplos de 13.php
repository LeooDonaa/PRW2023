<?php
// Lê os dois números digitados pelo usuário
$x = (int) readline();
$y = (int) readline();

// Inicializa a variável de soma
$soma = 0;

// Determina qual número é o menor e qual é o maior
if ($x < $y) {
    $menor = $x;
    $maior = $y;
} else {
    $menor = $y;
    $maior = $x;
}

// Loop que soma todos os números entre o menor e o maior, exceto os múltiplos de 13
for ($i = $menor; $i <= $maior; $i++) {
    if ($i % 13 != 0) {
        $soma += $i;
    }
}

// Imprime a soma
echo $soma . "\n";
?>
