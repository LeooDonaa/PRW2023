<?php

// Declaração de duas arrays para armazenar os números pares e ímpares
$pares = array();
$impares = array();

// Declaração de duas variáveis para contar quantos números pares e ímpares já foram inseridos
$countPares = 0;
$countImpares = 0;

// Loop para solicitar a entrada de 15 valores
for ($i = 0; $i < 15; $i++) {
  
  // Solicita a entrada do valor
  $valor = intval(fgets(STDIN));
  
  // Verifica se o valor é par
  if ($valor % 2 == 0) {
    
    // Insere o valor na array de pares
    array_push($pares, $valor);
    
    // Incrementa o contador de pares
    $countPares++;
    
    // Verifica se já foram inseridos 5 números pares
    if ($countPares == 5) {
      
      // Loop para imprimir os 5 números pares armazenados na array de pares
      for ($j = 0; $j < 5; $j++) {
        echo "par[{$j}] = {$pares[$j]}\n";
      }
      
      // Reseta o contador de pares para 0 e esvazia a array de pares
      $countPares = 0;
      $pares = array();
    }
  } 
  // Se o valor não for par, é ímpar
  else {
    
    // Insere o valor na array de ímpares
    array_push($impares, $valor);
    
    // Incrementa o contador de ímpares
    $countImpares++;
    
    // Verifica se já foram inseridos 5 números ímpares
    if ($countImpares == 5) {
      
      // Loop para imprimir os 5 números ímpares armazenados na array de ímpares
      for ($j = 0; $j < 5; $j++) {
        echo "impar[{$j}] = {$impares[$j]}\n";
      }
      
      // Reseta o contador de ímpares para 0 e esvazia a array de ímpares
      $countImpares = 0;
      $impares = array();
    }
  }
}

// Imprime os números ímpares restantes que não formaram um conjunto completo de 5
for ($i = 0; $i < $countImpares; $i++) {
  echo "impar[{$i}] = {$impares[$i]}\n";
}

// Imprime os números pares restantes que não formaram um conjunto completo de 5
for ($i = 0; $i < $countPares; $i++) {
  echo "par[{$i}] = {$pares[$i]}\n";
}

?>