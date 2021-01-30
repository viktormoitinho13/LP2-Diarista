<?php 
    class trabalho extends cadastro_diarista {

        var $trabalho;
        var $trabalhoreceber;
        var $idcliente;

        

        function __construct($trabalho,$trabalhoreceber,$idcliente)
        {
          $this->trabalho = $trabalho;
          $this->trabalhoreceber = $trabalhoreceber;
          $this->idcliente = $idcliente;

        }

       
    } 