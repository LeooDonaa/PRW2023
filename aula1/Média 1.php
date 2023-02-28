<?php
$a = readline();
$b = readline();

$prod = (($a * 3.5 + $b * 7.5) / 11);
$prod = number_format($prod, 5, ".", "");
echo "MEDIA = $prod\n";

?>