<?php

if($_POST['nome'] != "")
{
    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $qtd = $_POST['qtd'];
    $cor = $_POST['cor'];
    $val = $_POST['val'];
    $origem = $_POST['origem'];
    $marca = $_POST['marca'];
    $desc= $_POST['desc'];
    $peso = $_POST['peso'];
    $comp = $_POST['comp'];
 
    
    $sql = "insert into tbproduto (nome,quantidade,cor,valor,origem,marca,desconto,peso,complemento)	 
    values ('$nome','$qtd','$cor','$val','$origem','$marca','$desc','$peso',' $comp');";
    
    $query = mysqli_query($conn,$sql);
    
    echo 'Dados cadastrado com sucesso!';

}
else
{
    echo 'Dados não cadastrados!';
}


?>
<a href="../menu.php">Voltar</a>