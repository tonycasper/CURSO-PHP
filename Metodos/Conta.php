<?php
class Conta{
  public $numero;
  public $saldo;
  public $limite;

  public function __constructor($numero,$saldo,$limite){
    $this->numero = $numero;
    $this->saldo = $saldo;
    $this->limite = $limite;
  }

  function deposita($valor){
     $this->saldo += $valor;
  }

  function saca($valor){
    if($valor<=$this->saldo){
    $this->saldo -=$valor;
    return TRUE;
    }
   }
  function imprimeExtrato($conta){
    return this.$saldo;
  }
  function consultaSaldoDisponivel($conta){
    return this.$saldo;
  }

}
 ?>
