<?php
$num1 = 1; // Define o valor inicial de num1 como 1
$num2 = 60; // Define o valor inicial de num2 como 60

// Loop que executa enquanto num2 for menor ou igual a 60
for ($num1 = 1, $num2 = 60; $num2 <= 60; $num1 += 3, $num2 -= 5) {
    printf("I=%d J=%d\n", $num1, $num2); // Imprime os valores de num1 e num2 formatados
    if ($num2 == 0) // Se num2 for igual a zero, sai do loop
        break;
}
?>
