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
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variável A vale $a";
    echo "<br> A variável B vale $b"; 

	?>

    </div>
</body>
</html>


