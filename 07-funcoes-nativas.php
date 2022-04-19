<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas</title>
</head>
<body>
    <h1>Exemplos de funções nativas do php</h1>
    <hr>

    <h2>Strings</h2>
<?php
/* trim()*/

$nome =" Guilherme S. Santos    ";
$nomeSemEspaco = trim($nome);
?>
    <pre><?=var_dump($nome)?></pre>
    <pre><?=var_dump($nomeSemEspaco)?></pre>

    <h3>str_replace()</h3>
<?php
//troca palavras determinadas
$fraseFeia = "<p>Fulano é um bobão e xarope</p> ";
$fraseBonita = str_replace(
    ["bobão","xarope"],
    ["cara legal","genial"],
    $fraseFeia

);
echo $fraseFeia;
echo $fraseBonita;
?>

    <h3>Explode()</h3>
    <!-- explote transforma string em array -->
<?php
$linguagens = "HTML - CSS - JS";
$arrayLinguagens = explode(" - ", $linguagens);
?>

<pre><?=var_dump($linguagens)?></pre>
<pre><?=var_dump($arrayLinguagens)?></pre>

<hr>
    <h2>Arrays</h2>


    <h3>inplode()</h3>
<!-- inplote transforma array em string-->
<?php
$bandas = ["savatage","nightwish","ghost"];
$stringBandas = implode(" / ", $bandas);
?>
<pre><?=var_dump($bandas)?></pre>
<pre><?=var_dump($stringBandas)?></pre>


    <h3>extract()</h3>
<?php
$aluno = [
    "id" => "Guilherme",
    "idade" => "23",
    "sexo" => "Masculino",
    "cidade" => "São Paulo"
];
extract($aluno);
?>
    <p><?=$id?></p>
    <p><?=$idade?></p>
    <p><?=$sexo?></p>
    <p><?=$cidade?></p>


    <hr>
    <h2>Filtros</h2>
    <!--valida email  -->
<?php
$email = "guilherme@com.br";
$ataque = "<script>document.body.innerHTML = 'Sou ráqui! hahahah >.<'  </script>";

$ataqueAnulado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);


echo $ataqueAnulado;
?>
<p><?=var_dump(filter_var ($email, FILTER_VALIDATE_EMAIL) )?></p>

    <h2>Segurança(criptografia)</h2>
<?php
$senha = "123abc"; // texto puro ou plain text (sem segurança)
/* algoritmos mais comuns
MD5, SHA1, SHA256 */

$senhaMD5 = md5($senha);
$senhaSHA1 = sha1($senha);
$senhaSHA256 = hash('sha256',$senha);


//medoto recomentdado atualmente para senhas

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
?>
<p>Senha (texto puro): <?=$senha?></p>
<p>Senha (texto puro): <?=strlen($senha)?></p>
<p>Senha (MD5): <?=$senhaMD5 ?></p>
<p>Senha (SHA1): <?=$senhaSHA1 ?></p>
<p>Senha (SHA256): <?=$senhaSHA256 ?></p>
<!-- Hash de 60 caracteres -->
<p>Senha (usando password_hash): <?=$senhaSegura ?></p>
<!-- strlen() conta quantos caracteres tem -->

<?php
$senhaDigitada = "123abc";
if(password_verify($senhaDigitada,$senhaSegura)){
//if($senhaDigitada === $senhaSegura){} NÃO FUNCIONA    
echo "beleza, senhas iguais";
}else{
    echo "opa, senha errada!";
}
?>
</body>
</html>