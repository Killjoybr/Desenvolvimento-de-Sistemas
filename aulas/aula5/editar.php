<?php
  error_reporting(E_ALL ^ E_WARNING);
  include_once 'conexao.php';
  $id = $_REQUEST['id'];
  $nome = $_REQUEST['nome'] ?: NULL;
  $email = $_REQUEST['email'] ?: NULL;
  $senha = $_REQUEST['senha'] ?: NULL;
  
  if ($id && $nome && $email && $senha) {
    $sql = "UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id";
    $conexao->query($sql);

    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  </head>
  <body>
<form method="post" action="editar.php?id=<?php echo $id?>">
      <h2>Atualização de Cadastro</h2>
      <input type="text" placeholder="Nome" name="nome" required>
      <br><br>
      <input type="email" placeholder="jão@email.com" name="email" required>
      <br><br>
      <input type="password" placeholder="senha" name="senha" required>
      <br><br>
      <input type="submit" value="Atualizar" name="atualizar">
    </form>
  </body>
</html>
