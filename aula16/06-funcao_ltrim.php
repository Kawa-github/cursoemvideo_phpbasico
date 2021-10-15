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
    
    $novo = ltrim($nome); //elimina os espaços do inicio, mantendo o espaços do final.
    echo($novo);
    echo(mb_strlen($novo));
    ?>

</div>
</body>
</html>