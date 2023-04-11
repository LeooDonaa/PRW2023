<?php

// Lê um número do usuário
$valor = floatval(fgets(STDIN));

// Verifica se o valor está no intervalo [0,25]
if ($valor >= 0 && $valor <= 25) {
    // Se a condição for verdadeira, imprime uma mensagem informando que o valor está no intervalo [0,25]
    echo "Intervalo [0,25]\n";
} elseif ($valor > 25 && $valor <= 50) {
    // Caso contrário, verifica se o valor está no intervalo (25,50]
    echo "Intervalo (25,50]\n";
} elseif ($valor > 50 && $valor <= 75) {
    // Verifica se o valor está no intervalo (50,75]
    echo "Intervalo (50,75]\n";
} elseif ($valor > 75 && $valor <= 100) {
    // Verifica se o valor está no intervalo (75,100]
    echo "Intervalo (75,100]\n";
} else {
    // Se nenhuma das condições anteriores for verdadeira, imprime uma mensagem informando que o valor está fora do intervalo
    echo "Fora de intervalo\n";
}

?>
