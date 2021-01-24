<?php
include_once '../conexao.php';
include('../classes/classediarista.php');

$cf = new cadastro_diarista();
$cf->nome = $_POST["nomediarista"];
$cf->sobrenome = $_POST["sobrenomediarista"];
$cf->endereco = $_POST["enderecodiarista"];
$cf->salario = (float) $_POST["salariodiarista"];

$cf->cadastrar();

?>

<html>

<head>
</head>

<body>
    <h1>Cadastro</h1>

    nome: <?php echo $cf->nome;?> <br/>
    sobrenome:<?php echo $cf->sobrenome; ?><br/>
    endereco:<?php echo $cf->endereco;?><br/>
    salario:<?php echo $cf->salario;?><br/>

    <br /><button><a href='../index.php'>Voltar a página inicial</a> </button>


</body>
<?php
 $sql = "insert into registro (diarista_nome, diarista_sobrenome, diarista_endereco, diarista_salario) values ('$cf->nome','$cf->sobrenome','$cf->endereco','$cf->salario');"; // insere no banco de dados os valores das variáveis acima

 $sql = mysqli_query($conn,$sql);
?>

</html>