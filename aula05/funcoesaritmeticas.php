<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Funções aritméticas em PHP</title>
</head>
<style>
    h2{
        font: 12pt Arial;
        color:blueviolet;    
        font-weight: bold;
    }

</style>
<body>
    <div>
    <?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "Valor absoluto de $v2 e ". abs($v2); //Valor absoluto
    echo "<br>O valor de $v1<sup>$v2</sup> e " . pow($v1,$v2); //Potenciação
    echo"<br> A raiz de $v1 e " . sqrt($v1); // Raiz Quadrada
    echo"<br> O arrendondamento de $v2 e " . round($v2); // Arrendondamento
    echo"<br> A parte inteira de $v2 e " . intval($v2); // Valor inteiro da variável
    echo "<br> O valor de $v1 em moeda e " . number_format($v1,2,"," ,"."); // Formatação
    ?>

    </div>
</body>
</html>