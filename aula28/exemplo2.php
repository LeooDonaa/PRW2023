<?php

//exemplo para percorrer elementos de um vetor
$alunos = array("Murilo", "Cássio", "Ricardo", "João",); 
print_r($alunos); // imprime todos os elementos do vetor
echo "<br>";
echo "Quantidade de elementos: ", count($alunos)."<br>";
echo "<hr>";
for($x = 0; $x < count($alunos); $x++)
{
    echo "Aluno na posição $x: ".$alunos[$x]."<br>";
    echo "quantidade de caracters: ".strlen($alunos[$x])."<br>";
    echo "<hr>";
}

$indice = array_search("Cássio",$alunos); // busca um elemento no vetor
if($indice === false)
    echo "Elemento não encontrado!<br>";
else
    echo "Elementos entrado na posição $indice!<br>";

?>