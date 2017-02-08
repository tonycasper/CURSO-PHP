<?php
  class CartaoDeCredito {
    public $numero;
    public $DataDeValidade;
  }

  $Card1 = new CartaoDeCredito;
  $Card2 = new CartaoDeCredito;

  $Card1->numero=11111;
  $Card2->numero=22222;
  $Card1->DataDeValidade='01/01/2013';
  $Card2->DataDeValidade='01/01/2014';

  echo "\nO numero do cartao 1 é $Card1->numero com validade até $Card1->DataDeValidade\n";
  echo "O numero do cartao 1 é $Card2->numero com validade até $Card2->DataDeValidade\n";

 ?>
