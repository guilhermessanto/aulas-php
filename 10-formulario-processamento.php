<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com processamento</title>
</head>
<body>
    <h1>Formulário</h1>


<?php
// Detectar quando o fomulário é acionado
if(isset($_POST['enviar'])){ 
    
    if(empty($_POST['nome']) || empty($_POST['email'])){
?>
    <p>Preencha os campos!</p>
    <p><a href="10-formulario-processamento.php">Voltar</a></p>
<?php
    }else{    
    $nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);   
    $email= filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

?>
    <section>
        <h2>Dados</h2>
        <p>Nome: <?=$nome?></p>
        <p>E-mail: <?=$email?></p>
    </section>
<?php
    }
}else{
?>
    <form action="" name="form" method="POST">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email">
        </p>
        <!-- Importante dar um nome ao botão -->
        <button type="submit" name="enviar">Enviar</button>
    </form>

<?php    
}
?>
</FILTER_SANITIZE_EMAILdy>
</html>