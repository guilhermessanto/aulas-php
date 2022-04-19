<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulário Produtos</h1>
    <form action="produtos-post.php" method="post" >
        <p>
            <label for="produto">Produto:</label>
            <input type="text" name="produto" id="produto">
        </p>
        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante">
                <option value="" name="fabricante"></option>
                <?php include "fabricantes.php"?>
            </select>
        </p>
        <p>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01"   placeholder='0.00'>
        </p>
        <p>
            <label for="descricao">Descrição do produto:</label><br>
                <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </p>
        <button type="submit" name="enviar">Enviar dados</button>
    </form>
</body>
</html>