<?php

  $a = readline();
    $b = readline();
        $c = readline();
  

  $th = $b/$a;
    $th = number_format($th, 2, ".", "");
        $tc = $b/$c;
            $tc = number_format($tc, 2, ".", "");
  

  print("Total horas: $th\n");
    print("Total combustivel: $tc\n");

?>