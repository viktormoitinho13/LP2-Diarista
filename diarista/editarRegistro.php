<?php

include_once '../conexao.php';

$ID = $_POST['editarID'];
$nome = $_POST['editarNome'];
$sobrenome = $_POST['editarSobre'];
$endereco = $_POST['editarEndereco'];
$salario = $_POST['editarSalario'];
$servico = $_POST['servicodiarista'];

$alterar = "
UPDATE registro
SET diarista_nome = '$nome',
diarista_sobrenome = '$sobrenome',
diarista_endereco = '$endereco',
diarista_salario = '$salario',
diarista_servico = '$servico'

WHERE id = '$ID';

";


$executar = mysqli_query($conn, $alterar);

if ($alterar) {

    echo "<script>alert('Registro alterado!');
                window.location.href = '../cadastroFuncionario.php'
        </script>  ";
}
?>