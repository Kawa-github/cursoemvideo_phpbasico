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

        $frase = "Eu vou estudar PHP agoraa";
        $cont = str_word_count($frase,1); // entrega quantidade de palavras dentro de uma string.
        print_r($cont);
        //echo $cont;

         
    ?>

</div>
</body>
</html>