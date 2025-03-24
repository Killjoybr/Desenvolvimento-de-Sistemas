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
</head>
    <table border="1" width="100%">
        <caption><strong>Tabela de Usuarios<strong></caption>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
        </tr>
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
                        <td>'.$value['id'].'<td>
                        <td>'.$value['nome'].'<td>
                        <td>'.$value['email'].'<td>
                        <td>'.$value['senha'].'<td>                        
                    <tr>
                    ';
            };
        ?>
    </table>
</html>
