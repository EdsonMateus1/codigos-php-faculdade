<?php
require_once 'banco.php';
class usuarios
{

  private $nome;
  private $email;
  private $telefone;
  private $cpf;

  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function getNome()
  {
    return  $this->nome;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return  $this->email;
  }
  public function setTelefone($telefone)
  {
    $this->telefone = $telefone;
  }
  public function getTelefone()
  {
    return  $this->telefone;
  }
  public function setCpf($cpf)
  {
    $this->cpf = $cpf;
  }
  public function getCpf()
  {
    return  $this->cpf;
  }

  public function inserir()
  {
    $sql = "INSERT INTO usuarios (nome, email,cpf,telefone) VALUES (:nome, :email,:cpf,:telefone)";
    $stmt = banco::prepare($sql);
    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':cpf', $this->cpf);
    $stmt->bindParam(':telefone', $this->telefone);

    return $stmt->execute();
  }
}
