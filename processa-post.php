<!-- //processa-get.php
 Array SUPER GLOBAL
$_SERVER
$_GET -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Processamento de dados usando POST</h1>
    <hr>

<?php
if(empty($_POST['nome']) || empty($_POST['email']) ){ ?>
    <p style="color:red; font-size:65px;"> Você deve prencher nome e e-mail</p>
<?php } else {    

    $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST,"idade",FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
    $mensagem =filter_input(INPUT_POST,"mensagem",FILTER_SANITIZE_SPECIAL_CHARS);
    /* usando o operador de coalescência nula ?? se houver interesses, armazene seus Valores
    senão, deixe o array vazio */
    
    //$interesses = $_POST['interesses'] ?? [];
    $interesses = filter_var_array($_POST['interesses'] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);
    $informativos = filter_input(INPUT_POST,"informativos",FILTER_SANITIZE_SPECIAL_CHARS);
    ?>    
        <h2>Dados</h2>
        <ul>
            <li>Nome: <?= $nome?></li>
            <li>Idade: <?= $idade?> anos</li>
            <li>E-mail: <?=$email ?></li>
            <li>Informativos: <?= $informativos?></li> 
            <?php if(!empty($interesses)){ ?>
        <!-- Opção 1: implodingo o array, transformando em string -->      
            <li>interesses: <?= implode(", ",$interesses)?></li>    

        <!-- Opção 2: acessar o array usando loop --> 
            <li> Interesses:
                <ul>
                    <?php foreach($interesses as $interesse){?>
                        <li><?=$interesse?></li>
                    <?php }?>
                </ul>
            </li>
            <?php }?>              
            <li>Mensagem: <?=$mensagem ?></li>
        </ul>
<!--Fim if/else da validação de campos obrigatórios -->
<?php }?>   
</body>
</html>