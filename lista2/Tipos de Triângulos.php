<?php
// Lendo as entradas A, B e C
fscanf(STDIN, "%f %f %f", $A, $B, $C);

// Ordenando os lados em ordem decrescente
$lados = [$A, $B, $C];
rsort($lados);
list($A, $B, $C) = $lados;

// Verificando se os lados formam um triângulo
if ($A >= $B + $C) {
    echo "NAO FORMA TRIANGULO\n";
} else {
    // Verificando se é um triângulo retângulo
    if (pow($A, 2) == pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO RETANGULO\n";
    }
    // Verificando se é um triângulo obtusângulo
    if (pow($A, 2) > pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO OBTUSANGULO\n";
    }
    // Verificando se é um triângulo acutângulo
    if (pow($A, 2) < pow($B, 2) + pow($C, 2)) {
        echo "TRIANGULO ACUTANGULO\n";
    }
    // Verificando se é um triângulo equilátero
    if ($A == $B && $B == $C) {
        echo "TRIANGULO EQUILATERO\n";
    }
    // Verificando se é um triângulo isósceles
    if (($A == $B && $A != $C) || ($A == $C && $A != $B) || ($B == $C && $B != $A)) {
        echo "TRIANGULO ISOSCELES\n";
    }
}
?>
