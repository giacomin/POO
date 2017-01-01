<html>
    <head>
        <meta charset="utf-8">
        <title>
            Aula 2 - Classes e Objetos
        </title>
    </head>
    <body>

        <?php

            // Carrega a classe Tv.php
            require_once 'Tv.php';

            // Instancia a classe Tv.php
            $tv1 = new Tv();

            $tv1->estado = 1;
            $tv1->aumentarVolume();
            $tv1->aumentarVolume();
            $tv1->aumentarVolume();
            $tv1->diminuirVolume();
            $tv1->mostrarCanal();
            $tv1->selecionarCanal(9);
            $tv1->desligar();
            $tv1->ligar();
            $tv1->mostrarCanal();



        ?>

    </body>
</html>