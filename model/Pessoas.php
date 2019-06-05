<?php

// Criando modelo para classe no PHP
class Pessoas{

    // Criando variaveis/atributos para receber valor
  private $nome;
  private $idade;
  private $cpf;

  function __construct($nome, $idade, $cpf){
    // parent::__construct($nome,$idade,$cpf);
    $this->nome = $nome;
    $this->idade = $idade;
    $this->cpf = $cpf;
    

  }

    // Criando função para pegar dados
  public function getNome(){
      return $this->nome;
  }

//   criando função para receber dados
  public function setNome($novoNome){
     $this->nome = $novoNome;
  }

  public function getIdade(){
    return $this->idade;
}

  public function setIdade($idade){
      $this->idade = $idade;
  }

  public function getCpf(){
    return $this->cpf;
}


  public function setCpf($cpf){
    $this->cpf = $cpf;
}

  public function cadastrarPessoa($con, $pessoa){
    try{
      $query = $con->prepare("INSERT INTO usuarios (nome, idade, cpf) VALUES(?,?,?)");
      $query->execute([
        $pessoa->getNome(),
        $pessoa->getIdade(),
        $pessoa->getCpf()
      ]);
      return $query;
    }catch(PDOException $e){
      return false;
    }
    }
    

  }




?>