<?php
  require_once 'conexao.php';
  
  $usuario = $_REQUEST['nome'];
  $email = $_REQUEST['email'];
  $senha = $_REQUEST['senha'];
  $cargo = $_REQUEST['cargo'];

  $sql = "INSERT INTO usuario (nome, email, senha, cargo) VALUES (:usuario, :email, :senha, :cargo)";

  $statement = $conexao->prepare($sql);
  $statement->bindParam(':usuario',$usuario);
  $statement->bindParam(':email',$email);
  $statement->bindParam(':senha',$senha);
  $statement->bindParam(':cargo',$cargo);

  $statement->execute();

  header('Location: index.php');
?>
