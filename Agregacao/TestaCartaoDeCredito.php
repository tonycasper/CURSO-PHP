<?php
require_once 'Cliente.php';
require_once 'CartaoDeCredito.php';


$cliente = new Cliente;
$cliente->nome ="Hannibal";
$cliente->codigo = 17;

$cartao = new CartaoDeCredito;
$cartao->numero = 4444;
$cartao->dataDeValidade = '18/09/2017';

$cartao->dono = $cliente;

echo "O dono do cartao $cartao->numero é o {$cliente->cartao->nome}";
