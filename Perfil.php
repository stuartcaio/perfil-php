<?php 

    class Perfil {
        public $nome;
        public $cpf;
        public $idade;
        public $endereco;

        public function __construct(string $nome, string $cpf, int $idade, $endereco)
        {
            $this -> nome = $nome;
            $this -> cpf = $cpf;
            $this -> idade = $idade;
            $this -> endereco = $endereco;
        }
    }

?>