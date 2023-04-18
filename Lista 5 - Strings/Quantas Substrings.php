<?php

// função para calcular o número de substrings diferentes
function contarSubstrings($string) {
    $n = strlen($string);
    $count = 0;
    $s = array_fill(0, $n, "");
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            $s[$j-$i] .= $string[$j];
            if (count(array_unique(str_split($s[$j-$i]))) == ($j-$i+1)) {
                $count++;
            } else {
                break;
            }
        }
    }
    return $count;
}

// leitura e processamento dos casos de teste
while ($line = fgets(STDIN)) {
    $string = "";
    for ($i = 0; $i < strlen($line); $i++) {
        if ($line[$i] == "?") {
            echo contarSubstrings($string) . PHP_EOL;
        } else {
            $string .= $line[$i];
        }
    }
}
