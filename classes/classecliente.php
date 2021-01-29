<?php
      class cadastro_cliente {

        var $nome;
        var $sobrenome;
        var $endereco;
        var $imovel;
        var $situacao;

        function __construct($nome,$sobrenome, $endereco,$imovel)
        {
          $this->nome = $nome;
          $this->sobrenome = $sobrenome;
          $this->endereco = $endereco;
          $this->imovel = $imovel;

         

       }

        function cadastrar(){
          if (empty($_POST['clientenome'])) {
            session_start();
            
            echo  $_SESSION['msg_alerta'] = "Você deve preencher ao menos um campo!" ;

            header("Location: ../index.php");
            exit();
        }; 

        }
      }

