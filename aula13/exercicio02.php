<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="utf-8">
    <title>Curso em video PHP</title>
</head>
<body>
    <div>
    <form method="GET" action="02tabuada.php">
    <select name="num">
    <?php
     for($c=1; $c <= 10; $c++){
         echo "<option>$c</option>";
     }
    

    ?>

     <input type="submit" value="Tabuada">
    </select>
    </form>
    </div>
</body>
</html>