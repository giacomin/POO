<?php

/**
 * Created by PhpStorm.
 * User: giacomin
 * Date: 23/12/16
 * Time: 22:58
 * Aula 3 - Visibilidade dos Objetos
 *
 * public -> Qualquer um pode acessar
 * private -> Apenas a classe que declarou pode acessar
 * protected -> Apenas a classe que declarou e a classe filha (herança) pode acessar.
 */

class Carro
{
    private $estado = 0;
    private $tanque = 0;



    public function ligar()
    {
        if ($this->estado == 0) {
            if ($this->tanque >= 1) {
                $this->estado = 1;
                echo "<p>Carro ligado!</p>";
            } else {
                echo "<p>Carro sem combustivel!</p>";
            }
        } else {
            echo "<p>Carro já esta ligado!</p>";
        }
    }

    public function desligar()
    {
        if ($this->estado == 1) {
            $this->estado = 0;
        } else {
            echo "<p>Carro já está desligado!</p>";
        }
    }

    public function abastecer()
    {
        if ($this->estado == 0) {
            $this->tanque = $this->tanque + 1;
            echo "<p>Carro abastecido. Tanque com $this->tanque litro(s)</p>";
        } else {
            echo "<p>Desligue o carro primeiro</p>";
        }
    }

    public function andar()
    {

        if ($this->estado == 1) {
            if ($this->tanque >= 1) {
                echo "<p>Carro andou.</p>";
                $this->tanque = $this->tanque - 1;
                if ($this->tanque >= 1) {
                    echo "<p>Restam $this->tanque litros no tanque</p>";
                } else {
                    echo "<p>Acabou o combustivel e o carro se desligou.</p>";
                    $this->estado = $this->estado = 0;
                }

            } else {
                echo "<p>Abasteca o carro primeiro</p>";
            }
        }
        else {
            echo "<p>Ligue o carro primeiro!</p>";
        }
    }



}