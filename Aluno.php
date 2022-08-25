<?php 

    class Aluno extends Perfil{
        private $curso;

        public function __construct(string $nome, string $cpf, int $idade, $endereco, string $curso)
        {
            parent::__construct($nome, $cpf, $idade, $endereco);
            $this -> curso = $curso;
        }

        public function __get(string $atributo){   
            return $this->$atributo;         
        }
    }

?>