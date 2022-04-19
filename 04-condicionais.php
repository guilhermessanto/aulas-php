<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais  PHP</title>
    <style>
        .ok{ color:green;}
        .repor{color:red;}
    </style>
</head>
<body>
    <h1>Estruturas de Controle Condicional</h1>
    <hr>

    <h2>Simples</h2>
<?php
    $numero = 5;

    if($numero > 1){
        echo "<p>$numero é maior que 1</p>";
    }
    // sintaxe alternativa (omitindo chaves)
    if($numero > 1) echo "<p>$numero é maior que 1</p>";   
?>
    <h2>Composta</h2>
<?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 0; //o que temos no momento
    $qtdCritica = 14; //mínimo necessário

    echo "<h3> $produto</h3>";

    if($qtdEmEstoque < $qtdCritica){
        echo "<p class='repor'> É necessário comprar!</p>";
        if($qtdEmEstoque === 0){
            echo "<p><mark><b>URGENTE!!!</b></mark></p>";
        }

    }else {
        echo "<p class=\"ok\"> Estoque OK!</p>";
    }

?>
    <h2>Encadeada</h2>

<?php
/* Cardápio Digital
1 -> Pastel
2 -> Pizza
3 -> Esfiha
x -> Opção inválida
*/
    $opcao = 4; //começa com qualquer valor

    if($opcao === 1){
        //echo  "<p>Pastel</p>";
        $opcaoEscolhida = "Pastel";
    }elseif($opcao === 2){
        // echo  "<p>Pizza</p>";
        $opcaoEscolhida = "Pizza";
    }elseif($opcao === 3){
        //echo  "<p>Esfiha</p>";
        $opcaoEscolhida = "Esfiha";
    }else{
        //echo  "<p>Opção inválida</p>";
        $opcaoEscolhida = "Opção inválida";
    }
    echo  "<p>$opcaoEscolhida</p>";

?>
    <h2>Switch/case</h2>
<?php
    switch($opcao){
        case 1:$pedido = "Pastel"; break; 
        case 2:$pedido = "Pizza"; break; 
        case 3:$pedido = "Esfiha"; break; 
        default:$pedido = "Opção invalida"; break;
    }
    echo  "<p>$pedido</p>";  
?>
</body>
</html>