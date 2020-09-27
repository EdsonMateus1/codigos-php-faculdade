<?php

class servidores
{
    private $numeroDeProcessadores;
    private $tipo;
    private $memoria;

    public function setNumeroDeProcessadores($numeroDeProcessadores)
    {
        $this->numeroDeProcessadores = $numeroDeProcessadores;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function setMemoria($memoria){
        $this->memoria = $memoria;
    }

    public function inserir(){

        $sql = "INSERT INT servidores (nome,funcionalidade) VALUES (:numeroDeProcessadores,:tipo,:memoria)";
        $stmt = banco::prepare($sql);
        $stmt->bindParam(':numeroDeProcessadores',$this->numeroDeProcessadores);
        $stmt->bindParam(':tipo',$this->tipo);
        $stmt->bindParam(':memoria',$this->memoria);

        return $stmt->exeute();

    }
}