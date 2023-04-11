<?php

// Lê os valores de hora inicial, minuto inicial, hora final e minuto final e armazena em $hi, $mi, $hf e $mf, respectivamente.
list($hi, $mi, $hf, $mf) = explode(" ", fgets(STDIN));

// Converte a hora inicial e final para minutos e calcula o tempo de duração do jogo em minutos
$inicio = $hi * 60 + $mi; 
$fim = $hf * 60 + $mf; 
if ($inicio >= $fim) { 
    $fim += 1440; // Adiciona um dia (24 horas) em minutos caso a hora final seja menor que a inicial
}
$duracao = $fim - $inicio; 

// Converte a duração do jogo em horas e minutos
$horas = intdiv($duracao, 60); // Calcula as horas inteiras
$minutos = $duracao % 60; // Calcula o restante dos minutos

// Imprime o resultado
echo "O JOGO DUROU " . $horas . " HORA(S) E " . $minutos . " MINUTO(S)\n";


?>