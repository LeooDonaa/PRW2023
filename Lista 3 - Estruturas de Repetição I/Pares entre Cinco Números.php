<?php
$count = 0; // inicializa a variável $count com o valor 0

for ($i = 0; $i < 5; $i++) {
    fscanf(STDIN, "%d", $num); // lê um valor inteiro da entrada padrão e armazena na variável $num
    
    if ($num % 2 == 0) { // verifica se o valor de $num é par
        $count++; // se for, incrementa a variável $count
    }
}

echo "$count valores pares\n"; // imprime o número de valores pares encontrados na tela
?>
