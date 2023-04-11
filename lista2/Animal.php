<?php
// Define várias strings que serão usadas no programa para comparar informações fornecidas pelo usuário
$c1 = "vertebrado";
$c11 = "ave";
$c12 = "mamifero";
$c111 = "carnivoro";
$c112 = "onivoro";
$c124 = "herbivoro";
$a1 = "aguia";
$a2 = "pomba";
$a3 = "homem";
$a4 = "vaca";
$c2 = "invertebrado";
$c21 = "inseto";
$c22 = "anelideo";
$c211 = "hematofago";
$a5 = "pulga";
$a6 = "lagarta";
$a7 = "sanguessuga";
$a8 = "minhoca";

// Lê a entrada do usuário
fscanf(STDIN, "%s", $a);

// Verifica se o animal é um vertebrado
if ($a == $c1) {
    fscanf(STDIN, "%s", $b);
    
    // Verifica se o animal é uma ave
    if ($b == $c11) {
        fscanf(STDIN, "%s", $c);
        
        // Verifica se a ave é carnivora
        if ($c == $c111) {
            echo "$a1\n";
        } 
        // Verifica se a ave é onivora
        elseif ($c == $c112) {
            echo "$a2\n";
        }
    }
    
    // Verifica se o animal é um mamifero
    if ($b == $c12) {
        fscanf(STDIN, "%s", $c);
        
        // Verifica se o mamifero é onivoro
        if ($c == $c112) {
            echo "$a3\n";
        } 
        // Verifica se o mamifero é herbivoro
        elseif ($c == $c124) {
            echo "$a4\n";
        }
    }
} 
// Verifica se o animal é um invertebrado
elseif ($a == $c2) {
    fscanf(STDIN, "%s", $b);
    
    // Verifica se o animal é um inseto
    if ($b == $c21) {
        fscanf(STDIN, "%s", $c);
        
        // Verifica se o inseto é hematofago
        if ($c == $c211) {
            echo "$a5\n";
        } 
        // Verifica se o inseto é herbivoro
        elseif ($c == $c124) {
            echo "$a6\n";
        }
    }
    
    // Verifica se o animal é um anelídeo
    if ($b == $c22) {
        fscanf(STDIN, "%s", $c);
        
        // Verifica se o anelídeo é hematofago
        if ($c == $c211) {
            echo "$a7\n";
        } 
        // Verifica se o anelídeo é onivoro
        elseif ($c == $c112) {
            echo "$a8\n";
        }
    }
}
?>
