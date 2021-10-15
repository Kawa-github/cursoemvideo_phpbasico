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
     $txt = "Texto gigante, criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
    $r = wordwrap($txt,5,"<br>\n",false); //cria quebras de linha dentro do código
    echo $r;
    ?>

</div>
</body>
</html>