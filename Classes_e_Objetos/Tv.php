<?php

/**
 * Created by PhpStorm.
 * User: giacomin
 * Date: 19/12/16
 * Time: 21:11
 * Aula 2 - Classes e Objetos
 */
class Tv
{
    var $canal = 0;
    var $volume = 0;
    var $estado = 0;


    /**
     * Funções
     */

    // Ligar
    function ligar()
    {
        $this->estado = 1;
        echo "<p>TV foi Ligada</p>";
    }

    // Desligar
    function desligar()
    {
        $this->estado = 0;
        echo "<p>TV foi desligada</p>";
    }

    // Aumentar Volume
    function aumentarVolume()
    {
        if ($this->estado == 1) {
            $this->volume = $this->volume + 1;
            echo "<p>Volume $this->volume</p>";
        } else {
            echo "<p>TV desligada</p>";
        }
    }

    // Diminuir Volume
    function diminuirVolume()
    {
        if ($this->estado == 1) {
            $this->volume = $this->volume - 1;
            echo "<p>Volume: $this->volume</p>";
        } else {
            echo "<p>TV desligada!</p>";
        }
    }

    // Selecionar Canal
    function selecionarCanal($num)
    {
        if ($this->estado == 1) {
            $this->canal = $num;
            echo "<p>Canal: $this->canal</p>";
        } else {
            echo "<p>TV desligada!</p>";
        }
    }

    // Mostral Canal
    function mostrarCanal()
    {
        if ($this->estado == 1) {
            echo "<p>Canal atual: $this->canal</p>";
        } else {
            echo "<p>TV desligada!</p>";
        }
    }

}