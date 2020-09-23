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
        // chamando arquivo de configuracao
        require 'configuracao.php';
        require 'conexao.php';
        require 'banco.php';
        
        
        // Uma forma melhor de cadastrar clientes utilizando arrays
        $cliente = array(
          'nome' => 'professormarceloti',
          'endereco' => 'professormarceloti@gmail.com',
          'telefone' => '16'
         
        );
                          //tabela  - array
        $grava = DBCreate('cliente',$cliente);
       if($grava =!null){
               echo 'Dados gravados com sucesso!!!';
              
           
       }else{
           echo 'Erro ao gravar dados';
        
           
       };
     
       
        ?>
    </body>
</html>
