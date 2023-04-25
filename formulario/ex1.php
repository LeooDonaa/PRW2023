<?php

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calc = $_GET['calc'];
    $resul = 0;

    if($calc == "somar"){
        $resul = $num1 + $num2;
    } else if($calc == "sub"){
        $resul = $num1 - $num2;
    } else if($calc == "mult"){
        $resul = $num1 * $num2;
    } else if($calc == "div"){
        $resul = $num1 / $num2;
    }

    echo "<h1>Resultado: $resul</h1>";

?>