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
    $atual = $_GET["aa"]; // Essa linha vai pegar o ano na URL

    /*
    Esse exercício pretende demonstrar o uso de operadores de incremento e decremento
    */
    echo "O ano atual é: $atual e o ano próximo é " . ++$atual; //Adiciona uma unidade na variável $atual e mostra na tela.
	?>

    </div>
</body>
</html>


