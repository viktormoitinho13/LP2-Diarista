<?php
include_once '../conexao.php';
include('../classes/classediarista.php');


$cf = new cadastro_diarista($nome, $sobrenome,$endereco,$salario,$servoco);
echo "Nome: " .$cf->nome = $_POST["nomediarista"];
echo "</br>";
echo "Sobrenome: ".$cf->sobrenome = $_POST["sobrenomediarista"];
echo "</br>";
echo "Endereço: " .$cf->endereco = $_POST["enderecodiarista"];
echo "</br>";
echo "Pretenção salarial: ".$cf->salario = $_POST["salariodiarista"];
echo "</br>";
echo "Serviço ofertado: ".$cf->servico = $_POST["servicodiarista"];
echo "</br>";



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