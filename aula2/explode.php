<?php
    $data = date('d/m/Y');//21/03/2023
    echo $data."<br>";
    $d = explode('/',$data);

    echo "Dia: ".$d[0]."<br>";
    echo "Mês: ".$d[1]."<br>";
    echo "Ano: ".$d[2]."<br>";

    // utilizar "Explode" para separas as
    // palavras utilizando <ESPAÇO>
    $str = "IFSP Campus Birigui cassio neto  joao rodrigo";

    $e = explode(' ',$str);
    //echo "1 palavra: ".$e[0]."<br>";
    //echo "2 palavra: ".$e[1]."<br>";
    //echo "3 palavra: ".$e[2]."<br>";

    for($i=0; $i<count($e); $i++){
        echo " Posicao ".$i." do vetor ".$e[$i]."<br>";
    }
?>