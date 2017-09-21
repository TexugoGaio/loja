<?php
    require_once('conexao.php');

    $id = trim($_REQUEST['id']);

    $con = open_database();
    select_database();
    $sql = "SELECT * FROM clientes WHERE id=" . $id;
    $rs = mysqli_query($con , $sql) or die(mysqli_error($con));
    close_database($con);

    $row = mysqli_fetch_assoc($rs);
    $nome = $row['nome'];
    $cpf = $row['cpf'];
    $cid = $row['cidade'];
    $est = $row['estado'];

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <title>Edição de Clientes</title>
    </head>
    <body class="container">

        <h1>Editar dados do Cliente</h1>

        <form action="EditarClientes.php" id="frmEditarCli" name="frmEditarCli" method="post">

            <div class="form-group">
              <label for="lblID">ID: <?php echo $id?> </label>
              <input type="hidden" name="txtID" value="<?php echo $id?>"/>
            </div>

            <div class="form-group">
                <label for="lblNome">Nome:</label>
                <input type="text" class="form-control" name="txtNome" value="<?php echo $nome ?>"  >
            </div>

            <div class="form-group">
                <label for="lblCPF">CPF:</label>
                <input type="text" class="form-control" name="txtCPF" value="<?php echo $cpf ?>"  >
            </div>

            <div class="form-group">
                <label for="lblCid">Cidade:</label>
                <input type="text" class="form-control" name="txtCid" value="<?php echo $cid ?>" >
            </div>

            <div class="form-group">
                <label for="lblEst">Estado:</label>
                <input type="text" class="form-control" name="txtEst" value="<?php echo $est ?>">
            </div>

            <input type="submit" id="btnEditar" name="btnEditar" class="btn btn-success" value="Salvar">

            <input type="button" id="btnVoltar" name="btnVoltar" class="btn btn-warning" value="Voltar" onclick="javascript:location.href='frmListarClientes.php'">
        
        </form>

    
    </body>
</html>