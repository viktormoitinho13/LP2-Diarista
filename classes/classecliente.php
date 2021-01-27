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
          if ($this->salario != 0)
            $this->situacao = "Cadastro realizado com sucesso";
            if ($this->salario === 0)
            $this->situacao = "Cadastro não realizado ";
            return $this->situacao;

        }
      }