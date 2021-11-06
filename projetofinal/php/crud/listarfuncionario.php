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
    <link rel="stylesheet" type="text/css" href="../../style/CSS.css" />
    <link rel="icon" href="../../img/Oedon.png" />
    <title>Funcionários Cadastrados</title>
<?php include_once 'conexao.php';   ?>

</head>
<body>


    
    <?php
        $consulta = "select *from tbfuncionario";
        $executar = mysqli_query($conn,$consulta);
        while ($linha = mysqli_fetch_array($executar)) {
    ?>
    <fieldset>   
      Código: <input type="text" value="<?php echo $linha['codf']; ?>" readonly> <br/>
      Nome: <input type="text" value="<?php echo $linha['nome'];?>" readonly> <br/>
      Departamento: <input type="text"  value="<?php echo $linha['departamento'];?>" readonly> <br/>
      CPF: <input type="text" value="<?php echo $linha['cpf']; ?>" readonly> <br/>
      Endereço: <input type="text" value="<?php echo $linha['endereco'];?>" readonly> <br/>
      Telefone: <input type="text"  value="<?php echo $linha['telefone'];?>" readonly> <br/>
      Estado: <input type="text" value="<?php echo $linha['estado']; ?>" readonly> <br/>
      Complemento: <input type="text" value="<?php echo $linha['complemento'];?>" readonly> <br/>
     </br>

    </fieldset>


    <?php } ?>
<a href="../menu.php"><h5>Voltar</h5></a>
  
</body>
</html>
<?php
    }
    else
    {
        echo "<script>
            window.location.href ='../../index.php'; 
        </script>
        ";
    }

?>