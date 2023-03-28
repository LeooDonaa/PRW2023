<?php

$X[0] = readline();

for ($i = 1; $i < 10; $i++) {
    $X[$i] = 2 * $X[$i-1];
}

for ($i = 0; $i < 10; $i++) {
    echo "N[$i] = " . $X[$i] . "\n";
}
?>