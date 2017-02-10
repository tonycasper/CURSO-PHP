<?php
class Conta{
public $numero;
public $saldo; //atributo do objeto
public static $contador; //Atributo da classe

public function __construct(){
  self::$contador++;
  }
public static function zeraContador(){
  echo "zeraContador sendo chamado".PHP_EOL;
  $contador = 0;
 }
}


 ?>
