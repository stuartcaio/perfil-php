<?php

    class endereco{
        private $país;
        private $estado;
        private $cidade;
        private $bairro;
        private $rua;
    
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