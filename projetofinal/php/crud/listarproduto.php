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
    <title>Produtos Cadastrados</title>
<?php include_once 'conexao.php';   ?>

</head>
<body>

    <div id="listar">
    
    <?php
        $consulta = "select *from tbproduto";
        $executar = mysqli_query($conn,$consulta);
        while ($linha = mysqli_fetch_array($executar)) {
    ?>
    <fieldset>    
      Código: <input type="text" value="<?php echo $linha['codp']; ?>" readonly> <br/>
      Nome: <input type="text" value="<?php echo $linha['nome'];?>" readonly> <br/>
      Quantidade em Estoque: <input type="text"  value="<?php echo $linha['quantidade'];?>" readonly> <br/>
      Cor: <input type="text" value="<?php echo $linha['cor']; ?>" readonly> <br/>
      Complemento: <input type="text" value="<?php echo $linha['complemento'];?>" readonly> <br/>
      Valor: <input type="text"  value="<?php echo $linha['valor'];?>" readonly> <br/>
      Origem: <input type="text" value="<?php echo $linha['origem']; ?>" readonly> <br/>
      Marca: <input type="text" value="<?php echo $linha['marca'];?>" readonly> <br/>
      Desconto: <input type="text"  value="<?php echo $linha['desconto'];?>" readonly> <br/>
      Peso: <input type="text"  value="<?php echo $linha['peso'];?>" readonly> <br/> </br>

     </fieldset>


    <?php } ?>
<a href="../menu.php">Voltar</a>
   
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
