<?php 
    class trabalho extends cadastro_diarista {

        var $trabalho;
        var $total;
        

        function __construct($trabalho,$total)
        {
          $this->trabalho = $trabalho;
          $this->total = $total;
        }

       
    } 