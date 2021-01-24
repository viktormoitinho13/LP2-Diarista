<?php
      class cadastro_diarista {

        var $nome;
        var $sobrenome;
        var $endereco;
        var $salario;
        var $situacao;

        function cadastrar(){
          if ($this->salario != 0)
            $this->situacao = "Cadastro realizado com sucesso";
            if ($this->salario === 0)
            $this->situacao = "Cadastro não realizado ";
            return $this->situacao;

        }
      }