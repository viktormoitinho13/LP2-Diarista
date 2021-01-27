<?php
      class cadastro_diarista {

        var $nome;
        var $sobrenome;
        var $endereco;
        var $salario;
        var $situacao;

        function __construct($nome,$sobrenome, $endereco,$salario)
        {
          $this->nome = $nome;
          $this->sobrenome = $sobrenome;
          $this->endereco = $endereco;
          $this->salario = $salario;

         

        }
        function cadastrar(){
          if ($this->salario != 0)
            $this->situacao = "Cadastro realizado com sucesso";
            if ($this->salario === 0)
            $this->situacao = "Cadastro não realizado ";
            return $this->situacao;

        }
      }