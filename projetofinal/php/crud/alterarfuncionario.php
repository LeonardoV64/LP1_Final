<?php
    include_once 'conexao.php';

    $cod = $_POST["cod"];
    $nome = $_POST["no"];
    $dep = $_POST["dep"];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['end'];
    $telefone = $_POST['tel'];
    $est = $_POST['est'];
    $comp = $_POST['comp'];
    $alterar = "
        update tbfuncionario set
        nome = '$nome',
        departamento='$dep',
        cpf='$cpf',
        endereco='$endereco',
        telefone='$telefone',
        estado='$est',
        complemento='$comp'
        where 
        codf= '$cod';
    ";
    $executar = mysqli_query($conn,$alterar);
    if($alterar)
    {
        echo "Dados alterados com sucesso!";
        echo "<br>";
        echo "<a href='../menu.php'>Voltar</a>";
    }
    else
    {
        echo "Dados não alterados com sucesso!";
        echo "<br>";
        echo "<a href='../menu.php'>Voltar</a>";
    }



?>