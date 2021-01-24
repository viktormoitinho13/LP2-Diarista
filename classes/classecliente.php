<?php
      class cadastro_cliente {

        var $nome;
        var $sobrenome;
        var $endereco;
        var $imovel;
        var $situacao;

        function cadastrar(){
          if ($this->salario != 0)
            $this->situacao = "Cadastro realizado com sucesso";
            if ($this->salario === 0)
            $this->situacao = "Cadastro não realizado ";
            return $this->situacao;

        }
      }