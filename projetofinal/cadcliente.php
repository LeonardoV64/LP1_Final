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
    <title>Página do Cliente</title>
</head>
<body>
    <header><h1>Clientes</h1></header>

    <main>
        <h2>Cadastrar Novo Cliente</h2>
    <form action="php/crud/inserircliente.php" method="POST">
    <fieldset>
        Nome:</br>
        <input type="text" name="nome"></br>
        E-mail:</br>
        <input type="text" name="email"></br>

        CPF:</br>
        <input type="number" name="cpf"></br>

        Endereço:</br>
        <input type="text" name="end"></br>

        Telefone:</br>
        <input type="number" name="tel"></br>

        Estado:</br>
        <input type="text" name="est"></br>

        Tamanho do calçado:</br>
        <input type="number" min="20" max ="45"name="tam"></br>

        Tipo do Cadastro:</br>
        <input type="text" name="tipo"></br>

        Complemento:</br>
        <input type="text" name="comp"></br>

        <input type="submit" value="Enviar">
    </fieldset>
    </form>

    <a href="php/crud/listarcliente.php">Listar Clientes</a> 

    <form action="php/crud/buscarcliente.php" method="post">
        Digite o nome do cliente:..
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