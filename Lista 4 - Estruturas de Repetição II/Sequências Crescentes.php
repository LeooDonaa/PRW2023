<?php

// Loop infinito que só é interrompido quando $x for igual a 0.
while (true) {
    // Lê uma linha da entrada padrão e a converte em um número inteiro.
    $x = (int) fgets(STDIN);

    // Se $x for igual a 0, sai do loop.
    if ($x == 0) {
        break;
    }

    // Variável para armazenar a saída a ser impressa.
    $output = '';

    // Loop que cria uma string com os números de 1 a $x separados por espaço.
    for ($i = 1; $i <= $x; $i++) {
        $output .= $i . ' ';
    }

    // Remove o espaço em branco após o último valor.
    $output = rtrim($output);

    // Imprime a saída e pula para a próxima linha.
    echo $output . "\n";
}

?>
