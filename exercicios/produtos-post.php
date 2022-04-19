<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Processamento Produtos</h1>
    <hr>
    <h2>Dados</h2>
<?php
if(empty($_POST['produto']) || empty($_POST['fabricante']) ){ ?>
    <p style="color:red; font-size:65px;"> Você deve prencher Produtos e Fabricante</p>
<?php } else {  
$produto = filter_input(INPUT_POST,"produto",FILTER_SANITIZE_SPECIAL_CHARS);
$fabricante = filter_input(INPUT_POST,"fabricante",FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST,"preco",FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
$descricao =filter_input(INPUT_POST,"descricao",FILTER_SANITIZE_SPECIAL_CHARS);
//$descricao = $_POST["descricao"];

?>

    <ul>
        <li>Produtos: <?=$produto?></li>
        <li>fabricante: <?=$fabricante?></li>
        <li>Preço: R$: <?=number_format($preco,2, ',')?></li>
        <li>Descrição: <?=nl2br($descricao)?></li>
    </ul>
<?php }?>
</body>
</html>
