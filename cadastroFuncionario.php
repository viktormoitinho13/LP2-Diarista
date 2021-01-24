<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include_once 'html/cabecalho.php' ?>

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

    <label>salario da funcionaria: </label>
    <input type="text" name="salariodiarista"><br>


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




    
    