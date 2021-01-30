<?php
include_once '../conexao.php';

$cof = $_GET['cliente_id']; // irá receber o id do registro a ser excluir por meio get(url)

$excluindo = "delete from cliente where cliente_id = '$cof'"; // cria uma variavel que terá o comando de exclusão de um registro(esse registro está dentro da variável $cod)
$executar = mysqli_query($conn, $excluindo); // cria uma variavel($executar) que executa uma busca no banco de dados, buscando os dados da conexão ($conn) e fazendo o comando especificado na variavel acima ($excluir)

if ($executar) {
    echo "registro apagado com sucesso";
    echo "<br>";
    echo "    <br/><button><a href ='../cadastroCliente.php'>Voltar a página inicial</a> </button> 
            <br/>     <br/><button><a href ='clienteBuscar.php'>Voltar a página de registros</a> </button>";
}
?>

