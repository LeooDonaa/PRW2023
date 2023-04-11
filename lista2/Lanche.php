<?php

// Lê o código do produto e a quantidade do usuário
$input = readline();
[$productCode, $quantity] = explode(" ", $input);

// Usa uma estrutura de switch para definir o preço do produto com base no código informado
switch ($productCode) {
    case 1:
        $price = 4.00;
        break;
    case 2:
        $price = 4.50;
        break;
    case 3:
        $price = 5.00;
        break;
    case 4:
        $price = 2.00;
        break;
    case 5:
        $price = 1.50;
        break;
    default:
        // Se o código do produto for inválido, imprime uma mensagem de erro e encerra o script
        echo "Invalid product code\n";
        exit;
}

// Calcula o total a ser pago pelo cliente multiplicando o preço pelo quantidade
$total = $price * $quantity;

// Formata o total com duas casas decimais e o separador de decimal como ponto
$totalFormatted = number_format($total, 2, ".", "");

// Imprime o total formatado na tela
echo "Total: R$ $totalFormatted\n";

?>
