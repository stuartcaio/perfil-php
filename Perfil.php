<?php 

    class Perfil {
        private $nome;
        private $cpf;
        private $idade;
        private $endereco;

        public function __construct(string $nome, string $cpf, int $idade, $endereco)
        {
            $this -> nome = $nome;
            $this -> cpf = $cpf;
            $this -> idade = $idade;
            $this -> endereco = $endereco;
        }
    }

?>