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
    <link rel="stylesheet" type="text/css" href="../style/CSS.css" />
    <link rel="icon" href="../img/Oedon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    <style>
    fieldset{width:600px;margin:auto;}
    </style>
    <title>Menu</title>
</head>
<body>
    <header>
    <h1>Menu Principal</h1>
    <h2>Perfil:<?php echo $usuario ?></h2>
    </header>
    
    
    <main>
    <div class='container'>

<a href="../cadcliente.php">Informações de Clientes</a></br>
<a href="../cadproduto.php">Informações de Produtos</a></br>
<a href="../cadfunc.php">Informações de Funcionários</a><br/>

    </div>

<a href="fimsessao.php">Sair da Sessão</a>

</main>
</body>

</html>
<?php
    }
    else
    {
        echo "<script>
            window.location.href ='../index.php'; 
        </script>
        ";
    }

?>