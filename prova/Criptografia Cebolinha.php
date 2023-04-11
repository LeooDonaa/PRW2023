<?php 

$numero_de_frases = readline();

for ($i=0;$i<$numero_de_frases;$i++){
    $frase_original = readline();
    
    // Separa a frase em palavras e inverte a ordem das palavras
    $palavras = explode(" ", $frase_original);
    $palavras_invertidas = array_reverse($palavras);
    
    // Substitui algumas letras de cada palavra invertida
    $palavras_substituidas = array_map(function ($palavra) {
        $palavra = str_replace("P", "B", $palavra);
        $palavra = str_replace("F", "V", $palavra);
        $palavra = str_replace("T", "D", $palavra);
        $palavra = str_replace("R", "L", $palavra);
        $palavra = str_replace("J", "Z", $palavra);
        $palavra = str_replace("X", "S", $palavra);
        return $palavra;
    }, $palavras_invertidas);
    
    // Junta as palavras invertidas e modificadas em uma única frase
    $frase_modificada = implode(" ", $palavras_substituidas);
    
    echo $frase_modificada . PHP_EOL; // PHP_EOL insere uma quebra de linha
}

?>