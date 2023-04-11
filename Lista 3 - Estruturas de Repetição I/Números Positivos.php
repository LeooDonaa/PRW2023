<?php
$count = 0; // inicializa a variável $count com o valor 0

for ($i = 0; $i < 6; $i++) {
    fscanf(STDIN, "%d", $num); // lê um valor inteiro da entrada padrão e armazena na variável $num
    
    if ($num > 0) { // verifica se o valor de $num é maior que 0
        $count++; // se for, incrementa a variável $count
    }
}

echo "$count valores positivos\n"; // imprime o número de valores positivos encontrados na tela
?>
