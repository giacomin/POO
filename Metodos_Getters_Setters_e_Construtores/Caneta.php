<?php

/**
 * Created by PhpStorm.
 * User: giacomin
 * Date: 24/12/16
 * Time: 15:27
 */
class Caneta
{
    private $modelos;
    private $ponta;

    /*
    // Construtor (uma das formas)
    public function __construct() {
        $this->modelo = "Faber Castel";
        $this->ponta = "0.7";
    }
    */

    // Construtor (outra forma)
    public function Caneta ($m, $p) {
        $this->modelo = $m;
        $this->ponta = $p;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }

}