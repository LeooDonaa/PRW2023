<?php
// Lê os três valores fornecidos como entrada padrão
fscanf(STDIN, "%f %f %f", $A, $B, $C);

// Verifica se os valores formam um triângulo válido
if ($A + $B > $C && $A + $C > $B && $B + $C > $A) {
    // Se sim, calcula o perímetro e imprime na tela
    $perimetro = $A + $B + $C;
    echo "Perimetro = " . number_format($perimetro, 1) . "\n";
} else {
    // Se não, calcula a área e imprime na tela
    $area = (($A + $B) * $C) / 2;
    echo "Area = " . number_format($area, 1) . "\n";
}
?>