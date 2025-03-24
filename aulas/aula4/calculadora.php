<?php

    $numero1 = $_POST['n1'];
    $numero2 = $_POST['n2'];

    $operacaoUsuario = $_POST['operacoes'];

    switch ($operacaoUsuario) {
        case "soma":
            echo '<h1>O resultado eh: ', $numero1 + $numero2 ,'</h1>';
            break;
        case "subtracao":
                    echo '<h1>O resultado eh: ', ($numero1 - $numero2) ,'</h1>';
                    break;
        case "multiplicacao":
                    echo '<h1>O resultado eh: ', ($numero1 * $numero2) ,'</h1>';
                    break;
        case "divisao":
                    echo '<h1>O resultado eh: ', ($numero1 / $numero2) ,'</h1>';
                    break;
        default:
            echo '<h1>Ocorreu algum erro, volte na página anterior e tente novamente!</h1>';
    }
?>

<a href="./index.php">Página anterior</a>
