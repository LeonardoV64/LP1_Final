<?php
    include_once 'conexao.php';

    $cod = $_POST["cod"];
    $nome = $_POST["no"];
    $qtd = $_POST["qtd"];
    $cor = $_POST['cor'];
    $val = $_POST['val'];
    $origem = $_POST['ori'];
    $marca = $_POST['marca'];
    $comp = $_POST['comp'];
    $desc=$_POST['desc'];
    $peso=$_POST['peso'];
    $alterar = "
        update tbproduto set
        nome = '$nome',
        quantidade='$qtd',
        cor='$cor',
        valor='$val',
        origem='$origem',
        marca='$marca',
        complemento='$comp',
        desconto='$desc',
        peso='$peso'
        where 
        codp= '$cod';
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