<?php
while (true) {
    // Lê dois valores a partir do input padrão (STDIN)
    fscanf(STDIN, "%d %s", $D, $N);

    // Verifica se os valores são iguais a 0 e '0', respectivamente, para encerrar o loop
    if ($D == 0 && $N == '0') {
        break;
    }

    // Remove todas as ocorrências de $D da string $N
    $N = str_replace($D, '', $N);

    // Remove os zeros à esquerda da string $N
    $N = ltrim($N, '0');

    // Se a string $N estiver vazia, atribui o valor '0' a ela
    if ($N == '') {
        $N = '0';
    }

    // Imprime a string $N
    echo "$N\n";
}
?>
