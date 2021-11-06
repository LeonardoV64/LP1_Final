<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../style/CSS.css" />
    <link rel="icon" href="../../img/Oedon.png"/>
    <title>Busca de Funcionários</title>
<?php include_once 'conexao.php';   ?>

</head>
<body>
    
    <?php
        $nome = $_POST["buscanome"];

        $consulta = "select *from tbfuncionario where nome LIKE '%$nome%' ";

        $executar = mysqli_query($conn,$consulta);
        $resultado = mysqli_num_rows($executar);

        if($resultado != 0)
        {
            echo "<script>alert('Funcionário localizado com sucesso!');</script>";
        }
        else
        {
           echo "<script>
                    alert('Funcionário não localizado');
                    window.location.href = '../../index.php'
                 </script>";
        }

        while ($linha = mysqli_fetch_array($executar)) {
    ?>
    <form action="alterarfuncionario.php" method="POST">

    <fieldset>
      Código: <input type="text" name="cod" value="<?php echo $linha['codf']; ?>" readonly> <br/>
      Nome: <input type="text" name="no" value="<?php echo $linha['nome'];?>" > <br/>
      Departamento: <input type="text"  name="dep" value="<?php echo $linha['departamento'];?>" > <br/>
      CPF: <input type="text" name="cpf" value="<?php echo $linha['cpf']; ?>" > <br/>
      Endereço: <input type="text" name="end" value="<?php echo $linha['endereco'];?>" > <br/>
      Telefone: <input type="text"  name="tel" value="<?php echo $linha['telefone'];?>" > <br/>
      Estado: <input type="text" name="est" value="<?php echo $linha['estado']; ?>" > <br/>
      Complemento: <input type="text" name="comp" value="<?php echo $linha['complemento'];?>" > <br/>

    <button type="submit" style="border:none;background:#fff">
    
    <img src="../../img/alt.png" width="40" height="30">
            
    </button>
    
    <a href="excluirfunc.php?id=<?php echo $linha['codf']; ?>">
   <img src="../../img/lixo.png" width="40" height="30">
   </a>
 
        </fieldset>
</form>
 
    <?php } ?>
<a href="../menu.php"><h5>Voltar</h5></a>
        
</body>
</html>