<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando arrays no PHP</title>
</head>
<body>
    <h1>Trabalhando com (vetores e matizes)</h1>
    <hr>
    <h2>Arrays com índices numéricos</h2>
<?php
    //Sintaxe usando colchetes
    $bandas = ["savage","Iron Maiden","Nightwish"];

    //Sintaxe com função array()
    $curso = array("HTML5","CSS3","Nodejs","photoshop");

    //Sintaxe indicado indice manualmente
    $comidaDeButeco[0] = "Bolinho de bacalhau";
    $comidaDeButeco[1] = "Pastel";
    $comidaDeButeco[2] = "Esfiha de carne";
    
    //Constates de arrays
    define("UNIDADES_SENAC",["Penha","Tatupé","Itaquera"]);
    const FRUTAS = ["Morango","Abacaxi"];

?>

    <h3>Acessando os dados</h3>
    <ol>
        <li>uma das bandas que mais gosto:<?=$bandas[1]?></li>
        <li>Linguagem base da web: <?= $curso[0]?></li>
        <li>Quero comer: <?=$comidaDeButeco[0]?></li>
        <li>Senac: <?=UNIDADES_SENAC[1]?></li>
        <li>Frutas: <?=FRUTAS[1]?></li>
    </ol>

    <h2>Arrays associativos</h2>
<?php

    $curso = [
        //chave associativa (identificação =>valor)
        "nome" => "Gastronomia",
        "cargaHoraria" => 150,
        "unidade"=> "Penha"
    ];
?>

    <p>Nome do curso: <?=$curso["nome"]?></p>
    <p>Carga Horaria: <?=$curso["cargaHoraria"]?> Horas</p>
    <p>Unidade: <?=$curso["unidade"]?></p>

    <h2>Matriz (Array dentro de array)</h2>

<?php
    //Plano de estudos de Front, Back e design
    $planoDeEstudos =[
            //0                  1          2         
        ["Javascript Avançado","Node js","React"],//0

        //0      1      2       3
        ["PHP","POO","MySQL","Python"],//1

            //0                1         2 
        ["Teoria da Cores","Photoshop","UX/UI"]//2
    ];
?>

    <h2>Mini exercicio</h2>
    <ul>
        <li><?=$planoDeEstudos[0][2]?></li>
        <li><?=$planoDeEstudos[1][0]?> / <?=$planoDeEstudos[1][2]?></li>
        <li><?=$planoDeEstudos[2][1]?> / <?=$planoDeEstudos[2][0]?></li>
        
    </ul>

    <h2>Análise de arrays (deBug/depuração)</h2>
    <pre><?php var_dump($bandas);?></pre>
    <pre><?= var_dump($bandas)?></pre>

    <p><?php print_r($bandas);?></p>
    <p><?= print_r($bandas)?></p>

    <hr>

    <pre><?=var_dump($planoDeEstudos)?></pre>
</body>
</html>