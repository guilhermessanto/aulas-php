<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <h1> Média Nota</h1>
    <hr>

<?php


function calculoMedia($nota1,$nota2){
    $media = ($nota1 + $nota2)/2;
    return $media;
}

$media = calculoMedia(10,6);

function situacao( float $m): string {
    if($m >= 7){
        return "Aprovado";
    }else{   
        return "Reprovado";
    }
}
?>
<p><?= $media?></p>
<p><?=situacao($media)?></p>
    
</body>
</html>