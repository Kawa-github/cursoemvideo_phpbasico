<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
	<title>Curso de PHP - CursoemVideo</title>
</head>
<body>
    <div>
	<?php
    $preco = $_GET["p"];
    echo "O preço do produto é R$ ". number_format($preco,2);
    $preco += ($preco*10/100);
    echo " <br> O novo preço com o aumento de 10% será R$ " . number_format($preco,2);

	?>

    </div>
</body>
</html>


