<?php
fscanf(STDIN, "%f %f", $x, $y); // Lê dois números de ponto flutuante e atribui a $x e $y.

if ($x == 0 && $y == 0) { // Verifica se $x e $y são zero, se sim, está na origem.
    echo "Origem\n";
} elseif ($x == 0) { // Verifica se $x é zero, se sim, está no eixo Y.
    echo "Eixo Y\n";
} elseif ($y == 0) { // Verifica se $y é zero, se sim, está no eixo X.
    echo "Eixo X\n";
} elseif ($x > 0 && $y > 0) { // Verifica se $x e $y são positivos, se sim, está no primeiro quadrante.
    echo "Q1\n";
} elseif ($x < 0 && $y > 0) { // Verifica se $x é negativo e $y é positivo, se sim, está no segundo quadrante.
    echo "Q2\n";
} elseif ($x < 0 && $y < 0) { // Verifica se $x e $y são negativos, se sim, está no terceiro quadrante.
    echo "Q3\n";
} else { // Caso contrário, está no quarto quadrante.
    echo "Q4\n";
}
?>
