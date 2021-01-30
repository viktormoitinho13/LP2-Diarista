<?php
include_once '../conexao.php';
include('../classes/classecliente.php');


$cf = new cadastro_cliente($nome,$sobrenome,$endereco,$imovel);
$cf->nome = $_POST["clientenome"];
echo "</br>";
$cf->sobrenome = $_POST["clientesobrenome"];
echo "</br>";
$cf->endereco = $_POST["clienteendereco"];
echo "</br>";
$cf->imovel = $_POST["imovelcliente"];
echo "</br>";


$cf->cadastrar();

echo "<script>alert('Cliente cadastrado!');
window.location.href = '../cadastroCliente.php'
</script>  ";

?>

<html>

<head>
</head>

<body>
   


</body>
<?php
 $sql = "insert into cliente (cliente_nome, sobrenome_cliente,endereco_cliente,imovel_cliente ) values ('$cf->nome','$cf->sobrenome','$cf->endereco','$cf->imovel');"; // insere no banco de dados os valores das variáveis acima

 $sql = mysqli_query($conn,$sql);
?>

</html>