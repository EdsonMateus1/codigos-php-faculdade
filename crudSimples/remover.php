<?php require_once './FabricaConexoes/fabricaConexao.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM usuarios WHERE id = {$id}";
	$result = $obConexao->query($sql);

	$data = $result->fetch_assoc();

	$obConexao->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Removendo Usuario</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Usuario a ser Removido</legend>

        <form action="Crud/remove.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Nome</th>
                                <td><input type="text" disabled="true" name="nome" placeholder="Digite o Nome" value="<?php echo $data['nome'] ?>" /></td>
			</tr>		
			<tr>
				<th>E-mail</th>
				<td><input type="text" disabled="true" name="email" placeholder="Digite o E-mail" value="<?php echo $data['email'] ?>" /></td>
			</tr>
			<tr>
				<th>Cpf</th>
				<td><input type="text" disabled="true" name="cpf" placeholder="Digite Cpf" value="<?php echo $data['cpf'] ?>" /></td>
			</tr>
			<tr>
				<th>telefone</th>
				<td><input type="text" disabled="true" name="telefone" placeholder="Digite o Telefone" value="<?php echo $data['telefone'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<td><button type="submit">Salvar Alterações</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>

