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
<h1>Registros de funcionarios </h1></br>

  <?php

  $nomebuscar = $_POST['nomebusca'];
  $consulta = "SELECT * FROM registro where diarista_nome LIKE '%$nomebuscar%' "; // cria uma variavel ($consulta )que irá fazer a consulta no banco de dados
  $executar = mysqli_query($conn, $consulta); // cria uma variavel($executar) que executa uma busca no banco de dados, buscando os dados da conexão ($conn) e fazendo o comando especificado na variavel acima ($consulta)
  $resultado = mysqli_num_rows($executar);

  if ($resultado != 0) {

    echo "<script>alert('Registro localizado com sucesso!') </script>  ";
  } else {
    echo "<script>alert('Registro não localizado com sucesso!');
                window.location.href = '../cadastroFuncionario.php'
        </script>  ";
  }

  while ($linha = mysqli_fetch_array($executar)) // Retorna uma matriz que corresponde a linha obtida pelo comando entre parenteses ($executar). O comando while executa a consulta até o último registro
  {

  ?>

<div class="campo">
      <br />
      <form action="editarRegistro.php" method="POST">

      Registro: <input type="text"  name="editarID" value="<?php echo $linha['id'] ?> "></br>

        Nome: <input type="text" name="editarNome" value="<?php echo $linha['diarista_nome'] ?> "></br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        Sobrenome: <input type="text" name="editarSobre" value="<?php echo $linha['diarista_sobrenome'] ?> "></br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        Endereco: <input type="text" name="editarEndereco" value="<?php echo $linha['diarista_endereco'] ?> "></br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        Pretenção salarial: <input type="text" name="editarSalario" value="<?php echo $linha['diarista_salario'] ?> "></br>

        Serviço ofertado: <select name="servicodiarista">
          <option selected value="<?php echo $linha['diarista_servico'] ?> "><?php echo $linha['diarista_servico'] ?> </option>
          <option value="faxina">Faxina</option>
          <option value="cozinha">Cozinheira</option>
          <option value="baba">Babá</option>
        </select>


        </br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        <button type="submit">Alterar</button>
      </form>

      <button>

        <a href="excluirRegistro.php?id=<?php echo $linha['id']; ?>">Apagar </a>
        <!--Cria um link que irá mandar o id para a página de exclusão(excluirRegistro.php) -->

      </button><br /></br>
    </div>

  <?php
  }
  ?>

  <br /><button><a href='../cadastroFuncionario.php'>Voltar a página inicial</a> </button>


</body>

</html>