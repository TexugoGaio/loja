<?php
    require_once('conexao.php');

    $id = trim($_REQUEST['id']);

    $con = open_database();
    select_database();
    $sql = "SELECT * FROM produtos WHERE id=" . $id;
    $rs = mysqli_query($con , $sql) or die(mysqli_error($con));
    close_database($con);

    $row = mysqli_fetch_assoc($rs);
    $desc = $row['descricao'];
    $uni = $row['unidade'];
    $qtd = $row['quantidade'];
    $valor = $row['valor'];

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <title>Edição de Produtos</title>
    </head>
    <body class="container">

        <h1>Editar dados do Produto</h1>

        <form action="EditarProdutos.php" id="frmEditarProd" name="frmEditarProd" method="post">

            <div class="form-group">
              <label for="lblID">ID: <?php echo $id?> </label>
              <input type="hidden" name="txtID" value="<?php echo $id?>"/>
            </div>

            <div class="form-group">
                <label for="lblDesc">Descrição:</label>
                <input type="text" class="form-control" name="txtDesc" value="<?php echo $desc ?>" placeholder="Descrição do Produto" >
            </div>

            <div class="form-group">
                <label for="lblUni">Unidade:</label>
                <input type="text" class="form-control" name="txtUni" value="<?php echo $uni ?>" placeholder="Tipo de Unidade" >
            </div>

            <div class="form-group">
                <label for="lblQtd">Quantidade:</label>
                <input type="text" class="form-control" name="txtQtd" value="<?php echo $qtd ?>" placeholder="Quantidade de Unidades" >
            </div>

            <div class="form-group">
                <label for="lblValor">Valor:</label>
                <input type="text" class="form-control" name="txtValor" value="<?php echo $valor ?>" placeholder="Valor Unitário" >
            </div>

            <input type="submit" id="btnEditar" name="btnEditar" class="btn btn-success" value="Salvar">

            <input type="button" id="btnVoltar" name="btnVoltar" class="btn btn-warning" value="Voltar" onclick="javascript:location.href='frmListarProdutos.php'">
        
        </form>

    
    </body>
</html>