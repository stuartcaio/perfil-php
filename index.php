<?php

    require_once 'Endereco.php';
    require_once 'Perfil.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';

    function pulaLinha(){
        echo '<br/><br/>';
    }

    $endereco_perfil1 = new Endereco("País1", "Estado1", "Cidade1", "Bairro1", "Rua1");
    $perfil1 = new Aluno("Caio Weber Stuart", "111.111.111-11", 16, $endereco_perfil1, "Ciências da Computação");

    print_r($perfil1);

    pulaLinha();

    $endereco_perfil2 = new Endereco("País2", "Estado2", "Cidade2", "Bairro2", "Rua2");
    $perfil2 = new Aluno("Maria Luisa Torresani", "222.222.222-22", 16, $endereco_perfil2, "Design Gráfico");

    print_r($perfil2);

    pulaLinha();

    $endereco_perfil3 = new Endereco("País3", "Estado3", "Cidade3", "Bairro3", "Rua3");
    $perfil3 = new Professor("Ricardo Galbi", "333.333.333-33", 27, $endereco_perfil3, "Mestrado em matemática");

    print_r($perfil3);

    pulaLinha();
    pulaLinha();
    pulaLinha();

    echo '<h3>'.$perfil1->curso.'</h3>';

    pulaLinha();

    echo '<h3>'.$perfil2->curso.'</h3>';

    pulaLinha();

    echo '<h3>'.$perfil3->especializacao.'</h3>';
?>