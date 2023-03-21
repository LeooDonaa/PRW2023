<?php

while(true){

 $sent = readline();
 $len = strlen($sent);
 $swi = 0;
 
 if($sent == null || strlen($sent) > 50) break;
 
 for($i = 0; $i < $len; $i++){
   if($sent[$i] != " "){
     if($swi == 0){
       $swi++;
       $sent[$i] = strtoupper($sent[$i]);
     }else{
       $swi = 0;
       $sent[$i] = strtolower($sent[$i]);
     }
   }
 }
 
 print("$sentence\n");
}
?>