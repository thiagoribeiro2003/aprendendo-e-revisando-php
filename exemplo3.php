<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibindo página no Browser</title>
</head>
<body>
 <?php
$dia = date ("d/m/Y",time());
$base = 5.5;
$altura = 10;
$area = $base * $altura
 ?>

 <p><?php echo $area?></p>
</body>
</html>