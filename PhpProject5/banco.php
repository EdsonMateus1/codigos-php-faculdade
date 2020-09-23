<?php

// Executa qualquer query

function DBExecute($query) {
   $link = DBConexao(); //Abre a conexao
    $resultado = mysqli_query($link, $query)or die('Erro ao inserir os dados '.mysqli_error($link));//PEGA A $query e executa no banco
    DBFecha($link); // fecha a conexao
    return $resultado;
}

function DBCreate($tabela,array $dados) {//precisa de 2 parametros a tabela que se vai inserir e os dados para inserir
    
    $campos = implode(', ', array_keys($dados));//quebra o array em seus campos
    
   
    $valores = "'".implode("', '", $dados)."'"; // concatena os valores para serem inseridos com ''
    
    $query = "INSERT INTO {$tabela}({$campos})VALUES({$valores})"; // cria a sentenca da sql de inserir
    
    return DBExecute($query); // executa a gravacao no mysql
}
