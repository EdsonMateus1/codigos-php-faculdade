<?php 

require_once '../FabricaConexoes/fabricaConexao.php';

if($_POST) {
	$nome  = $_POST['nome'];
	$email = $_POST['email'];
	$cpf   = $_POST['cpf'];
	$telefone = $_POST['telefone'];

	$sql = "INSERT INTO usuarios (nome, email, cpf, telefone) VALUES ('$nome', '$email', '$cpf', '$telefone')";
        
	if($obConexao->query($sql) === TRUE) {
		echo "<p> Novo Usuario Cadastrado com Sucesso</p>";
		echo "<a href='../index.php'><button type='button'>Voltar</button></a>";
		
	} else {
		echo "Error " . $sql . ' ' . $obConexao->connect_error;
	}

	$obConexao->close();
}

?>