<?php
function leds($numero) {
    // Array com a quantidade de LEDs necessários para representar cada dígito (0-9)
    $ledsPorNumero = array(
        6, 
        2, 
        5, 
        5, 
        4, 
        5, 
        6, 
        3, 
        7, 
        6, 
    );
    
    $totalLeds = 0;
    
    // Loop pelos dígitos do número
    for ($i = 0; $i < strlen($numero); $i++) {
        // Obtém o valor do dígito como um inteiro
        $digito = intval($numero[$i]);
        
        // Adiciona a quantidade de LEDs necessários para representar o dígito ao total de LEDs
        $totalLeds += $ledsPorNumero[$digito];
    }
    
    return $totalLeds;
}


$n = intval(fgets(STDIN));

// Loop pelos casos de teste
for ($i = 0; $i < $n; $i++) {
    // Lê o valor do número como uma string
    $valor = trim(fgets(STDIN));
    
    // Calcula a quantidade de LEDs necessários para representar o número
    $totalLeds = leds($valor);
    
    // Imprime o resultado
    echo $totalLeds . " leds\n";
}
?>
