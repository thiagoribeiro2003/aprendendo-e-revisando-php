<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função retornando um array</title>
</head>
<body>
<h1>Função retornando um array</h1>
<p>Exemplo:</p>
    <?php
    function clubes(){
        $clubes[] = "Grêmio";
        $clubes[] = "Palmeiras";
        $clubes[] = "Palmeiras";
        $clubes[] = "Atlético Mineiro";
        $clubes[] = "Bahia";
        return $clubes;
    }
    $nomes = clubes();
    for($i = 0; $i<sizeof($nomes); $i++){
    echo "\$nomes[$i] vale $nomes[$i] <br>";
    }

    // Observe que a finção clubes() não recebe nenhum parâmetro, ela apenas é ativada e retorna um array para o ponto em que foi chamada
     
    ?>
</body>
</html>
