<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Tabuada Dinâmica</title>
</head>
<body>
<div>
	<?php
		$val = isset($_GET["tab"])?$_GET["tab"]:1;
		$i = 1;
		while($i <=10){
			$r = $val * $i;
			echo "$val x $i = $r </br>";
			$i++;
		}
	?>
	<a href="03exercicio.php" class="botao">VOLTAR</a>
</div>
</body>
</html>