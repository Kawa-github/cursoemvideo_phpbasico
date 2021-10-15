<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<title>Tabuada Dinâmica</title>
</head>
<body>
<div>
	<form name="tabdinamic" method="get" action="tabuada-ex03.php">
		
			<?php
				$c = 1;
				echo "<label for='num'>Numero:</label>";
				echo "<select name='tab' id='num'>";
				while($c <=10){
					echo"<option value='$c'>$c</option>";
					$c++;
				}
			?>
		</select>
		<input type="submit" value="TABUADA" class="botao"/>

	</form>
</div>
</body>
</html>