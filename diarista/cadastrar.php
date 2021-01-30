<?php
include_once '../conexao.php';
include('../classes/classediarista.php');


$cf = new cadastro_diarista($nome, $sobrenome,$endereco,$salario,$servico);
$cf->nome = $_POST["nomediarista"];
echo "</br>";
$cf->sobrenome = $_POST["sobrenomediarista"];
echo "</br>";
$cf->endereco = $_POST["enderecodiarista"];
echo "</br>";
$cf->salario = $_POST["salariodiarista"];
echo "</br>";
$cf->servico = $_POST["servicodiarista"];
echo "</br>";

echo "<script>alert('Funcionario cadastrado!');
window.location.href = '../cadastroFuncionario.php'
</script>  ";

?>

<html>

<head>
</head>

<body>
   

    <br /><button><a href='../index.php'>Voltar a página inicial</a> </button>


</body>
<?php
 $sql = "insert into registro (diarista_nome, diarista_sobrenome, diarista_endereco, diarista_salario, diarista_servico) values ('$cf->nome','$cf->sobrenome','$cf->endereco','$cf->salario','$cf->servico');"; // insere no banco de dados os valores das variáveis acima

 $sql = mysqli_query($conn,$sql);
?>

</html>