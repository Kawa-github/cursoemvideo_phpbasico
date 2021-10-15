<!DOCTYPE html>
<html>
<head>
    <meta charset="uft=8">
    <link rel="stylesheet" href="_css/estilo.css"> 
    <title>Curso em video - PHP</title>
</head>

<body>
    <div>
        <form method="GET" action="mostrar.php">
        <!--?php
        $c = isset($_GET["conta"])?($_GET["conta"]):0;
        //$c = 5;
        while($c >=0){
            echo $c . "<br>";
            $c -=2;

        }

    
    ?-->
        <?php
        $c = 1;
         while($c <=1){
         echo "Incremento:<input type='number' name='' max='5' min='0' value='$c'><br>";
         /*echo "<label for=''>Incremento</label> 
         <select name='$c'>
         </select>
         ";*/
         $c+=2; 
         }
    
        
        ?>

         Inicio: <input type="number" name="inicio" max="100" min="0"><br>
         Final: <input type="number" name="final" max="100" min="0"><br>
         <!--label for="">Incremento</label>
         <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
         </select-->
         <input type="submit" value="Enviar" class="botao">


        </form>
    </div>
</body>
</html>