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
    <title>Página do Funcionário</title>
</head>
<body>
    <header><h1>Funcionários</h1></header>

        <main>
        <h2>Inserir Novo Funcionário</h2>
    <form action="php/crud/inserirfunc.php" method="POST">
    <fieldset>
        Nome:</br>
        <input type="text" name="nome"></br>
        Depatamento:</br>
        <input type="text" name="dp"></br>

        CPF:</br>
        <input type="number" name="cpf"></br>

        Endereço:</br>
        <input type="text" name="end"></br>

        Telefone:</br>
        <input type="number" name="tel"></br>

        Estado:</br>
        <input type="text" name="est"></br>

        Complemento:</br>
        <input type="text" name="comp"></br>

        Login:</br>
        <input type="text" name="login"></br>

        Senha:</br>
        <input type="text" name="senha"></br>


        <input type="submit" value="Enviar">
    </fieldset>
    </form>

    <a href="php/crud/listarfuncionario.php">Listar Funcionários</a> 

 
    <form action="php/crud/buscarfunc.php" method="post">
        Digite o nome do funcionário:...
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