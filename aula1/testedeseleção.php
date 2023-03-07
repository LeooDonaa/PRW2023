<?php
$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = intval(fgets(STDIN));
$d = intval(fgets(STDIN));

if (($b > $c) && ($d > $a) && (($c + $d) > ($a + $b)) && ($c > 0) && ($d > 0) && ($a % 2 == 0)) {
  echo "Valores aceitos\n";
} else {
  echo "Valores nao aceitos\n";
}
?>
