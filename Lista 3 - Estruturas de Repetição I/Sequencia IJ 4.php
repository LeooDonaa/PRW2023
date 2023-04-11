<?php
    $i = 0;
    $j = 1;
    while ($i <= 2) {
        for ($x = 1; $x <= 3; $x++) {
            printf("I=%.1f J=%.1f\n", $i, $j);
            $j++;
        }
        $i += 0.2;
        $j -= 3;
        $j += 0.2;
    }
?>