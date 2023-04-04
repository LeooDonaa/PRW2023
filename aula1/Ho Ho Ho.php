<?php

// Lê o número de "Ho" a serem falados
$n = readline();

// Cria uma string com N "Ho"
$ho_string = str_repeat("Ho ", $n);

// Remove o último espaço em branco
$ho_string = rtrim($ho_string);

// Imprime a string de "Ho" junto com o "!"
echo "$ho_string!\n";

// echo $ho_string . "!\n";

?>

