<?php
include_once '../conexao.php';
include('../classes/classediarista.php');
include('../classes/classetrabalho.php');



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

$t = new trabalho($trabalho,$total);

echo "Horas: " .$t->trabalho = $_POST["contratohoras"]."</br>";



?>

<html>

<head>
</head>

<body>
   

    <br /><button><a href='../index.php'>Voltar a página inicial</a> </button>


</body>
<?php
 $sql = "insert into servico (diarista_nome, diarista_sobrenome, diarista_endereco, diarista_salario, diarista_servico, diarista_horas ) values
 ('$cf->nome','$cf->sobrenome','$cf->endereco','$cf->salario','$cf->servico','$t->trabalho'); "; // insere no banco de dados os valores das variáveis acima

 $sql = mysqli_query($conn,$sql);
?>

</html>