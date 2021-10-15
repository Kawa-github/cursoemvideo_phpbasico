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
    $site = "Curso em vídeo é legal"; 
    $vetor = explode(" ",$site);//criar um vetor a partir de strings, a partir dos espaços.
    print_r($vetor);
    ?>

</div>
</body>
</html>