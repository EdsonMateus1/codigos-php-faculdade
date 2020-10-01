
<?php
// Acesso a Fabrica de conexao
 require_once './FabricaConexoes/fabricaConexao.php';
?>

<!doctype html>
<html land="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Cadastro Usuarios</title>
<link rel="stylesheet" href="style_teste.css">
<meta name="description" content="PHP-OOR"/>
<meta name="robots"  content="index, follow"/>
</head>
<body>


<header>
  <h2>TI - HOUSE</h2>
</header>
<section>
<nav>
    <ul>
      <li><a href="notebooks.php"><button>Notebooks</button></a></li>
      <li><a href="#"><button>Desktops</button></a></li>
      <li><a href="#"><button>Tablets</button></a></li>
      <li><a href="#"><button>Celulares</button></a></li>
      <li><a href="#"><button>Servidores</button></a></li>
      <li><a href="#"><button>Softwares</button></a></li>
    </ul>
  </nav>

  <article >

      <form method="post" action="Crud/inserir.php" >
<fieldset>
<legend>Cadastro Usuarios</legend>
<label>Nome:</label>
<input type="text" name="nome" class="ipn"/>
<br>
<label>E-mail:</label>
<input type="text" name="email" class="ipe"/>
<br>
<label>Cpf:</label>
<input type="text" name="cpf" class="ipe"/>
<br>
<label>Telefone:</label>
<input type="text" name="telefone" class="ipe"/>
<br>
<input type="submit" name="cadastrar" value="Cadastrar Dados" class="ips"/>
</fieldset>
</form>
</article>
    
  
    
    
    
    
    
    
    <table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Cpf</th>
                                <th>Telefone</th>
                                <th>Botoes</th>
			</tr>
		</thead>
		<tbody>
			<?php
                        // O objeto $sql contem a sentenca de sql que quero executar no banco
			$sql = "SELECT * FROM usuarios";
                        // Objeto $resultado recebe 1 se a conexao for realizada
			$resultado = $obConexao->query($sql);
                         // Se o objeto $resultado for maior que zero o while vai lendo linha por linha do objeto
                        // o que significa que cada linha é um registro na tabela e monta uma tabela
			if($resultado->num_rows > 0) {
				while($linha = $resultado->fetch_assoc()) {  //2
					echo "<tr>
						<td>".$linha['id']."</td>
                                                <td>".$linha['nome']."</td>
						<td>".$linha['email']."</td>
						<td>".$linha['cpf']."</td>
                                                <td>".$linha['telefone']."</td>
						<td>
				<a href='editar.php?id=".$linha['id']."'><button type='button'>Editar</button></a>
				<a href='remover.php?id=".$linha['id']."'><button type='button'>Remover</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Tabela Vazia</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</section>
</body>
<footer>
  <p>@2020 - professormarceloti</p>
</footer>
</html>
