<?php
$linha=array(0,1,2,3,4,5);
$coluna=array(0,1,2,3,4,5,6,7,8);
for ($i=0;$i<9;$i++)
{    
    for ($j=0;$j<9;$j++)
    {
        echo "Posicao ". "Linha = ".$i." coluna = ".$j;
    }
}



 /* // leitura dos valores de entrada
  $linhas = readline();
  $colunas = readline();

  // cálculo da cor da última casa
  $soma = $linhas + $colunas;
  $cor = $soma % 2 == 0 ? 1 : 0;

  // exibição do resultado
  echo $cor . "\n";
*/
?>
