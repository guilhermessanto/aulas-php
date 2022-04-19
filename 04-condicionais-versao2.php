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
?>        
       <p><?= $numero?> é maior que 1</p>
<?php        
    }  
?>
    <h2>Composta</h2>
<?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 0; //o que temos no momento
    $qtdCritica = 14; //mínimo necessário
?>
    <h3> <?=$produto?></h3>
<?php
if($qtdEmEstoque < $qtdCritica){
?>        
    <p class="repor"> É necessário comprar!</p>
    <?php
    if($qtdEmEstoque === 0){
    ?>            
        <p><mark><b>URGENTE!!!</b></mark></p>
<?php        
     }

}else {     
?>        
    <p class= "ok"> Estoque OK!</p>
<?php        
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
?>        
    <p>Pastel</p>
    <?php
        $opcaoEscolhida = "Pastel";
    }elseif($opcao === 2){
    ?>    
    <p>Pizza</p>
    <?php
        $opcaoEscolhida = "Pizza";
    }elseif($opcao === 3){
    ?>    
        <p>Esfiha</p>
    <?php    
        $opcaoEscolhida = "Esfiha";
    }else{
    ?>    
       <p>Opção inválida</p>
<?php   
        $opcaoEscolhida = "Opção inválida";
    }
?>
    <p><?=$opcaoEscolhida?></p>


    <h2>Switch/case</h2>
<?php
    switch($opcao){
        case 1:$pedido = "Pastel"; break; 
        case 2:$pedido = "Pizza"; break; 
        case 3:$pedido = "Esfiha"; break; 
    default:$pedido = "Opção invalida"; break;
    }
?>    
    <p><?=$pedido?></p>  
</body>
</html>