<?php

require_once 'funcaoBarbearia.php';

//Array para armazenar multiplos dados
$clientes = [];

$clientes[] = criarFila ("Juan", "08h30m", "Corte", "PIX", "Pago", "Concluso");
$clientes[] = criarFila ("Victor","09h30m", "Corte e Sombrancelha", "Nao Pago", "Credito", "Ausente");
$clientes[] = criarFila ("Raimundo", "10h30m", "Corte, Sombrancelha e Barba", "Pendente", "Debito", "Pendente",);
$clientes[] = criarFila ("Toninho", "11h30m", "Conte e Barba", "Dinhero", "Pendente", "Reagendado",);
$clientes[] = criarFila ("Lucas", " 14h00m", "Corte e Sombrancelha", "PIX", "Pago", "Atrasado",);


foreach ($clientes as $cliente) {
    exibirFila($cliente);
}