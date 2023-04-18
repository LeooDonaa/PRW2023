<?php
// Inicializa contadores para cada tipo de combustível
$alcool = $gasolina = $diesel = 0;

// Loop que solicita que o usuário digite o tipo de combustível abastecido até que o tipo 4 seja digitado
while (true) {
    // Lê o tipo de combustível digitado pelo usuário
    $tipo = (int) readline();
    
    // Incrementa o contador apropriado de acordo com o tipo de combustível digitado
    if ($tipo == 1) {
        $alcool++;
    } elseif ($tipo == 2) {
        $gasolina++;
    } elseif ($tipo == 3) {
        $diesel++;
    } elseif ($tipo == 4) {
        // Se o tipo 4 for digitado, o loop é interrompido
        break;
    }

    // Se o tipo de combustível digitado não for 1, 2, 3 ou 4, o loop continua com a próxima iteração
    if ($tipo < 1 || $tipo > 4) {
        continue;
    }
}

// Imprime a mensagem de agradecimento e os contadores para cada tipo de combustível
echo "MUITO OBRIGADO\n";
echo "Alcool: $alcool\n";
echo "Gasolina: $gasolina\n";
echo "Diesel: $diesel\n";
?>
