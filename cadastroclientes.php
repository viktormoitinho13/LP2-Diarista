<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> Diarista - Projeto LP2 </title>
</head>

<body>
    <h3>Formulário de Cadastro da cliente</h3><br>

    <form name="CadastroCliente" action="cliente/cadastrar.php" method="POST">
        <label>Nome da cliente: </label>
        <input type="text" name="nomecliente"><br>

        <label>sobrenome da cliente: </label>
        <input type="text" name="sobrenomecliente"><br>

        <label>endereco da cliente: </label>
        <input type="text" name="enderecocliente"><br>

        <label>Tipo de imóvel: </label>
        <select name="imovelcliente">
            <option value="casa">Casa</option>
            <option value="ape">Apartamento</option>
            <option value="kitnet">Kitnet</option>
        </select><br>


        <input type="submit" name="enviar" value="Enviar">

    </form>
    <br>

    <form action="cliente/buscarcliente.php" method="POST">
        <label>Digite o nome da cliente: </label>
        <input type="text" name="nomebusca"> <br>
        <button type="submit">Buscar</button>



    </form>
</body>

</html>