<?php

require_once 'banco.php';

class sofwares
{
    private $nome;
    private $funcionalidade;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setFuncionalidade($funcionalidade)
    {
        $this->funcionalidade = $funcionalidade;
    }

    public function inserir(){

        $sql = "INSERT INT sofwares (nome,funcionalidade) VALUES (:nome,:funcionalidade)";
        $stmt = banco::prepare($sql);
        $stmt->bindParam(':nome',$this->nome);
        $stmt->bindParam(':funcionalidade',$this->funcionalidade);

        return $stmt->exeute();

    }
}
