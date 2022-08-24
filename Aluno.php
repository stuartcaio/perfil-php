<?php 

    class Aluno extends Perfil{
        public $curso;

        public function __construct(string $nome, string $cpf, int $idade, $endereco, string $curso)
        {
            $this -> nome = $nome;
            $this -> cpf = $cpf;
            $this -> idade = $idade;
            $this -> endereco = $endereco;
            $this -> curso = $curso;
        }
    }

?>