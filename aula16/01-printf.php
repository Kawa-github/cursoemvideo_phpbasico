<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $p = "Leite";
    $pr = 4.5;
    echo "o $p custa R$ " . number_format($pr,2);
    printf("<br>O %s custa R$ %.2f ",$p,$pr); //escreve na tela
    

    ?>
</div>
</body>
</html>