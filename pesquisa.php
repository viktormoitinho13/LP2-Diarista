<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="diarista/buscapreco.php" method="POST">
        <label>Média salarial </label>
        <input type="text" name="salario"> <br>

        <label>Tipo de imóvel: </label>
        <select name="imovelcliente">
            <option value="casa">Casa</option>
            <option value="apartamento">Apartamento</option>
            <option value="kitnet">Kitnet</option>

        </select>
        <input type="submit" name="enviar" value="Enviar">


    </form>

</body>

</html>