<?php

include_once '../conexao.php';

$ID = $_POST['editarId'];
$nome = $_POST['editarNome'];
$sobrenome = $_POST['editarSobre'];
$endereco = $_POST['editarEndereco'];
$salario = $_POST['editarSalario'];

$alterar = "
UPDATE registro
SET nome = '$nome',
sobrenome = '$sobrenome',
endereco = '$endereco',
salario = '$salario'

WHERE id = '$ID';

";

$executar = mysqli_query($conn, $alterar);

if ($alterar) {

    echo "Dados alterados com sucesso <br/>";
    echo "<a href ='../index.php'>Voltar a página inicial</a> ";
}
?>