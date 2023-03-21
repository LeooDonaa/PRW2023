<?php
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y H:i:s');
    $dia = substr($data,0,2);
    echo "Dia: ".$dia. "<br>";

    $data = date('d/m/Y');
    $mes = substr($data,3,2);
    echo "Mês: ".$mes. "<br>";

    $data = date('d/m/Y');
    $ano = substr($data,6,4);
    echo "Ano: ".$ano. "<br>";
?>