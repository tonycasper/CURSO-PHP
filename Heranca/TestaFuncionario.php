<?php
  require_once 'Secretaria.php';
  require_once 'Gerente.php';

  $gerente = new Funcionario;
  $gerente->nome = 'Samara';
  $gerente->salario = 1200;
  $gerente->senha=1234;

  $secretario = new Funcionario;
  $secretario->nome = 'Joao';
  $secretario->salario = 2000;
  $secretario->ramal = 2321; 
 ?>
