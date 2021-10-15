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
    $vetor[0] = "Curso";
    $vetor[1] = "em";
    $vetor[2] = "vídeo";
    $texto = implode(" # ",$vetor); //join()
    print($texto);
    ?>

</div>
</body>
</html>