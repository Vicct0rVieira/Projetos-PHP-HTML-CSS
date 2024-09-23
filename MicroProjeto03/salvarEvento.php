<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = trim($_POST['titulo']);
    $descricao = trim($_POST['descricao']);
    $dataConclusao = $_POST['data_conclusao'];
    $categoria = $_POST['categoria'];
    $prioridade = $_POST['prioridade'];

    // Verificar se todos os campos obrigatórios estão preenchidos
    if (empty($titulo) || empty($descricao) || empty($dataConclusao)) {
        die("Erro: Todos os campos são obrigatórios.");
    }

    echo "Evento cadastrado com sucesso!";
} else {
    die("Erro: Método de solicitação inválido.");
}
