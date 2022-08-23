<?php

    class endereco{
        public $país;
        public $estado;
        public $cidade;
        public $bairro;
        public $rua;
    
        public function __construct(string $país, string $estado, string $cidade, string $bairro, string $rua)
        {
            $this -> país = $país;
            $this -> estado = $estado;
            $this -> cidade = $cidade;
            $this -> bairro = $bairro;
            $this -> rua = $rua;
        }
    }

?>