<?php

include_once '../conexao.php';

$ID = $_POST['editarId'];
$nome = $_POST['editarNome'];
$sobrenome = $_POST['editarSobre'];
$endereco = $_POST['editarEndereco'];
$salario = $_POST['editarSalario'];

$alterar = "
UPDATE registro
SET diarista_nome = '$nome',
diarista_sobrenome = '$sobrenome',
diarista_endereco = '$endereco',
diarista_salario = '$salario'

WHERE id = '$ID';

";

$executar = mysqli_query($conn, $alterar);

if ($alterar) {

    echo "Dados alterados com sucesso <br/>";
    echo "<a href ='../cadastroFuncionario.php'>Voltar a página inicial</a> ";
}
?>