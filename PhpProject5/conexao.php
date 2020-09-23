
<?php

function DBConexao()
{
    // variavel que guarda conexao
    $link = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE)or die(mysqli_error());
    // Combina a mesma forma de entender os caracteres entre php e mysql
    mysqli_set_charset($link, DB_CHARSET)or die(mysqli_error($link));
    return $link;
}

// Fecha conexao com mysql

function DBFecha($link)
{
    // recebe o $link da conexao e fecha-o
    mysqli_close($link) or die(mysqli_error($link));
}
?>
