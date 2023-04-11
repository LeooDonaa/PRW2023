<?php
// inicializa as variáveis de contagem e soma dos valores positivos
$count = 0; // contagem inicializada com 0
$sum = 0; // soma inicializada com 0

// laço para ler os 6 valores
for ($i = 0; $i < 6; $i++) {
    fscanf(STDIN, "%f", $num); // lê um valor float da entrada padrão e armazena na variável $num
    
    // verifica se o número é positivo
    if ($num > 0) {
        // se for positivo, incrementa a contagem e soma o valor à soma total
        $count++;
        $sum += $num;
    }
}

// calcula a média dos valores positivos
$average = $sum / $count;

// imprime o resultado na tela
echo "$count valores positivos\n"; // imprime o número de valores positivos encontrados na tela
echo number_format($average, 1, '.', '') . "\n"; // imprime a média formatada com uma casa decimal e ponto como separador decimal
?>
