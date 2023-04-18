<?php
// read the number of pairs to be processed
$n = intval(fgets(STDIN)); 

// process each pair of numbers
for ($i = 0; $i < $n; $i++) {
  // read a line with two numbers separated by space
  $linha = trim(fgets(STDIN)); 

  // split the line into an array of two integers
  $valores = array_map('intval', explode(' ', $linha));

  // extract the two integers from the array
  list($x, $y) = $valores;

  // check if the second integer is zero
  if ($y == 0) {
    echo "divisao impossivel\n";
  } else {
    // calculate and print the division result
    $resultado = $x / $y; 
    echo number_format($resultado, 1, '.', '') . "\n"; 
  }
}
?>