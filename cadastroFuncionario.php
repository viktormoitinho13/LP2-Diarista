<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen">

  <title> Diarista - Projeto LP2 </title>
</head>

<body>
  <h1> Cadastro de funcionaria</h1><br>

  <!-- <form name="Cadastro" action="diarista/cadastrar.php" method="POST"> -->
  <form name="Cadastro" action="diarista/cadastrar.php" method="POST">
  <div class="campo">


    <label>Nome da funcionaria: </label>
    <input type="text" name="nomediarista"><br>

    <label>sobrenome da funcionaria: </label>
    <input type="text" name="sobrenomediarista"><br>

    <label>endereco da funcionaria: </label>
    <input type="text" name="enderecodiarista"><br>

    <label>Salario: (Diária) </label><br>
    <input type="text" name="salariodiarista"><br><br>

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
  <br><br>

  <form action="diarista/buscarregistro.php" method="POST">
    <label>Digite o nome da Diarista: </label>
    <input type="text" name="nomebusca"> <br>
    <button type="submit">Buscar</button>



  </form>

  <br /><button><a href='index.php'>Voltar a página inicial</a> </button>

  </div>


</body>

</html>