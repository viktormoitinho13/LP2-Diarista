<?php

    if($_POST['nome'] != "") // Executa as ações abaixo caso o texto que vir da input de name "nome" for diferente de vazio
    {
        include_once '../conexao.php'; // incluí no arquivo os dados do arquivo conexao.php

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $endereco = $_POST['endereco'];
        $salario = $_POST['salario'];

        $sql = "insert into registro (nome, sobrenome, endereco,salario) values ('$nome','$sobrenome','$endereco','$salario');"; // insere no banco de dados os valores das variáveis acima

        $sql = mysqli_query($conn,$sql); // cria uma variavel($sql) que executa uma busca no banco de dados, buscando os dados da conexão ($conn) e fazendo o comando especificado na variavel acima ($sql)

        echo "dados cadastrados </br>";

        echo "<a href ='../index.php'>Voltar a página inicial</a> ";



    }











?>

