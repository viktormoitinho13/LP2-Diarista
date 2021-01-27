<?php
include_once '../conexao.php';
include('../classes/classecliente.php');

$cf = new cadastro_cliente($nome,$sobrenome,$endereco,$imovel);
echo "Sobrenome: ".$cf->sobrenome = $_POST["clientesobrenome"]. "</br>";
echo "Endereço: " .$cf->endereco = $_POST["clienteendereco"]. "<br/>";
echo "Imovel: ".$cf->imovel = $_POST["imovelcliente"]."<br/>";

$cf->cadastrar();

?>

<html>

<head>
</head>

<body>
   
    <br /><button><a href='../index.php'>Voltar a página inicial</a> </button>


</body>
<?php
 $sql = "insert into cliente (cliente_nome, sobrenome_cliente,endereco_cliente,imovel_cliente ) values ('$cf->nome','$cf->sobrenome','$cf->endereco','$cf->imovel');"; // insere no banco de dados os valores das variáveis acima

 $sql = mysqli_query($conn,$sql);
?>

</html>