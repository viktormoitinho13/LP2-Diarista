<?php

    if($_POST['clientenome'] != "") // Executa as ações abaixo caso o texto que vir da input de name "nome" for diferente de vazio
    {
        include_once '../conexao.php'; // incluí no arquivo os dados do arquivo conexao.php

        $nome = $_POST['clientenome'];
        $sobrenome = $_POST['clientesobrenome'];
        $endereco = $_POST['clienteendereco'];
        $imovel = $_POST['imovelcliente'];

        $sql = "insert into cliente (cliente_nome, sobrenome_cliente, endereco_cliente, imovel_cliente ) values ('$nome','$sobrenome','$endereco','$imovel');"; // insere no banco de dados os valores das variáveis acima

        $sql = mysqli_query($conn,$sql); // cria uma variavel($sql) que executa uma busca no banco de dados, buscando os dados da conexão ($conn) e fazendo o comando especificado na variavel acima ($sql)

        echo "dados cadastrados </br>";

        echo "<a href ='../cadastroCliente.php'>Voltar a página inicial</a> ";



    }











?>

