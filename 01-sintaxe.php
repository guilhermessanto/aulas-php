<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>
    <style>
        .destaque{
            color:red;
        }
    </style>
</head>
<body>
    <h1>Trabalhando com php</h1>
    <hr>


<?php
    //gração de texto(string)
    echo "Amanha tem Corinthians e Palmeiras!";
    //geração de texto estruturado(com tags, atributos)
    echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP.</h2>";
    echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP.</h2>";  
?>

</body>
</html>