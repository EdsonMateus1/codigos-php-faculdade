<?php
function __autoload($class_name)
{
    require_once 'classes/' . $class_name . '.php';
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Sofwares</title>
    <link rel="stylesheet" href="style_teste.css">
</head>

<body>
    <?php
    $sofwares = new sofwares();

    if (isset($_POST['cadastrar'])) {
        $sofwares->setNome($_POST['nome']);
        $sofwares->setFuncionalidade($_POST['funcionalidade']);
    }

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

                    <label>nome:</label>
                    <input type="text" name="nome" class="ipn" />

                    <label>funcionalidade:</label>
                    <input type="text" name="funcionalidade" class="ipe" />



                </div>

            </form>
        </article>
    </section>

    <footer>
        <p>@2020 - professormarceloti</p>
    </footer>
</body>

</html>