<?php

    class Professor extends perfil{
        public $especializacao;

        public function __construct(string $nome, string $cpf, int $idade, $endereco, string $especializacao)
        {
            $this -> nome = $nome;
            $this -> cpf = $cpf;
            $this -> idade = $idade;
            $this -> endereco = $endereco;
            $this -> especializacao = $especializacao;
        }
    }

?>