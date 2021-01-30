<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/formulario.css" media="screen">

  <title>Registros Personalizados</title>
  <?php
  include_once '../conexao.php';
  ?>
</head>

<body>
<h1>Contrato de funcionarios </h1></br>

  <?php

  $servicobuscar = $_POST['servicodiarista'];
  $consulta = "SELECT * from registro where diarista_servico  = '$servicobuscar' "; // cria uma variavel ($consulta )que irá fazer a consulta no banco de dados
  $executar = mysqli_query($conn, $consulta); // cria uma variavel($executar) que executa uma busca no banco de dados, buscando os dados da conexão ($conn) e fazendo o comando especificado na variavel acima ($consulta)
  $resultado = mysqli_num_rows($executar);

  if ($resultado != 0) {

    echo "<script>alert('Registro localizado com sucesso!') </script>  ";
  } else {
    echo "<script>alert('Registro não localizado com sucesso!');
                window.location.href = '../index.php'
        </script>  ";
  }

  while ($linha = mysqli_fetch_array($executar)) // Retorna uma matriz que corresponde a linha obtida pelo comando entre parenteses ($executar). O comando while executa a consulta até o último registro
  {

  ?>

<div class="campo">
      <br />
      <form action="contratar.php" method="POST">
      <h3>Diarista</h3></br>

        Nome: <input type="text" name="contratoNome" value="<?php echo $linha['diarista_nome'] ?> "></br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        Sobrenome: <input type="text" name="contratoSobre" value="<?php echo $linha['diarista_sobrenome'] ?> "></br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        Endereco: <input type="text" name="contratoEndereco" value="<?php echo $linha['diarista_endereco'] ?> "></br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        Salario(diaria): </br><input type="text" name="contratoSalario" value="<?php echo $linha['diarista_salario'] ?> "></br>
        </br>
        Serviço ofertado: <select name="servicodiarista">
          <option selected disable value="<?php echo $linha['diarista_servico'] ?> "><?php echo $linha['diarista_servico'] ?> </option>
         
        </select></br>

        Horas Diárias: </br><input type="number" name="contratohoras" required></br>
        </br>
        Registro do cliente:</br>  <input type="number" name="idcliente" required></br>


        </br>

        <input type=submit value="Contratar" />

      </form>

      </br>
    </div>

  <?php
  }
  ?>







  <br /><button><a href='../index.php'>Voltar a página inicial</a> </button>


</body>

</html>