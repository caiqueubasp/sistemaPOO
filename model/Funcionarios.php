<?php 

class Funcionarios extends Pessoas {

private $salario;

function __construct($nome,$idade,$cpf,$login,$senha,$salario){
    parent::__construct($nome,$idade,$cpf,$login,$senha);
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->idade = $idade;
    $this->login = $login;
    $this->senha = $senha;
    $this->salario = $salario;
   
    
    

  }

  // Criando função para pegar dados
  public function getSalario(){
    return $this->salario;
}

//   criando função para receber dados
public function setSalario($novoSalario){
   $this->nome = $novoSalario;
}

public function getLogin(){
  return $this->login;
}
public function setLogin($login){
    $this->login = $login;
}

public function getSenha(){
  return $this->senha;
}


public function setSenha($senha){
  $this->senha = $senha;
}

public function cadastrarSalario($con, $funcionario, $tipoPessoa){
    try{
      $query = $con->prepare("INSERT INTO usuarios (nome, idade, cpf, usuario, senha, salario, tipo_pessoa) VALUES(?,?,?,?,?,?,?)");
      $query->execute([
        $funcionario->getNome(),
        $funcionario->getIdade(),
        $funcionario->getCpf(),
        $funcionario->getLogin(),
        $funcionario->getSenha(),
        $funcionario->getSalario(),
        $tipoPessoa
      ]);
      return $query;
    }catch(PDOException $e){
        echo $e->getMessage();
      return false;
    }
    }

}







?>