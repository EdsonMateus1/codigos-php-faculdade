<?php

require_once 'banco.php';

class celulares
{
    private $modelo;
    private $marca;
    private $preco;

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function inserir()
    {

        $sql = "INSERT INT celulares (nome,funcionalidade) VALUES (:modelo,:marca,:preco)";
        $stmt = banco::prepare($sql);
        $stmt->bindParam(':modelo', $this->modelo);
        $stmt->bindParam(':marca', $this->marca);
        $stmt->bindParam(':preco', $this->preco);

        return $stmt->exeute();
    }
}
