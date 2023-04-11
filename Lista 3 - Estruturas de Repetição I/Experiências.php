<?php

// Lê o número de casos de teste
$test_cases = intval(fgets(STDIN));

// Inicializa as variáveis
$total = 0;
$ratos = 0;
$sapos = 0;
$coelhos = 0;

// Processa cada caso de teste
for ($i = 0; $i < $test_cases; $i++) {
    // Lê a quantidade e o tipo de cobaia utilizada
    $line = explode(' ', fgets(STDIN));
    $quantidade = intval($line[0]);
    $tipo = trim($line[1]);

    // Atualiza as variáveis de acordo com o tipo de cobaia
    $total += $quantidade; // Atualiza o total de cobaias
    if ($tipo == 'R') { // Se a cobaia é um rato
        $ratos += $quantidade; // Atualiza o total de ratos
    } elseif ($tipo == 'S') { // Se a cobaia é um sapo
        $sapos += $quantidade; // Atualiza o total de sapos
    } elseif ($tipo == 'C') { // Se a cobaia é um coelho
        $coelhos += $quantidade; // Atualiza o total de coelhos
    }
}

// Calcula os percentuais de cada tipo de cobaia
$percentual_ratos = ($ratos / $total) * 100; // Calcula o percentual de ratos
$percentual_sapos = ($sapos / $total) * 100; // Calcula o percentual de sapos
$percentual_coelhos = ($coelhos / $total) * 100; // Calcula o percentual de coelhos

// Imprime os resultados
echo "Total: {$total} cobaias\n"; // Imprime o total de cobaias
echo "Total de coelhos: {$coelhos}\n"; // Imprime o total de coelhos
echo "Total de ratos: {$ratos}\n"; // Imprime o total de ratos
echo "Total de sapos: {$sapos}\n"; // Imprime o total de sapos
echo "Percentual de coelhos: " . number_format($percentual_coelhos, 2) . " %\n"; // Imprime o percentual de coelhos formatado com duas casas decimais
echo "Percentual de ratos: " . number_format($percentual_ratos, 2) . " %\n"; // Imprime o percentual de ratos formatado com duas casas decimais
echo "Percentual de sapos: " . number_format($percentual_sapos, 2) . " %\n"; // Imprime o percentual de sapos formatado com duas casas decimais

?>