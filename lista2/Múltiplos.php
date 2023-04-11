<?php
// Recebe dois números inteiros digitados pelo usuário
fscanf(STDIN, "%d %d", $A, $B);

// Verifica se A é múltiplo de B ou se B é múltiplo de A
if ($A % $B == 0 || $B % $A == 0) {
    echo "Sao Multiplos\n"; // Imprime se são múltiplos
} else {
    echo "Nao sao Multiplos\n"; // Imprime se não são múltiplos
}
?>