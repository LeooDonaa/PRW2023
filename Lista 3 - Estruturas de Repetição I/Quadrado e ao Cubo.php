<?php
// Lê o valor de n do usuário
$n = intval(fgets(STDIN));

// Loop que executa de 1 até n
for ($i = 1; $i <= $n; $i++) {
    // Imprime o número atual, seu quadrado e seu cubo, separados por espaços
    echo $i . " " . pow($i, 2) . " " . pow($i, 3) . "\n";
}
?>
