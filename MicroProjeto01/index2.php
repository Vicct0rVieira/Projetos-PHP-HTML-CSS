<?php 
    // Microprojeto 01 (Parte II)
    require_once 'funcaoTarefa.php';

    // Array para armazenar múltiplas tarefas
    $eventos = [];

    $eventos[] = criarEvento("Formatura", "Formatura FBr de 2024.", "Lago Sul", "19h00m", "20/08/2026", "Pendente");
    $eventos[] = criarEvento("Casamento", "Casamento no Por do Sol", "Pontão Sul", "17h30m", "01/09/2024", "Concluso");
    $eventos[] = criarEvento("Aniversário", "Festa das Cores", "Santa Maria DF", "21h30m", "08/09/2024", "Em Andamento");

    foreach ($eventos as $evento) {
        exibirevento($evento);
    }

?>