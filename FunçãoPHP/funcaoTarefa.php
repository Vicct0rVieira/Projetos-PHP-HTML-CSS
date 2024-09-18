<?php
function criarEvento($nome, $descricao, $local, $hora, $data, $status) {
    return [
        'nomeEvento' => $nome,
        'descricao' => $descricao,
        'local' => $local,
        'hora' => $hora,
        'data'=> $data,
        'status'=> $status
    ];
}

function exibirEvento($evento) {
    echo "Nome do evento: " . $evento['nomeEvento'] . "<br>";
    echo "Descrição: " . $evento['descricao'] . "<br>";
    echo "Local: " . $evento['local'] . "<br>";
    echo "Hora: " . $evento['hora'] . "<br>";
    echo "Data: " . $evento['data'] . "<br>";
    echo "Status: " . $evento['status'] . "<br>";

    // Verifica o status do evento dentro da função
    if($evento['status'] == "Concluso") {
        echo "Esse evento foi concluído.<br>";
    } elseif($evento['status'] == "Em Andamento") {
        echo "Esse evento está em andamento.<br>";
    } elseif($evento['status'] == "Pendente") {
        echo "Esse evento está pendente. Não esqueça de programar-se.<br>";
    } else {
        echo "Status Desconhecido.<br>";
    }
}