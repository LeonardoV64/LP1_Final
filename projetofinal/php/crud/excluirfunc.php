<?php

    include_once 'conexao.php';

    $cod = $_GET["id"];

    $excluir = "delete from tbfuncionario where codf= '$cod'";
    $executar = mysqli_query($conn,$excluir);
    if($executar)
    {
        echo "Funcionário excluido com sucesso!";
        echo "<br>";
        echo "<a href='../menu.php'>Voltar</a>";
    } 
    else
    {
        echo "Funcionário não excluido!";
        echo "<br>";
        echo "<a href='../menu.php'>Voltar</a>";
    }

?>