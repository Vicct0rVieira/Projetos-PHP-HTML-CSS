<?php

    // Funcao para criacao da fila
function criarFila ($nome, $horario, $tipoServico, $pagamento, $statusPagamento, $status) {
    return [
        'nome' => $nome,
        'horas'=> $horario,
        'tipoCorte'=> $tipoServico,
        'pagamento'=> $pagamento,
        'statusPg'=> $statusPagamento,
        'status'=> $status
    ];

}

    // Funcao para exibir a fila e com logica de decisao   
function exibirFila ($cliente) {
    echo "<br>----------------------<br>";
    echo "Cliente: " . $cliente["nome"] . "<br>";
    echo "Horario: " . $cliente["horas"] . "<br>";
    echo "Tipo de Corte: ". $cliente["tipoCorte"] . "<br>";
    echo "Forma de Pagamento: ". $cliente["pagamento"] . "<br>";
    echo "Status do de Pagamento: " . $cliente["statusPg"] . "<br>";
    echo "Status: " . $cliente["status"] . "<br>";
   

if ($cliente['status'] == "Concluso"){
    echo "Corte Finalizado com Sucesso";

} elseif ($cliente['status'] == "Ausente" ) {
    echo "Cliente Faltou";

} elseif ($cliente['status'] == "Reagendado") {
    echo "Cliente Remarcou";

} elseif ($cliente["status"] == "Pendente") {
    echo "Corte ainda nao realizado";

} elseif ($cliente["status"] == "Atrasado") {
    echo "Cliente Atrasado";

} else {
    echo "Status Desconhecido"; }

}

?>