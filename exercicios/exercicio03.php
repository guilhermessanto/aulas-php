<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    <h1>Exercicio média</h1>

<?php

  $salario = 1000;
  
  

  if($salario <=500){
    $reajuste = $salario * 1.15;  
  }elseif($salario <= 1000){
    $reajuste = $salario * 1.10;
  }else{
      $reajuste = $salario * 1.05;
  }
  //forma declarada
  //$format_salario = number_format($salario, 2);
  $format_reajuste = number_format($reajuste, 2);
?>
        <!-- forma direta -->
    <p>O salario era de R$<?=number_format($salario, 2)?> e com o reajuste foi para R$<?=$format_reajuste?></p>
</body>
</html>