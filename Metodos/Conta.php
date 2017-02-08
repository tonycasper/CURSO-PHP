<?php
class Conta{
  public $numero;
  public $saldo;

  function deposita($valor){
     $this->saldo += $valor;
  }

  function saca($valor){
    if($valor<=$this->saldo){
    $this->saldo -=$valor;
    return TRUE;
    }
  }
}
 ?>
