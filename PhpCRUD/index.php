
<?php
 
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}

  
?>

<!doctype html>
<html land="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Cadastro Clientes</title>
<link rel="stylesheet" href="style_teste.css">
<meta name="description" content="PHP-OOR"/>
<meta name="robots"  content="index, follow"/>
</head>
<body>
<!-- instanciando um objeto da classe usuarios -->
<?php 
$usuario = new usuarios(); 
//O isset é necessário se você precisa saber se a variável 
//foi previamente definida
   if(isset($_POST['cadastrar'])): 
    //Variável global, $_POST.
   $nome   = $_POST['nome']; 
   $email  = $_POST['email'];
   $cpf = $_POST['cpf'];
   $telefone = $_POST['telefone'];
   $usuario->setNome($nome);
   $usuario->setEmail($email);
   $usuario->setCpf($cpf);
   $usuario->setTelefone($telefone);
   if($usuario->inserir()){
     echo "DADO INSERIDO!!!";
   }
endif;
?>


<header>
  <h2>TI - HOUSE</h2>
</header>
<section>
<nav>
    <ul>
      <li><a href="#"><button>Notebooks</button></a></li>
      <li><a href="#"><button>Desktops</button></a></li>
      <li><a href="#"><button>Tablets</button></a></li>
      <li><a href="#"><button>Celulares</button></a></li>
      <li><a href="#"><button>Servidores</button></a></li>
      <li><a href="#"><button>Softwares</button></a></li>
    </ul>
  </nav>

  <article >

<form method="post" action="" >
<fieldset>
<legend>Cadastro Clientes</legend>
<label>Nome:</label>
<input type="text" name="nome" class="ipn"/>
<br>
<label>E-mail:</label>
<input type="text" name="email" class="ipe"/>
<br>
<label>Cpf:</label>
<input type="text" name="cpf" class="ipe"/>
<br>
<label>Telefone::</label>
<input type="text" name="telefone" class="ipe"/>
<br>
<input type="submit" name="cadastrar" value="Cadastrar Dados" class="ips"/>
</fieldset>
</form>
</article>
</section>
</body>
<footer>
  <p>@2020 - professormarceloti</p>
</footer>
</html>
