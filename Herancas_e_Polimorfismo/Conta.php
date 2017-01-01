<?php

class Conta extends Pessoa {
  private $codigo;
  private $saldo;

  function __construct($) {


  }

  function setSaldo($valor) {
    $this->saldo += $valor;
  }

  function getSaldo() {
    return $this->saldo;
  }



}
