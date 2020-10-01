<?php
//Declaracao dos dados para conectar no mysql
$localhost = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "crudphp";

// Cria a conexao
$obConexao = new mysqli($localhost, $username, $password, $dbname);

// Checa a conexao
if($obConexao->connect_error) {
	die("ERRO NA CONEXÃO!" . $obConexao->connect_error);
} else {
    echo 'Conexão realizada com Sucesso!';
}


