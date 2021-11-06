<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../style/CSS.css" />
    <link rel="icon" href="../../img/Oedon.png"/>
    <title>Busca de Produtos</title>
<?php include_once 'conexao.php';   ?>

</head>
<body>
    <div id="listar">
    
    <?php
        $nome = $_POST["buscanome"];

        $consulta = "select *from tbproduto where nome LIKE '%$nome%' ";

        $executar = mysqli_query($conn,$consulta);
        $resultado = mysqli_num_rows($executar);

        if($resultado != 0)
        {
            echo "<script>alert('Produto localizado com sucesso!');</script>";
        }
        else
        {
           echo "<script>
                    alert('Produto não localizado');
                    window.location.href = '../../index.php'
                 </script>";
        }

        while ($linha = mysqli_fetch_array($executar)) {
    ?>
    <form action="alterarproduto.php" method="POST">
        <fieldset>

      Código: <input type="text" name="cod" value="<?php echo $linha['codp']; ?>" readonly> <br/>
      Nome: <input type="text" name="no" value="<?php echo $linha['nome'];?>" > <br/>
      Quantidade em Estoque: <input type="text" name="qtd" value="<?php echo $linha['quantidade'];?>" > <br/>
      Cor: <input type="text" name="cor" value="<?php echo $linha['cor']; ?>" > <br/>
      Complemento: <input type="text" name="comp" value="<?php echo $linha['complemento'];?>" > <br/>
      Valor: <input type="text" name="val" value="<?php echo $linha['valor'];?>" > <br/>
      Origem: <input type="text" name="ori" value="<?php echo $linha['origem']; ?>" > <br/>
      Marca: <input type="text" name="marca" value="<?php echo $linha['marca'];?>" > <br/>
      Desconto: <input type="text" name="desc" value="<?php echo $linha['desconto'];?>" > <br/>
      Peso: <input type="text" name="peso" value="<?php echo $linha['peso'];?>" > <br/> </br> 

    <button type="submit" style="border:none;background:#fff">
    
    <img src="../../img/alt.png" width="40" height="30">
            
    </button>
    
    <a href="excluirproduto.php?id=<?php echo $linha['codp']; ?>">
   <img src="../../img/lixo.png" width="40" height="30">
   </a>
        </fieldset>
</form>


    <?php } ?>
<a href="../menu.php">Voltar</a>
   
</body>
</html>