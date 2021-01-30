<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <title> Diarista - Projeto LP2 </title>
</head>

<body>
  <h3>Formulário de Cadastro de funcionaria</h3><br>

  <!-- <form name="Cadastro" action="diarista/cadastrar.php" method="POST"> -->
  <form name="Cadastro" action="diarista/cadastrar.php" method="POST">

    <label>Nome da funcionaria: </label>
    <input type="text" name="nomediarista"><br>

    <label>sobrenome da funcionaria: </label>
    <input type="text" name="sobrenomediarista"><br>

    <label>endereco da funcionaria: </label>
    <input type="text" name="enderecodiarista"><br>

    <label>Pretenção de salario: (Diária) </label>
    <input type="number" name="salariodiarista"><br>

    <label>Serviço ofertado: </label>
    <select name="servicodiarista">
    <option selected disabled value="">Selecione</option>
      <option value="faxina">Faxina</option>
      <option value="cozinha">Cozinheira</option>
      <option value="baba">Babá</option>
    </select>
    </br>

    <input type="submit" name="enviar" value="Enviar">

  </form>
  <br>

  <form action="diarista/buscarregistro.php" method="POST">
    <label>Digite o nome da Diarista: </label>
    <input type="text" name="nomebusca"> <br>
    <button type="submit">Buscar</button>



  </form>

</body>

</html>