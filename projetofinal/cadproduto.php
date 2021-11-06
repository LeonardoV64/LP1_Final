<?php
    SESSION_START();
    if($_SESSION['login']){
        $usuario=$_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/CSS.css" />
    <link rel="icon" href="img/Oedon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    <style>
    fieldset{width:600px;margin:auto;}
    </style>
    <title>Página do Estoque</title>
</head>
<body>
    <header><h1>Produtos</h1></header>

    <main>    
    <h2>Inserir Novo Produto</h2>

    <form action="php/crud/inserirproduto.php" method="POST">
    <fieldset>
        Nome:</br>
        <input type="text" name="nome"></br>
        Quantidade em Estoque:</br>
        <input type="text" name="qtd"></br>

        Cor do Calçado:</br>
        <input type="text" name="cor"></br>

        Desconto:</br>
        <input type="number" name="desc"></br>

        Valor do Calçado:</br>
        <input type="number" name="val"></br>

        Origem:</br>
        <input type="text" name="origem"></br>

        Peso:</br>
        <input type="number" name="peso"></br>

        Marca do Calçado:</br>
        <input type="text" name="marca"></br>

        Complemento:</br>
        <input type="text" name="comp"></br>

        <input type="submit" value="Enviar">
    </fieldset>
    </form>

    <a href="php/crud/listarproduto.php">Checar Estoque</a> 

    <form action="php/crud/buscarproduto.php" method="post">
        Digite o nome do produto:..
        <input type="text" name="buscanome">
        <button type="submit">Buscar</button>
    </form>
    </main>
</body>
</html>

<?php
    }
    else
    {
        echo "<script>
            window.location.href ='index.php'; 
        </script>
        ";
    }

?>