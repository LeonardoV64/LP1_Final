<?php

    include_once 'conexao.php';

    $cod = $_GET["id"];

    $excluir = "delete from tbcliente where codc= '$cod'";
    $executar = mysqli_query($conn,$excluir);
    if($executar)
    {
        echo "Cliente excluido com sucesso!";
        echo "<br>";
        echo "<a href='../menu.php'>Voltar</a>";
    } 
    else
    {
        echo "Cliente não excluido!";
        echo "<br>";
        echo "<a href='../menu.php'>Voltar</a>";
    }

?>