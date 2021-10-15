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
    $txt = "Curso em vídeo";
    $tamanho = mb_strlen($txt); //mb_strlen mostra o número de caracteres da string.
    printf("A palavra %s possui $tamanho caracteres",$txt);

    ?>

</div>
</body>
</html>