<?php
  require_once 'conexao.php';
  
  $usuario = $_REQUEST['nome'];
  $email = $_REQUEST['email'];
  $senha = $_REQUEST['senha'];

  $conexao->query('INSERT INTO usuario (nome, email, senha) VALUES ("'.$usuario.'", "'.$email.'", "'.$senha.'")');

  header('Location: index.php');
?>
