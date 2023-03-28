<?php

$X = [];

for ($i = 0; $i < 10; $i++) {
    $x = intval(fgets(STDIN));
    if ($x <= 0) {
        $x = 1;
    }
    $X[] = $x;
}

foreach ($X as $key => $value) {
    echo "X[$key] = $value\n";
} 

?>