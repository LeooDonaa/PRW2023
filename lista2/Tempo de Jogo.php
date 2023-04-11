<?php

// Lendo as horas iniciais e finais do jogo
fscanf(STDIN, "%d %d", $horaInicial, $horaFinal);

// Calculando a duração do jogo em horas
$duracao = $horaFinal - $horaInicial;

// Se a duração for menor ou igual a zero, adiciona 24 horas
if ($duracao <= 0) {
    $duracao += 24;
}

// Imprimindo a duração do jogo em horas
echo "O JOGO DUROU $duracao HORA(S)\n";

?>