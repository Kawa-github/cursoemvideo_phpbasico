<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operações Aritméticas com PHP</title>
</head>
<body>
    <div>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h2>Valores recebidos: $n1 e $n2</h2>";
    $media = ($n1 + $n2) / 2;
    $result = $n1 + $n2;
    echo "a soma dos valores é: " . ($n1+$n2);
    echo "<br> a subtração dos valores é: " . ($n1-$n2);
    echo "<br> a multiplicação dos valores é: " . ($n1*$n2);
    echo "<br> a divisão dos valores é: " . ($n1/$n2);
    echo "<br> o módulo vale dos valores é: " . ($n1%$n2);
    echo"<br> A média vale $media";
    ?>
    </div>
</body>
</html>