<!DOCTYPE html>
<html>
<head>
    <meta charset="uft=8">
    <link rel="stylesheet" href="_css/estilo.css"> 
    <title>Curso em video - PHP</title>
</head>

<body>
    <div>
        <form method="GET" action="02parte2.php">
            <?php

        $c = 1;
        while($c <= 5){
        echo "Valor $c :<input type='number' name='$c' max='100' min='0' value='0'><br>";
        $c ++;
        }
         ?>
         <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>
</html>