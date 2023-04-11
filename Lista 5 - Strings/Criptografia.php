<?php
// Lê o valor inteiro N a partir do input padrão (STDIN)
fscanf(STDIN, "%d\n", $N);

for ($i = 0; $i < $N; $i++) {
    // Lê a próxima linha do input padrão (STDIN)
    $line = fgets(STDIN);

    // Remove os espaços em branco no início e no final da string
    $line = trim($line);

    // Obtém o comprimento da string
    $length = strlen($line);

    // Primeira passada: adiciona 3 ao código ASCII de cada letra
    for ($j = 0; $j < $length; $j++) {
        if (ctype_alpha($line[$j])) {
            $line[$j] = chr(ord($line[$j]) + 3);
        }
    }

    // Segunda passada: inverte a string
    $line = strrev($line);

    // Terceira passada: subtrai 1 do código ASCII dos caracteres a partir da metade da string
    for ($j = (int)($length / 2); $j < $length; $j++) {
        $line[$j] = chr(ord($line[$j]) - 1);
    }

    // Imprime a string modificada
    echo "$line\n";
}
?>
