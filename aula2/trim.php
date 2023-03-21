<?php
    //trim - remove espaços do inicio ou fim
    //strlen - retorna o número de caracteres 
    $str = "  IFSP Birigui  ";
    echo "Tamanho: ".strlen($str)."<br>";
    $str = trim($str);
    echo "Tamanho: ".strlen($str)."<br>";
?>