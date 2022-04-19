<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <h1>Exercício 01</h1>
    <hr>


<?php
    // $data = "18/03/2022";
    //Configurando o timezone para nossa região
    date_default_timezone_set("America/Sao_Paulo");
    $data = date("d/m/Y h:i"); //função date()
    $nome = "Guilherme";
    const NOME_CURSO = "Técnico de Informatica para internet";
    const CARGA_HORARIA = 1000;
    const LIMITE_FALTAS = 0.25;
    $faltas = CARGA_HORARIA*LIMITE_FALTAS;
    

?>

    <h2>Limite de faltas</h2>
    <hr>
    <h3>Data <?=$data?></h3>
    <p> Olá <?=$nome?> você faz o curso <?=NOME_CURSO?> <br> Seu curso tem a carga de <?=CARGA_HORARIA?> horas e o limite de faltas é de <?=$faltas?> horas</p>
    
</body>
</html>