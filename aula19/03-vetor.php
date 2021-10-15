<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $v = array(1.5,5,"M","X","K");
        print_r($v);
        array_shift($v);//array_unshift($v,"O");
        print_r($v);

    ?>
    </pre>
</div>
</body>
</html>