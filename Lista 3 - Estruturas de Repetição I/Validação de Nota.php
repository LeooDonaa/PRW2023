<?php
// Inicialização das variáveis de notas com valor inválido
$nota1 = -1; 
$nota2 = -1; 

// Loop para solicitar a entrada da primeira nota até que um valor válido seja inserido
while ($nota1 < 0 || $nota1 > 10) {
    $nota1 = (float) readline("Digite a primeira nota: ");
    if ($nota1 < 0 || $nota1 > 10) {
        echo "nota invalida\n";
    }
}

// Loop para solicitar a entrada da segunda nota até que um valor válido seja inserido
while ($nota2 < 0 || $nota2 > 10) {
    $nota2 = (float) readline("Digite a segunda nota: ");
    if ($nota2 < 0 || $nota2 > 10) {
        echo "nota invalida\n";
    }
}

// Cálculo da média e exibição do resultado
$media = ($nota1 + $nota2) / 2;
echo "media = " . number_format($media, 2) . "\n";
?>
