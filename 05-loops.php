<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1>Estrutura de controle de Repetição</h1>
    <hr>
    <h2>while (enquanto)</h2>
 
<?php
$i = 1;

while( $i <= 5 ){
?>    
    <p><?=$i?></p>
    
<?php
//operador incremento (++)    
    $i++;
}
?>

<hr>

    <h2>do/while(repita)</h2>
<?php
$j = 1;
    do{
?>
    <div><h3>Olá Mundo!</h3></div>
<?php
    $j++;
}while( $j <= 3 );
?>

<hr>
    <h2>For (para)</h2>

<?php
//para $i de 1 ate 10 faça
    //controle; condição; atualização
for($i = 1; $i <= 10; $i++){
    echo $i." ";
}

/* Exercício
1) Crei um array com os meses do ano
2) Usando um loop for, acesse e mostre os nomes dos meses dentro de uma lista ordena.
*/

?>

    <h2>Exercício Meses</h2>
<?php
$meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
?>
    <ol>
<?php
for($i = 0; $i < count($meses); $i++){
?>
    <li><?=$meses[$i]?></li>
<?php    
}
?>
    </ol>

    <h2>foreach (para cada...)</h2>

    <ol>
<?php foreach($meses as $mes){?>
        <li><?=$mes?></li>
<?php } ?>
    </ol>

<?php
//Array associativos
$clubes = [
    "Corinthians" => "timão",
    "Palmeiras"=> "Porco",
    "São Paulo" => "tricolor",
    "santos"=> "Peixe"
];
    // foreach($clubes as $clube){   
    foreach($clubes as $clube =>$apelido){
?>
    <p>O <?= $clube ." é conhecido como ". $apelido ?></p>
        
<?php }
//matriz (array dentro de array) 
$alunos = [
    [
        "nome" => "Chaves",
        "idade" => 8
    ],
    [
        "nome" => "Chapolin",
        "idade" => 20   
    ],
    [
        "nome" => "Chiquinha",
        "idade" => 10
    ]
];

foreach($alunos as $aluno){
?>
    <p>Nome:  <?= $aluno ["nome"]?> </p>
    <p>Idade: <?=$aluno["idade"]?> </p>
    <hr>

<?php } ?>
</body>
</html>