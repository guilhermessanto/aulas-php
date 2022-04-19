<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>
    <h2>Funções com sub-rotina ou procedimento</h2>

<?php
    function dadosAutor(){
        echo "<div>";
        echo "<p>Guilherme Santana</p>";
        echo "<p>guilherme@gmail.com</p>";
        echo "</div>";
    }
?>
    <section>
        <h3>Chamada da sub-rotina</h3>
        <?= dadosAutor()?>
    </section>
    <article>
        <h4>Outra chamada</h4>
        <?= dadosAutor()?>
    </article>
    <hr>

    <h2>Função com retorno de dados</h2>
<?php
function dadosCurso(){
    return "Téc. em Informática para Internet";
}
?>    
    <p>Estamos no curso de <?=dadosCurso()?></p>
    <p><?=dadosCurso()?> é ministradi no Senac Penha</p>
    <hr>
    <h2>Função com parâmetros (ou argumentos)</h2>
<?php
//variavel fora da função - variavel Global
function soma($valor1,$valor2,$valor3 = 0){
//variavel dentro da função - variavel Local
    $total = $valor1 + $valor2 + $valor3;
    return $total;
}
?>
    <p><?=soma(1,2,3)?></p>
    <p><?=soma(10,20,30)?></p>
    <p><?=soma(100,200,300)?></p>

<?php
// variavel abaixo é de escopo global
$resultado = soma(1500,2000,125);
?>    
    <p><?=$resultado?></p>

<?php
//passando uma função como condição de um if
if(soma(500,200,700) > 1000){
    echo "Resultado da função é maior/igual a 1000";
}

function verificarNegativo($valor){
    /*versão 1 - if/else tradicional
    if($valor < 0){
         return "negativo";
     }else{
         return "não é negativo";
     }*/

    //versão 2 - usando operador ternário
    return $valor < 0 ? "negativo" : "não é negativo";
}
?>

    <p><?=verificarNegativo(10)?></p>
    <p><?=verificarNegativo(-150)?></p>
    <p><?=verificarNegativo(258.99)?></p>
    <hr>
    <h2>Função anônima (closure,lambda)</h2>

<?php
$formataPreco = function ($valor){
        return "R$ ".number_format($valor, 2, ",", ".");
};
?>

    <p><?=$formataPreco(1000)?></p>
    <p><?=$formataPreco(1500)?></p>
    <p><?=$formataPreco(1500.75)?></p>
    <hr>

    <h2>Indução de tipos</h2>

<?php

//float = numeros quebrados, int = numeros inteiros , string = caracteres
function calculoMedia(float $nota1, int $nota2):float {
    $media = ($nota1 + $nota2)/2;
    return $media;
}
?>
    <P><?=calculoMedia(8.5,7)?></P>
</body>
</html>