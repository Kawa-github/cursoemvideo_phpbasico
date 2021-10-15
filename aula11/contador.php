<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title>Curso em video - PHP</title>
    </head>

    <body>
        <div>
            <?php
            $c =1;
            while($c <= 10){
            
            echo $c . "<br>";
            $c ++; // ou $c = $c + 1; ou $c +=1; 
            }

            ?>
        </div>
    </body>
</html>