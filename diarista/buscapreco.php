<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once '../html/cabecalho.php' ?>

  <meta charset="utf-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registros Personalizados</title>
  <?php
  include_once '../conexao.php';
  ?>
</head>

<body>
  <?php

  $nomebuscar = $_POST['salario'];
  $consulta = "SELECT * from registro where diarista_salario <= $nomebuscar "; // cria uma variavel ($consulta )que irá fazer a consulta no banco de dados
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

    <div id="Registros">
      <br />
      <form action="editarRegistro.php" method="POST">
        ID: <input type="text" name="editarId" value="<?php echo $linha['id'] ?> " readonly></br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        Nome: <input type="text" name="editarNome" value="<?php echo $linha['diarista_nome'] ?> "></br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        Sobrenome: <input type="text" name="editarSobre" value="<?php echo $linha['diarista_sobrenome'] ?> "></br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        Endereco: <input type="text" name="editarEndereco" value="<?php echo $linha['diarista_endereco'] ?> "></br>
        <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
        Salario: <input type="text" name="editarSalario" value="<?php echo $linha['diarista_salario'] ?> "></br></br>
      </form>

   
    </div>

  <?php
  }
  ?>

  <br /><button><a href='../cadastroFuncionario.php'>Voltar a página inicial</a> </button>


</body>

</html>