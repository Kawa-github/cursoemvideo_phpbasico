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
    $d = isset($_GET["ds"])?$_GET["ds"]:0;
    switch ($d){
        case 2;
        case 3;
        case 4;
        case 5;
        case 6;
            echo "Estuda ai men";
            break;
        case 7:
        case 8:
            echo "Dia de acender o narga!";
            break;
        default:
            echo "Dia da semana inválido";            
    }
    ?>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>