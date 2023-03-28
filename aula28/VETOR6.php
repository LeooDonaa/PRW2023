<?php
$x = readline();

$n = [];

for ($i = 0; $i < 1000; $i++) {
    $n[$i] = $i % $x;
    echo "N[$i] = " . $n[$i] . "\n";
}

?>