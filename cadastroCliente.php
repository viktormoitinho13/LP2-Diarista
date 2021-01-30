<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">

    <title> Diarista - Projeto LP2 </title>
</head>

<body>
    <h1>Cadastro de cliente</h1><br>
    <div class="campo">

    <form name="Cadastro" action="cliente/clienteCadastro.php" method="POST">

            <label>Nome da cliente: </label>
            <input type="text" name="clientenome"><br>

            <label>sobrenome da cliente: </label>
            <input type="text" name="clientesobrenome"><br>

            <label>endereco da cliente: </label>
            <input type="text" name="clienteendereco"><br>

            <label>Tipo de imóvel: </label>
            <select name="imovelcliente">
                <option value="casa">Casa</option>
                <option value="apartamento">Apartamento</option>
                <option value="kitnet">Kitnet</option>


            </select>
            </br>


            <input type="submit" name="enviar" value="Enviar">

    </form>
    <br></br>


    <form action="cliente/clienteBuscar.php" method="POST">
        <label>Digite o nome da cliente: </label>
        <input type="text" name="nomebusca"> <br>
        <button type="submit">Buscar</button>


    </form>
    <br /><button><a href='index.php'>Voltar a página inicial</a> </button>

    </div>

</body>

</html>