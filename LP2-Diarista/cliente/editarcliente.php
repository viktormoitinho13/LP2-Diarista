<?php

include_once '../conexao.php';

$ID = $_POST['editarID'];
$nome = $_POST['editarNome'];
$sobrenome = $_POST['editarSobre'];
$endereco = $_POST['editarEndereco'];
$imovel = $_POST['editarImovel'];

$alterar = "
UPDATE cliente SET cliente_nome = '$nome', sobrenome_cliente = '$sobrenome', endereco_cliente= '$endereco', imovel_cliente = '$imovel' WHERE cliente_id = '$ID'; 

";

$executar = mysqli_query($conn, $alterar);

if ($alterar) {

    echo "Dados alterados com sucesso <br/>";
    echo "<a href ='../cadastroFuncionario.php'>Voltar a página inicial</a> ";
}
?>