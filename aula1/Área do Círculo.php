<?php
	$pi = 3.14159;
    $raio = readline();

    $a = $pi * ($raio * $raio);
    $a = number_format($a, 4, ".","");
    echo "A=$a\n";
?>