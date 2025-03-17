<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
</head>
<body>
    <form method="post" action="./calculadora.php">
        N1: <input type="number" name="n1">
        <br><br>
        <select name="operacoes">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <br><br>
        N2: <input type="number" name="n2">
        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

<!-- 
    TODO: Fazer as outras operações da calculadora
-->