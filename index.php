<!DOCTYPE html>
<html lang="pt-br">

<head>


  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">

  <title> Diarista - Projeto LP2 </title>
</head>

<body>
  <h1>Tela Inicial</h1><br>

  <div class="campo">
    <a href="cadastroFuncionario.php">Cadastro de funcionarios</a>
    </br>
    </br>

    <a href="cadastroCliente.php">Cadastro de Clientes</a>
    </br>
    </br>


    <form action="contrato/buscaservico.php" method="POST">
      <label>Serviço oferecido </label>
      <select name="servicodiarista">
        <option selected disabled value="">Selecione</option>
        <option value="faxina">Faxina</option>
        <option value="cozinha">Cozinheira</option>
        <option value="baba">Babá</option>
      </select>
      <br />


      <input type="submit" name="enviar" value="Enviar">


    </form>
  </div>
</body>

</html>