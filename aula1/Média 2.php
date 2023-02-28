<?php
$a = readline();
$b = readline();
$c = readline();

$prod = (($a * 2 + $b * 3 + $c * 5) / 10 );
$prod = number_format($prod, 1, ".", "");
echo "MEDIA = $prod\n";

?>