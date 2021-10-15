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
    $nome = "  Kawã Ribeiro França  ";
    echo(mb_strlen($nome));
    
    $novo = rtrim($nome); // elimina os espaços do final, mantendo os espaços do ínicio.
    echo($novo);
    echo(mb_strlen($novo));
    ?>

</div>
</body>
</html>