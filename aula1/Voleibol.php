<?php

// Ler o número de jogadores
$n = intval(fgets(STDIN));

// Criar uma matriz para armazenar os dados dos jogadores
$jogadores = array();

// Ler os dados dos jogadores
for ($i = 0; $ $i < $n; $i++) {
  // Ler o nome do jogador
  $nome = trim(fgets(STDIN));

  // Ler os dados do jogador
  $dados = array();
  $dados['saques'] = array_sum(explode(' ', trim(fgets(STDIN))));
  $dados['saques_sucesso'] = array_sum(explode(' ', trim(fgets(STDIN))));
  $dados['bloqueios'] = array_sum(explode(' ', trim(fgets(STDIN))));
  $dados['bloqueios_sucesso'] = array_sum(explode(' ', trim(fgets(STDIN))));
  $dados['ataques'] = array_sum(explode(' ', trim(fgets(STDIN))));
  $dados['ataques_sucesso'] = array_sum(explode(' ', trim(fgets(STDIN))));

  // Adicionar os dados do jogador à matriz
  $jogadores[$nome] = $dados;
}

// Calcular as estatísticas do time todo
$total_saques = 0;
$total_saques_sucesso = 0;
$total_bloqueios = 0;
$total_bloqueios_sucesso = 0;
$total_ataques = 0;
$total_ataques_sucesso = 0;

foreach ($jogadores as $dados) {
  $total_saques += $dados['saques'];
  $total_saques_sucesso += $dados['saques_sucesso'];
  $total_bloqueios += $dados['bloqueios'];
  $total_bloqueios_sucesso += $dados['bloqueios_sucesso'];
  $total_ataques += $dados['ataques'];
  $total_ataques_sucesso += $dados['ataques_sucesso'];
}

// Calcular o percentual de sucesso para cada tipo de jogada
$percentual_saques = $total_saques == 0 ? 0 : ($total_saques_sucesso / $total_saques) * 100;
$percentual_bloqueios = $total_bloqueios == 0 ? 0 : ($total_bloqueios_sucesso / $total_bloqueios) * 100;
$percentual_ataques = $total_ataques == 0 ? 0 : ($total_ataques_sucesso / $total_ataques) * 100;

// Imprimir os resultados
echo "Saques: " . number_format($percentual_saques, 2) . "%\n";
echo "Bloqueios: " . number_format($percentual_bloqueios, 2) . "%\n";
echo "Ataques: " . number_format($percentual_ataques, 2) . "%\n";

?>
