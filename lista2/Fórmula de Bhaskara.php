<?php

// Lê três números do usuário
fscanf(STDIN, "%f %f %f", $a, $b, $c);

// Calcula o valor de delta usando a fórmula geral de uma equação do segundo grau
$delta = pow($b, 2) - 4 * $a * $c;

// Verifica se o valor de a é igual a zero ou se delta é menor que zero
if ($a == 0 || $delta < 0) {
    // Se a condição for verdadeira, imprime uma mensagem informando que é impossível calcular as raízes
    echo "Impossivel calcular\n";
} else {
    // Caso contrário, calcula as duas raízes usando a fórmula de Bhaskara
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);

    // Imprime as raízes com cinco casas decimais de precisão
    printf("R1 = %.5f\n", $x1);
    printf("R2 = %.5f\n", $x2);
}

?>
