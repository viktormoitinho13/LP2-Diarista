<?php
include_once '../conexao.php';

$cod = $_GET['id']; // irá receber o id do registro a ser excluir por meio get(url)

$excluir = "delete from registro where id = '$cod'"; // cria uma variavel que terá o comando de exclusão de um registro(esse registro está dentro da variável $cod)
$executar = mysqli_query($conn, $excluir); // cria uma variavel($executar) que executa uma busca no banco de dados, buscando os dados da conexão ($conn) e fazendo o comando especificado na variavel acima ($excluir)

if ($executar) {
    echo "registro apagado com sucesso";
    echo "<br>";
    echo "    <br/><button><a href ='../index.php'>Voltar a página inicial</a> </button> 
            <br/>     <br/><button><a href ='buscarregistro.php'>Voltar a página de registros</a> </button>";
}
?>