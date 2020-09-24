<?php


require_once 'banco.php';

class Notebook
{
    private $marca;
    private $modelo;
    private $processador;
    private $memoria;
    private $hd;
    private $tela;
    private $preco;

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setProcessador($processador)
    {
        $this->$processador = $processador;
    }

    public function setMemoria($memoria)
    {
        $this->$memoria = $memoria;
    }

    public function setHd($hd)
    {
        $this->$hd = $hd;
    }

    public function setTela($tela)
    {
        $this->$tela = $tela;
    }

    public function setPreco($preco)
    {
        $this->$preco = $preco;
    }

    public function inserir()
    {
        $sql = "INSERT INTO notebook (marca, modelo,processador,memoria,hd,tela,preco) VALUES (:marca, :modelo,:memoria,:tela,:preco)";
        $stmt = banco::prepare($sql);
        $stmt->bindParam(':marca', $this->marca);
        $stmt->bindParam(':modelo', $this->modelo);
        $stmt->bindParam(':processador', $this->processador);
        $stmt->bindParam(':memoria', $this->memoria);
        $stmt->bindParam(':hd', $this->hd);
        $stmt->bindParam(':tela', $this->tela);
        $stmt->bindParam(':preco', $this->preco);

        return $stmt->execute();
    }
}
