<?php
require_once 'Conta.php';

$conta = new Conta(123,151515,151515);
//$conta->numero = 13;


echo "o numero da conta é: $conta->numero\n e agencia: $conta"



//depositando 700golpes

$conta->deposita(700);

$resultado = $conta->saca(800);

if($resultado) {
  echo "Saque efetuado com sucesso";
}else{
  echo "Saldo insulficiente";
}*/
?>
