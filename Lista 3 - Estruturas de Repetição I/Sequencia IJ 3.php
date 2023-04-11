<?php
$num = 1; // Inicializa a variável $num com o valor 1
$cont = 7; // Inicializa a variável $cont com o valor 7

// Loop que executa enquanto $num for menor ou igual a 9
while ($num <= 9) {
    // Imprime os valores de $num e $cont formatados, e decrementa $cont em 1 a cada impressão
    printf("I=%d J=%d\n", $num, $cont--);
    printf("I=%d J=%d\n", $num, $cont--);
    printf("I=%d J=%d\n", $num, $cont--);

    // Incrementa $num em 2 e incrementa $cont em 5
    $num += 2;
    $cont += 5;
}
?>