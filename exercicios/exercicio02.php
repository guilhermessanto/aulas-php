<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <style>
        .box{
            width:210px;
            border:solid 4px black;
            margin-bottom:10px;
        }
        p,h2{
            padding-left:5px;
            font-size:18px;
        }
    </style>
</head>
<body>
    <h1>Dados Pessoais</h2>
<?php
    $usuarioUm = [
        "Guilherme",23,"masculino","São Paulo","gui@gmail.com","3333"];
    $usuarioDois = [
        "Carol",21,"Feminino","São Paulo","carol@gmail.com","2222" 
    ];

    // versão professor

    $dados1 = [
        "usuario" => "guilherme",
        "email" => "gui@gmail.com",
        "idade" => "23",
        "sexo" => "masculino",
        "cidade" => "São Paulo" 
    ];


?>

    <section class="box">
        <h2>Nome: <?=$usuarioUm[0]?></h2>
        <p>Idade: <?=$usuarioUm[1]?></p>
        <p>email: <?=$usuarioUm[4]?></p>       
        <p>Genero: <?=$usuarioUm[2]?></p>
        <p>Cidade: <?=$usuarioUm[3]?></p>
    </section>
    <section class="box">
        <h2>Nome: <?=$usuarioDois[0]?></h2>
        <p>Idade: <?=$usuarioDois[1]?></p>
        <p>email: <?=$usuarioDois[4]?></p>
        <p>Genero: <?=$usuarioDois[2]?></p>
        <p>Cidade: <?=$usuarioDois[3]?></p>
    </section>

    <!-- versão professor -->
    <article class="box">
        <h2>Dados</h2>
        <p>Usuário: <?=$dados1['usuario']?></p>
        <p>E-mail: <?=$dados1['email']?></p>
        <p>Idade: <?=$dados1['idade']?></p>
        <p>Sexo: <?=$dados1['sexo']?></p>
    </article>


</body>
</html>