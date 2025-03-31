<?php
  require_once 'conexao.php';
  
  $usuario = $_REQUEST['nome'];
  $email = $_REQUEST['email'];
  $senha = $_REQUEST['senha'];

  $sql = "INSERT INTO usuario (nome, email, senha) VALUES (:usuario, :email, :senha)";

  $statement = $conexao->prepare($sql);
  $statement->bindParam(':usuario',$usuario);
  $statement->bindParam(':email',$email);
  $statement->bindParam(':senha',$senha);

  $statement->execute();

  header('Location: index.php');
?>
