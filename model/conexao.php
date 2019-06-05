<?php

// include "conexao.php";

    $host = "mysql:host=localhost;dbname=sistemapoo;charset=utf8mb4;port=3307";
    $dbUser = "root";
    $dbPass = "";

    try{
    
    $con = new PDO($host, $dbUser, $dbPass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $query = $con->query("SELECT * FROM filme");
    // $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // var_dump($resultado);

    // $nome = $_GET['nome'];
    // $sobrenome = $_GET['sobrenome'];
    // $query = $con->prepare("insert into ator (primeiro_nome,ultimo_nome) values(?,?)");
    // $resultado = $query->execute([$nome,$sobrenome]);
    // if($resultado){
    //     echo "Cadastro concluido com sucesso!";
    // }

    } catch(PDOexception $e){
        echo "Deu Erro, mané";

        echo $e->getMessage();
    }

?>