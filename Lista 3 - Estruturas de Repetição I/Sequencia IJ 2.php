<?php
$num1; // Define a variável $num1 sem atribuir um valor inicial (não é necessário)
$num2; // Define a variável $num2 sem atribuir um valor inicial (não é necessário)

// Loop externo que executa enquanto $num1 for menor ou igual a 9, incrementando $num1 de 2 em 2 a cada iteração
for ($num1 = 1; $num1 <= 9; $num1 += 2) {
    // Loop interno que executa enquanto $num2 for maior ou igual a 5, decrementando $num2 de 1 em 1 a cada iteração
    for ($num2 = 7; $num2 >= 5; $num2--) {
        printf("I=%d J=%d\n", $num1, $num2); // Imprime os valores de $num1 e $num2 formatados
    }
}
?>
