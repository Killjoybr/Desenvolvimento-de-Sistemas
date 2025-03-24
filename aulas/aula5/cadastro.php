<?php
  require_once 'conexao.php';
  
  $id = $_REQUEST['id'];
  $usuario = $_REQUEST['nome'];
  $email = $_REQUEST['email'];
  $senha = $_REQUEST['senha'];

  if ($id == NULL) {
    $conexao->query("UPDATE usuario SET nome = '$usuario', email = '$email', senha = '$senha' WHERE id = $id");
    header('Location: index.php');
  }
  

  $conexao->query('INSERT INTO usuario (nome, email, senha) VALUES ("'.$usuario.'", "'.$email.'", "'.$senha.'")');


  header('Location: index.php');
?>
