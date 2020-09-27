<?php

function __autoload($class_name)
{
  require_once 'classes/' . $class_name . '.php';
}


?>

<!doctype html>
<html land="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro Clientes</title>
  <link rel="stylesheet" href="style_teste.css">
  <meta name="description" content="PHP-OOR" />
  <meta name="robots" content="index, follow" />
</head>

<body>
  <!-- instanciando um objeto da classe usuarios -->
  <?php
  $usuario = new usuarios();
  //O isset é necessário se você precisa saber se a variável 
  //foi previamente definida
  if (isset($_POST['cadastrar'])) :
    //Variável global, $_POST.
    $usuario->setNome($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $usuario->setCpf($_POST['cpf']);
    $usuario->setTelefone($_POST['telefone']);
    if ($usuario->inserir()) {
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
        <li><a href="/index.php"><button>Clientes</button></a></li>
        <li><a href="/notebook.php"><button>Notebooks</button></a></li>
        <li><a href="/desktop.php"><button>Desktops</button></a></li>
        <li><a href="/tablets.php"><button>Tablets</button></a></li>
        <li><a href="/celulares.php"><button>Celulares</button></a></li>
        <li><a href="/servidores.php"><button>Servidores</button></a></li>
        <li><a href="/sofwares.php"><button>Softwares</button></a></li>
      </ul>
    </nav>

    <article class="article-container">

      <form method="post" action="" class="form-container">
        <div class="inputFlex-container">

          <label>Nome:</label>
          <input type="text" name="nome" class="ipn" />

          <label>E-mail:</label>
          <input type="email" name="email" class="ipe" />

          <label>Cpf:</label>
          <input type="number" name="cpf" class="ipe" />

          <label>Telefone::</label>
          <input type="tel" name="telefone" class="ipe" />

          <input type="submit" name="cadastrar" value="Cadastrar Dados" class="ips" class="button-imput" id="button-input" />
        </div>
      </form>
    </article>
  </section>
</body>
<footer>
  <p>@2020 - professormarceloti</p>
</footer>

</html>