<?php

    if($_POST['nomecliente'] != "") // Executa as ações abaixo caso o texto que vir da input de name "nome" for diferente de vazio
    {
        include_once '../conexao.php'; // incluí no arquivo os dados do arquivo conexao.php

        $nome = $_POST['nomecliente'];
        $sobrenome = $_POST['sobrenomecliente'];
        $endereco = $_POST['enderecocliente'];
        $imovel = $_POST['imovelcliente'];

        $sql = "insert into  diarista_casa (dona_casa, dona_sobrenome, dona_endereco,dona_tipo_casa) values ('$nome','$sobrenome','$endereco','$imovel');"; // insere no banco de dados os valores das variáveis acima

        $sql = mysqli_query($conn,$sql); // cria uma variavel($sql) que executa uma busca no banco de dados, buscando os dados da conexão ($conn) e fazendo o comando especificado na variavel acima ($sql)

        echo "dados cadastrados </br>";

        echo "<a href ='../cadastroclientes.php'>Voltar a página inicial</a> ";



    }











?>

