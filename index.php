<?php

    require_once 'Endereco.php';
    require_once 'Perfil.php';

    function pulaLinha(){
        echo '<br/><br/>';
    }

    $endereco_perfil1 = new Endereco("País1", "Estado1", "Cidade1", "Bairro1", "Rua1");
    $perfil1 = new Perfil("Caio Weber Stuart", "111.111.111-11", 16, $endereco_perfil1);

    print_r($perfil1);

    pulaLinha();

    $endereco_perfil2 = new Endereco("País2", "Estado2", "Cidade2", "Bairro2", "Rua2");
    $perfil2 = new Perfil("Maria Luisa Torresani", "222.222.222-22", 16, $endereco_perfil2);

    print_r($perfil2);

?>