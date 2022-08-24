<?php

    class Professor extends perfil{
        private $especializacao;

        public function __construct(string $nome, string $cpf, int $idade, $endereco, string $especializacao)
        {
            parent::__construct($nome, $cpf, $idade, $endereco);
            $this -> especializacao = $especializacao;
        }
    }

?>