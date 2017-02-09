<?php
class Conta{
public $numero;
public $saldo; //atributo do objeto
public static $contador; //Atributo da classe

public function __construct(){
  self::$contador++;
  }
}


 ?>
