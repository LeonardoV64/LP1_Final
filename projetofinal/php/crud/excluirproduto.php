<?php

    include_once 'conexao.php';

    $cod = $_GET["id"];

    $excluir = "delete from tbproduto where codp= '$cod'";
    $executar = mysqli_query($conn,$excluir);
    if($executar)
    {
        echo "Produto excluido com sucesso!";
        echo "<br>";
        echo "<a href='../menu.php'>Voltar</a>";
    } 
    else
    {
        echo "Produto não excluido!";
        echo "<br>";
        echo "<a href='../menu.php'>Voltar</a>";
    }
?>