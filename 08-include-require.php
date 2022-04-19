<!-- Fazendo inclusão de um arquivo php -->
<?php include "recursos.php"?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>
<body>
    <h1>Inclusão de Recursos </h1>
    <hr>
    <h2><?=ESCOLA?></h2>
    <p>Estamos fazendo o curso de <?=$curso?></p>
    <ul>
        <?php foreach($tecnologias as $tecnologia){?>
            <li><?=$tecnologia?></li>
        <?php }?>    
    </ul>
    <p>O aluno Chapolin Colorado tem 25 anos e é <?= verificaIdade(25)?> de idade.</p>

    <hr>
<!-- include da um alerta e executa parcialmente a pagina -->
    <!-- <article>
        <h2>Conteúdo qualquer</h2>
        <?php include "textos.php"?>
    </article> -->
    <!-- require da um erro fatal e para tudo   -->
    <article>
        <h2>Conteúdo qualquer</h2>
        <?php require "textos.php"?>
    </article>
</body>
</html>