<?php
class Agencia{
  public $numero;
}
$agencia1 = new Agencia;
$agencia2 = new Agencia;

$agencia1->numero = 1234;
$agencia2->numero = 5678;

echo "o numero da agencia 1 é $agencia1->numero\n";
echo "o numero da agencia 2 é $agencia2->numero\n";

?>
    
