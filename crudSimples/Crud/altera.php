

<?php 

require_once '../FabricaConexoes/fabricaConexao.php';

if($_POST) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];

	$id = $_POST['id'];

	$sql  = "UPDATE usuarios SET nome = '$nome', email = '$email', cpf = '$cpf', telefone = '$telefone' WHERE id = {$id}";
	if($obConexao->query($sql) === TRUE) {
		echo "<p>Alteracao realizada com Sucesso!</p>";		
		echo "<a href='../index.php'><button type='button'>Voltar</button></a>";
	} else {
		echo "Erro ao Alterar os Dados! : ". $obConexao->error;
	}

	$obConexao->close();

}

?>