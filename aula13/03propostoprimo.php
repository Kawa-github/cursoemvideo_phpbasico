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
        $numero = $_GET["num"];
        $totdiv = 0;
        echo "<h1>Analisando o número $numero ...</h1>";
        echo "Valores múltiplos: ";
        for ($c = 1; $c <= $numero; $c++) {
            if ($numero%$c == 0) {
                $totdiv += 1;
                echo  "$c ";
            }
        }
        echo "<br/><br/>Total de múltiplos: $totdiv";
        if ($totdiv > 2) {
            echo "<br/><br/>Resultado: $numero <span class='foco'>NÃO É PRIMO!</span>";
        }
        else {
            echo "<br/><br/>Resultado: $numero <span class='foco'>É PRIMO!</span>";
        }
    ?>
    <br/><br/><a href="03exercicio.php" class="botao">Voltar</a>
</div>
</body>
</html>