<!DOCTYPE html>
<html lang="pt-br">

<head>


  <meta charset="utf-8">
  <title> Diarista - Projeto LP2 </title>
</head>

<body>
  <h3>Tela Inicial</h3><br>

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



    <input type="submit" name="enviar" value="Enviar">


  </form>

</body>

</html>