<html>
<head>
    <meta charset="utf-8">
    <title>
        Aula 4 - Métodos Getters, Setters e Construtores
    </title>
</head>
<body>
<pre>
<?php

require_once "Caneta.php";

$caneta1 = new Caneta();
$caneta1->setModelo("Bic");
$caneta1->setPonta("0.5");
print_r($caneta1);
echo "<p>Eu tenho uma caneta {$caneta1->getModelo()} de ponta {$caneta1->getPonta()}</p>";

//$caneta2 = new Caneta();
//print_r($caneta2);

$caneta3 = new Caneta("Pilot", "0.6");
print_r($caneta3);


?>
</pre>
</body>
</html>
