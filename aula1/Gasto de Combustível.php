<?php

$tempo = readline();
$velocidadeMedia = readline();

$distancia = $tempo * $velocidadeMedia;
$litros = $distancia / 12;

echo number_format($litros, 3, '.', '') . "\n";

?>
