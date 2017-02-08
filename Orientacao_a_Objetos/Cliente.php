<<?php

class Cliente{
  public $nome;
  public $codigo;
}

$user1 = new Cliente;
$user2 = new Cliente;

$user1->nome = 'Rafael Consentino';
$user2->nome = 'Jonas Hirata';
$user1->codigo = 1010;
$user2->codigo = 1011;

echo "O cliente $user1->nome\n";
echo "de conta $user1->codigo\n";
echo "O cliente $user2->nome\n";
echo "de conta $user2->codigo\n";

 ?>
