<?php
    declare(strict_types=1);
    $n1;
    $n2;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="post" action="resultado.php">
        Primeiro Numero<input type="number" name="n1">
        <br><br>
        Segundo Numero<input type="number" name="n2">
        <br><br>
        <input type="submit"> <input type="reset">
    </form>
</body>
</html>