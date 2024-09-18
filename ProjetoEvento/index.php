<?php 
    // Incluindo as classes
    require_once 'Categoria.php';
    require_once 'Usuario.php';
    require_once 'Evento.php';
    
    // Array para armazenar eventos
    $eventos = [];

    // Criando instâncias de Categoria
    $categoria1 = new Categoria("Eventos Universitários", "Formaturas, Seminários, Palestras ou Workshops.");
    $categoria2 = new Categoria("Casamento e Noivados", "Casamentos, Noivados e etc.");
    $categoria3 = new Categoria("Aniversário", "Aniversários Infantis, Jovens, Adultos, Empresariais, entre outros.");

    // Criando instâncias de Usuario
    $usuario1 = new Usuario("Daniel Caixeta", "daniel@2024", "danielcaixeta@fbr.com");
    $usuario2 = new Usuario("Fulano da Silva", "abcd@321", "fulanodasilva@outlook.com");
    $usuario3 = new Usuario("Julia Isadora", "Julia@142536", "juju@gmail.com");

    // Criando instâncias de Evento e armazenando no array
    $eventos[] = new Evento("Formatura ADS 2024", "Formatura FBr de 2024.", "20/08/2026", "Pendente");
    $eventos[] = new Evento("Casamento Fulano e Ciclano", "Casamento ao Pôr do Sol.", "01/09/2024", "Concluso");
    $eventos[] = new Evento("Aniversário", "Festa das Cores.", "08/12/2024", "Em Andamento");

    // Exibindo dados dos usuários
    echo "Usuário:";
    $usuario1->exibirUser();
    echo "<br>";
    $usuario2->exibirUser();
    echo "<br>";
    $usuario3->exibirUser();
    echo "<br>";

    // Exibindo dados das categorias
    echo "Informações das Categorias";
    $categoria1->exibirDescricao();
    echo "<br>";
    $categoria2->exibirDescricao();
    echo "<br>";
    $categoria3->exibirDescricao();
    echo "<br>";

    // Exibindo dados dos eventos
    echo "Eventos";
    foreach ($eventos as $evento) {
        $evento->exibirEvento();
        echo "<br>";
    }
?>