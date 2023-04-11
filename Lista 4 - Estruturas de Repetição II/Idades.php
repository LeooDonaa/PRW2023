<?php
// Variáveis para armazenar a soma das idades lidas e a quantidade de idades lidas.
$sum = 0;
$count = 0;

// Loop que lê as idades da entrada padrão até que uma idade negativa seja lida.
while (true) {
    fscanf(STDIN, "%d", $age);
    if ($age < 0) {
        break;
    }
    $sum += $age;
    $count++;
}

// Variável para armazenar a média das idades.
$avg = $sum / $count;

// Imprime a média das idades com duas casas decimais e pula para a próxima linha.
printf("%.2f\n", $avg);
?>
