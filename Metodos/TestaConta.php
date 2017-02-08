<?php
require_once 'Conta.php';

$conta = new Conta;
$conta->numero = 13;

//depositando 700golpes
$conta->deposita(700);

$resultado = $conta->saca(800);

if($resultado) {
  echo "Sque efetuado com sucesso";
}else{
  echo "Saldo insulficiente";
}
 ?>
