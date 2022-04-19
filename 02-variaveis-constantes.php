<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
    <style>
        <?php $cor= "green";?>

        p{ color:<?=$cor?>}
    </style>
</head>
<body>
    <h1>Manupulando dados na memória</h1>
    <hr>

<?php
  //Variáveis
    $curso = "Técnico em Informática para Internet"; //string
    $ano = 2022; //inteiro
    $preco = 2500.45; //real(float)

    echo "<h2>Saídas de dados usando echo e a sintaxe completa</h2>";
    echo "<p>$curso</p>"; //aspa dupla permite interpolação (variável e texto)
    echo "<p>$ano</p>";  
    echo "<p>$preco</p>";
    echo '<p>$preco</p>'; //aspa simples encara tudo como texto

    //Estamos faznedo o curso técnido de Interne no ano de 2022
    echo "<p>Estamos faznedo o curso $curso no ano de $ano</p>";
?>
    <h2>Saída de dados usando sintaxe simplificada</h2>
    <p> <?php echo $curso?> </p>
    <p> <?=$curso?> </p>

    <p>Estamos faznedo o curso <?=$curso?> no ano de <?=$ano?></p>

    <hr>
<?php
    //contantes


    //1ª forma: usando a função define( "NOME", "VALOR")
    define("MEU_NOME","Guilherme");

    //2ª forma: usando a palavra-chave const
    const ESCOLA = "Senac";
?>

    <p>Olá! Me chamo <?=MEU_NOME?> </p>
    <p>Estamos estudando no  <b> <?=ESCOLA?> </b> </p>
    <hr>
<?php //versão concatenada (mais trabalhosa)
    echo "<p> Olá! Me chamo".MEU_NOME." </p>";
?>

</body>
</html>