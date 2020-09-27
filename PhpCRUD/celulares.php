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
    <title>Cadastro Celulares</title>
    <link rel="stylesheet" href="style_teste.css">
    <meta name="description" content="PHP-OOR" />
    <meta name="robots" content="index, follow" />
</head>

<body>
    <!-- instanciando um objeto da classe usuarios -->
    <!-- instanciando um objeto da classe usuarios -->
    <?php
    $celular = new celulares();
    //O isset é necessário se você precisa saber se a variável 
    //foi previamente definida
    if (isset($_POST['cadastrar'])) :
        //Variável global, $_POST.
        $celular->setMarca($_POST['marca']);
        $celular->setModelo($_POST['modelo']);
        $celular->setPreco($_POST['preco']);

        if ($celular->inserir()) {
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


                    <label>Marmca:</label>
                    <input type="text" name="marca" class="ipe" />

                    <label>Modelo:</label>
                    <input type="text" name="modelo" class="ipe" />

                    <label>Preco:</label>
                    <input type="text" name="preco" class="ipe" />

                    <input type="submit" name="cadastrar" value="Cadastrar Dados" class="ips" id="button-input" />
                </div>

            </form>
        </article>
    </section>
    <footer>
        <p>@2020 - professormarceloti</p>
    </footer>
</body>

</html>