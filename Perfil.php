<?php 

    abstract class Perfil {
        protected $nome;
        protected $cpf;
        protected $idade;
        protected $endereco;

        public function __construct(string $nome, string $cpf, int $idade, $endereco)
        {
            $this -> nome = $nome;
            $this -> cpf = $cpf;
            $this -> idade = $idade;
            $this -> endereco = $endereco;
        }
    }

?>