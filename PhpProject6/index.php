<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
   <?php

   // Exemplo de como o array é quebrado 
$array = array(0 => 100, "cor" => "vermelho");
print_r(array_keys($array));
echo '</br>';
var_dump($array);
    
   echo '</br>'; 
   
$array2 = array('lastname', 'email', 'phone');
$separa1 = implode(" - ", $array2);
print $separa1; 

    echo '</br>';
    
 $array3 = array(0 => 100, "cor" => "vermelho");  
   $separa2 = "'".implode("', '", $array3)."'";
 print $separa2;
   ?> 
    </body>
</html>
