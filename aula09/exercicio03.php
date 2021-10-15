<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
    <?php
    $n1 = isset($_GET["nota1"])?$_GET["nota1"]:"Nota não inserida";
    $n2 = isset($_GET["nota2"])?$_GET["nota2"]:"Nota não inserida";
    $m = ( $n1 + $n2 ) /2;
    
    echo " <br> A média entre $n1 e $n2 é igual a : " . number_format($m,1);
    if($m<5){
        $situacao = "REPROVADO!";

    }elseif( $m<7 && $m>5){
        $situacao = "RECUPERAÇÃO!!";
    }else{
        $situacao = "APROVADO!!!";
    }
    echo "<br> Situação do aluno: $situacao";
    ?>
    <a href="exercicio03.html">Voltar</a>
    </div>  
</body>
</html>