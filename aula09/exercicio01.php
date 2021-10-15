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
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tera $i anos. <br> ";
    if($i >= 18){
        $v = "já pode votar";
        $d = "já pode dirigir";

    }else{
        $v = "não pode votar";
        $d = "não pode dirigir";
    }
    echo "<br>Com essa idade voce $v e também $d";

    ?>
    </div>
</body>
</html>