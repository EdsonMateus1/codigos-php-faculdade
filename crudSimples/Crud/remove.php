

<?php 

require_once '../FabricaConexoes/fabricaConexao.php';
if($_POST) {
	$id = $_POST['id'];

	$sql = "DELETE FROM usuarios WHERE id = {$id}";
	if($obConexao->query($sql) === TRUE) {
		echo "<p>Usuario Removido com Sucesso!</p>";
		echo "<a href='../index.php'><button type='button'>Voltar</button></a>";
	} else {
		echo "ERRO NA EXCLUSAO DOS DADOS : " . $obConexao->error;
	}

	$obConexao->close();
}
?>/

