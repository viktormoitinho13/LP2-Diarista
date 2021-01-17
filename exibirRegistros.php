<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <?php
      include_once 'conexao.php';
    ?>
  </head>
  <body>
   <?php
      $consulta = "SELECT * FROM registro "; // cria uma variavel ($consulta )que irá fazer a consulta no banco de dados
      $executar = mysqli_query( $conn,$consulta); // cria uma variavel($executar) que executa uma busca no banco de dados, buscando os dados da conexão ($conn) e fazendo o comando especificado na variavel acima ($consulta)
      while($linha = mysqli_fetch_array($executar)) // Retorna uma matriz que corresponde a linha obtida pelo comando entre parenteses ($executar). O comando while executa a consulta até o último registro
        {

    ?>
      
    <div id="Registros">
    <br/>
      ID: <input type ="text" value= "<?php echo $linha['id'] ?> " readonly></br> <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
      Nome: <input type ="text" value= "<?php echo $linha['nome'] ?> " readonly></br> <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
      Sobrenome: <input type ="text" value= "<?php echo $linha['sobrenome'] ?> " readonly></br> <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
      Endereco: <input type ="text" value= "<?php echo $linha['endereco'] ?> " readonly></br> <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
      Salario: <input type ="text" value= "<?php echo $linha['salario'] ?> " readonly></br></br> <!--Cria um campo input para guardar o valor que foi buscado no banco de dados -->
          
          <button>

            <a href="excluirRegistro.php?id=<?php echo $linha['id'] ; ?>">Apagar </a> <!--Cria um link que irá mandar o id para a página de exclusão(excluirRegistro.php) -->

          </button><br/>
    </div>

    <?php  
      }
    ?>
    
    <br/><button><a href ='index.php'>Voltar a página inicial</a> </button>



  </body>

</html> 