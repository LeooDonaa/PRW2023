<?php


while(true){
    // Lê o número de linhas do texto
    $n = intval(fgets(STDIN));
    
    if($n == 0){
        // Encerra a execução do programa quando N = 0
        break;
    }
    
    // Lê todas as linhas do texto
    $texto = array();
    for($i = 0; $i < $n; $i++){
        $linha = rtrim(fgets(STDIN));
        $texto[] = $linha;
    }
    
    // Formata o texto e justifica as linhas à direita
    $largura_maxima = 50; // Largura máxima do texto (em caracteres)
    $texto_formatado = array();
    ($texto as $linha){
        // Remove espaços extras entre as palavras
        $linha = preg_replace('/\s+/', ' ', $linha);
        
        // Quebra a linha em palavras
        $palavras = explode(' ', $linha);
        
        // Inicializa a linha formatada
        $linha_formatada = '';
        
        // Adiciona espaços à esquerda da linha para justificá-la à direita
        $espacos_esquerda = str_repeat(' ', $largura_maxima - strlen($linha));
        $linha_formatada .= $espacos_esquerda;
        
        // Adiciona as palavras da linha formatada com um espaço entre elas
        $linha_formatada .= implode(' ', $palavras);
        
        // Adiciona a linha formatada ao texto formatado
        $texto_formatado[] = $linha_formatada;


    /*$n = 1

    for($n=0; $n<count($e); $n++){
        echo " Posicao ".$i." do vetor ".$e[$i]."<br>";
    }*/

?>