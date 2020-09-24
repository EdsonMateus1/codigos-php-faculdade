<?php
// utilizando o conteudo do arquivo configuracao
require_once 'configuracao.php';

class banco
{
    private static $PDO;
    // metodo é static pq nao vou ficar instanciando a classe
    // banco toda vez que eu precisar usar um metodo dela
    public static function getInstance()
    {
        if (!isset(self::$PDO)) {
            try {
                self::$PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$PDO;
    }

    public static function prepare($sql)
    {
        return self::getInstance()->prepare($sql);
    }
}
