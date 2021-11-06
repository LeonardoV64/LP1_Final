<?php

if($_POST['nome'] != "")
{
    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['end'];
    $telefone = $_POST['tel'];
    $est = $_POST['est'];
    $tam = $_POST['tam'];
    $tipo = $_POST['tipo'];
    $comp = $_POST['comp'];
 
    
    $sql = "insert into tbcliente (nome,email,cpf,endereco,telefone,estado,tamanho,tipocad,complemento)	 
    values ('$nome','$email','$cpf','$endereco','$telefone','$est','$tam','$tipo',' $comp');";
    
    $query = mysqli_query($conn,$sql);
    
    echo 'Dados cadastrado com sucesso!';

}
else
{
    echo 'Dados não cadastrados!';
}


?>
<a href="../menu.php">Voltar</a>
