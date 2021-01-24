<?php
include_once '../conexao.php';
include('../classes/classecliente.php');

$cf = new cadastro_cliente();
$cf->nome = $_POST["clientenome"];
$cf->sobrenome = $_POST["clientesobrenome"];
$cf->endereco = $_POST["clienteendereco"];
$cf->imovel = $_POST["imovelcliente"];

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
    imovel:<?php echo $cf->imovel;?><br/>

    <br /><button><a href='../index.php'>Voltar a página inicial</a> </button>


</body>
<?php
 $sql = "insert into cliente (cliente_nome, sobrenome_cliente,endereco_cliente,imovel_cliente ) values ('$cf->nome','$cf->sobrenome','$cf->endereco','$cf->imovel');"; // insere no banco de dados os valores das variáveis acima

 $sql = mysqli_query($conn,$sql);
?>

</html>