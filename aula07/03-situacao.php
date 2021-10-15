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
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $media = ($nota1+$nota2)/2;
    echo "<br> A média entre $nota1 e $nota2 é: $media";
    echo "<br> A situação do aluno é: " . (($media<6)?"REPROVADO":"APROVADO");
    ?>

    </div>
</body>
</html>