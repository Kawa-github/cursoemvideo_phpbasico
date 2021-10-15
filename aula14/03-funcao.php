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
    function soma(...$p){
        //$p = func_get_arg(); não é utilizado mais!
        $t = func_num_args();
        $s = 0;
        for($i = 0; $i < $t; $i++){
            $s = $s + $p[$i];
        }
        return $s;
    }
    $r = soma(5,2,3);
    echo "A soma dos valores é igual a $r";


    ?>
</div>
</body>
</html>