<?php
// Lê um número inteiro do usuário usando a função fscanf e armazena na variável $X
fscanf(STDIN, "%d", $X);

// Usa uma série de instruções if-elseif para verificar o valor de $X e imprimir o nome do mês correspondente
if ($X == 1) {
    echo "January\n";
} elseif ($X == 2) {
    echo "February\n";
} elseif ($X == 3) {
    echo "March\n";
} elseif ($X == 4) {
    echo "April\n";
} elseif ($X == 5) {
    echo "May\n";
} elseif ($X == 6) {
    echo "June\n";
} elseif ($X == 7) {
    echo "July\n";
} elseif ($X == 8) {
    echo "August\n";
} elseif ($X == 9) {
    echo "September\n";
} elseif ($X == 10) {
    echo "October\n";
} elseif ($X == 11) {
    echo "November\n";
} elseif ($X == 12) {
    echo "December\n";
}
?>
