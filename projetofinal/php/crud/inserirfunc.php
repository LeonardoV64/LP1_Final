<?php

if($_POST['nome'] != "")
{
    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $dep = $_POST['dp'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['end'];
    $telefone = $_POST['tel'];
    $est = $_POST['est'];
    $comp = $_POST['comp'];
    $senha=$_POST['senha'];
    $login=$_POST['login'];
 
    
    $sql = "insert into tbfuncionario (nome,departamento,cpf,endereco,telefone,estado,complemento,login,senha)	 
    values ('$nome','$dep','$cpf','$endereco','$telefone','$est',' $comp','$login','$senha');";
    
    $query = mysqli_query($conn,$sql);
    
    echo 'Dados cadastrados com sucesso!';

}
else
{
    echo 'Dados não cadastrados!';
}


?>
<a href="../menu.php">Voltar</a>