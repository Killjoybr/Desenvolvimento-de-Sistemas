<?php
    // include("conexao.php");
    include_once("conexao.php");

    $getUsers = "SELECT * FROM usuario";
    $usuarios = $conexao->query($getUsers);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css"> -->
</head>
    <table border="1" width="100%">
        <caption><h1>Tabela de Usuarios<strong></caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Senha</th>
            </tr>
        </thead>
        <?php
            // while ($row = $usuarios->fetch(PDO::FETCH_OBJ)) {
            //     echo '
            //         <tr>
            //             <td>TESTE</td>
            //             <td>TESTE</td>
            //             <td>TESTE</td>
            //             <td>TESTE</td>
            //         </tr>
            //     ';
            // };
            foreach ($usuarios as $key => $value) {
                echo '
                    <tr>
                        <td>'.$value['id'].'</td>
                        <td>'.$value['nome'].'</td>
                        <td>'.$value['email'].'</td>
                        <td>'.$value['senha'].'</td>
                        <td>'.
                            '<a href="excluir.php?id='.$value['id'].'">Excluir</a>
                        </td>                   
                    </tr>
                    ';
            };
        ?>
    </table>
    <form method="post" action="cadastro.php">
      <h2>Cadastro de Usuário</h2>
      <input type="number" name="id" placeholder="ID">
      
      <input type="text" placeholder="Jõaozinho da Goiaba" name="nome" required>
      <br><br>
      <input type="email" placeholder="jão@email.com" name="email" required>
      <br><br>
      <input type="password" placeholder="senha" name="senha" required>
      <br><br>
      <input type="submit" value="Cadastrar" name="cadastrar">
    </form>
</html>
