<?php

// Recebe as notas do usuário
$notas = fgets(STDIN);
$notas = explode(" ", $notas);
$n1 = floatval($notas[0]);
$n2 = floatval($notas[1]);
$n3 = floatval($notas[2]);
$n4 = floatval($notas[3]);

// Calcula a média ponderada das notas
$media = ($n1*2 + $n2*3 + $n3*4 + $n4*1) / 10;
$media = number_format(intval($media*10)/10,1,".",""); // Formata a média com uma casa decimal

echo "Media: $media\n"; // Imprime a média
if($media>=7){
    echo "Aluno aprovado.\n"; // Se a média é maior ou igual a 7, imprime "Aluno aprovado"
} else if ($media <5){
    echo "Aluno reprovado.\n"; // Se a média é menor que 5, imprime "Aluno reprovado"
} 
else {
    echo "Aluno em exame.\n"; // Se a média está entre 5 e 7, imprime "Aluno em exame"
    $ne = floatval(fgets(STDIN)); // Recebe a nota do exame do usuário
    echo "Nota do exame: ".number_format($ne,1,".","")."\n"; // Imprime a nota do exame com uma casa decimal

    $media = number_format(($media + $ne)/2,1,".",""); // Calcula a nova média com a nota do exame

    if($media >= 5){
        echo "Aluno aprovado.\n"; // Se a nova média é maior ou igual a 5, imprime "Aluno aprovado"
    } else {
        echo "Aluno reprovado.\n"; // Se a nova média é menor que 5, imprime "Aluno reprovado"
    }
    echo "Media final: $media\n"; // Imprime a nova média
}

?>