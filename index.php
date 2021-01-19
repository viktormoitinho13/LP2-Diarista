<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title> Diarista - Projeto LP2 </title>
</head>

<body>
  <h3>Formulário de Cadastro de funcionaria</h3><br>

  <form name="Cadastro" action="diarista/cadastrar.php" method="POST">
    <label>Nome da funcionaria: </label>
    <input type="text" name="nome"><br>

    <label>sobrenome da funcionaria: </label>
    <input type="text" name="sobrenome"><br>

    <label>endereco da funcionaria: </label>
    <input type="text" name="endereco"><br>

    <label>salario da funcionaria: </label>
    <input type="text" name="salario"><br>


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