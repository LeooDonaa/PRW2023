<?php
fscanf(STDIN, "%d\n", $N); // lê um valor inteiro da entrada padrão e armazena na variável $N

for ($i = 1; $i <= 10000; $i++) { // laço que percorre os números de 1 a 10000
    if ($i % $N == 2) { // verifica se o resto da divisão de $i por $N é igual a 2
        echo $i . "\n"; // se for, imprime $i na tela
    }
}
?>