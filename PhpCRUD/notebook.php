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
    <!-- instanciando um objeto da classe usuarios -->
    <?php
    $desktops = new Notebook();
    //O isset é necessário se você precisa saber se a variável 
    //foi previamente definida
    if (isset($_POST['cadastrar'])) :
        //Variável global, $_POST.
        $desktops->setMarca($_POST['marca']);
        $desktops->setModelo($_POST['modelo']);
        $desktops->setProcessador($_POST['processador']);
        $desktops->setMemoria($_POST['memoria']);
        $desktops->setHd($_POST['hd']);
        $desktops->setTela($_POST['tela']);
        $desktops->setPreco($_POST['preco']);

        if ($desktops->inserir()) {
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
                <li><a href="http://localhost:1010/index.php"><button>Clientes</button></a></li>
                <li><a href="#"><button>Tablets</button></a></li>
                <li><a href="#"><button>Celulares</button></a></li>
                <li><a href="#"><button>Servidores</button></a></li>
                <li><a href="#"><button>Softwares</button></a></li>
            </ul>
        </nav>

        <article class="article-container">

            <form method="post" action="" class="form-container">
                <fieldset class="inputFlex-container">

                    <label>marca:</label>
                    <input type="text" name="marca" class="ipn" />

                    <label>modelo:</label>
                    <input type="text" name="modelo" class="ipe" />

                    <label>processador:</label>
                    <input type="text" name="processador" class="ipe" />

                    <label>memoria:</label>
                    <input type="text" name="memoria" class="ipe" />

                    <label>hd:</label>
                    <input type="text" name="hd" class="ipe" />

                    <label>tela:</label>
                    <input type="text" name="tela" class="ipe" />

                    <label>preco:</label>
                    <input type="text" name="preco" class="ipe" />

                    <input type="submit" name="cadastrar" value="Cadastrar Dados" class="ips" id="button-input" />
                </fieldset>

            </form>
        </article>
    </section>
    <footer>
        <p>@2020 - professormarceloti</p>
    </footer>
</body>

</html>