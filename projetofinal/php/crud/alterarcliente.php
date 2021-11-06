<?php
    include_once 'conexao.php';

    $cod = $_POST["cod"];
    $nome = $_POST["no"];
    $email = $_POST["em"];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['end'];
    $telefone = $_POST['tel'];
    $est = $_POST['est'];
    $tam = $_POST['tam'];
    $tipo = $_POST['tipo'];
    $comp = $_POST['comp'];
    $alterar = "
        update tbcliente set
        nome = '$nome',
        email = '$email',
        cpf='$cpf',
        endereco='$endereco',
        telefone='$telefone',
        estado='$est',
        tamanho='$tam',
        tipocad='$tipo',
        complemento='$comp'
        where 
        codc= '$cod';
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