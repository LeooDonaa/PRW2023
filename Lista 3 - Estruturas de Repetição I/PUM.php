<?php
// Lê o valor de n do usuário
$n = (int) fgets(STDIN);

// Inicializa a variável count com 1
$count = 1;

// Loop externo que executa n vezes
for ($i = 0; $i < $n; $i++) {
    // Loop interno que executa 3 vezes
    for ($j = 0; $j < 3; $j++) {
        // Imprime o valor atual de count e adiciona um espaço
        echo $count . " ";
        // Incrementa count
        $count++;
    }
    // Imprime "PUM" e adiciona uma quebra de linha
    echo "PUM\n";
    // Incrementa count mais uma vez
    $count++;
}
?>