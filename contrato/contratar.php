<?php
include_once '../conexao.php';
include('../classes/classediarista.php');
include('../classes/classetrabalho.php');
include('../classes/classecliente.php');







$cf = new cadastro_diarista($nome, $sobrenome,$endereco,$salario,$servico);
echo "Nome: " .$cf->nome = $_POST["contratoNome"];
echo "</br>";
echo "Sobrenome: ".$cf->sobrenome = $_POST["contratoSobre"];
echo "</br>";
echo "Endereço: " .$cf->endereco = $_POST["contratoEndereco"];
echo "</br>";
echo "Pretenção salarial: ".$cf->salario = $_POST["contratoSalario"];
echo "</br>";
echo "Serviço ofertado: ".$cf->servico = $_POST["servicodiarista"];
echo "</br>";

$t = new trabalho($trabalho,$trabalhoreceber,$idcliente);

$cl = new cadastro_cliente($nome,$sobrenome,$endereco,$imovel);






echo "Horas: " .$t->trabalho = $_POST["contratohoras"];

echo "</br>";


echo "Valor a receber: ".$t->trabalhoreceber = $t->trabalho * $cf->salario; 

echo "</br>";

echo "Registro do cliente: " .$t->idcliente = $_POST["idcliente"];




?>

<html>

<head>
</head>

<body>
   

    <br /><button><a href='../index.php'>Voltar a página inicial</a> </button>


</body>
<?php
 $sql = "insert into servico (diarista_nome, diarista_sobrenome, diarista_endereco, diarista_salario, diarista_servico, diarista_horas,valor_receber ) values
 ('$cf->nome','$cf->sobrenome','$cf->endereco','$cf->salario','$cf->servico','$t->trabalho',$t->trabalhoreceber); "; // insere no banco de dados os valores das variáveis acima

 $sql = mysqli_query($conn,$sql);
?>

</html>