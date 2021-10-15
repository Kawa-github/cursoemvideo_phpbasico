<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title> Operações em PHP</title>
</head>
<body>
    <div>
    <?php

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "<br> Os valores passados foram $n1 e $n2";

    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
    echo "<br> O resultado será: $r";


    
    ?>

    </div>
</body>
</html>