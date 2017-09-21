<?php
    session_start();
    // if(!isset($_SESSION['user'])){
    //     header("Location: index.php");

        require_once('conexao.php');
        $con = open_database();
        select_database();
        $sql = "SELECT * FROM clientes;";
        $rs = mysqli_query($con, $sql) or die(mysqli_error($con));
        close_database($con);
    //}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="bootstrap/css/style.css" rel="stylesheet">
        <title>Manter Clientes</title>
    </head>
    <body class="container">

        <h1>Manter Clientes</h1>
        <br><br>

        <form class="form-inline">
        <input type="button" id="btnNovo" class="btn btn-primary" value="Novo" onclick="javascript:location.href='frmInserirClientes.php'" >
        <input type="button" id="btnVoltar" class="btn btn-warning" value="Voltar" onclick="javascript:location.href='index.php'"> 
        <input type="button" id="btnLogout" class="btn btn-danger" value="Logout" onclick="javascript:location.href='logout.php'" >
        <!-- <div class="form-group">
            <label for="Pesquisar Produtos"> ----------------------------------------------------------------------------------------------------------------------------- Procurar Produtos </label>
            <input type="text" id="search" class="form-control ">
        </div> -->
        </form>
        <br><br>
        
        <div class="row col-md-12 " >
            <table class=" table table-hover table-bordered table-responsive ">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($rs)){ ?>
                
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nome'] ?></td>
                        <td><?php echo $row['cpf'] ?></td>
                        <td><?php echo $row['cidade'] ?></td>
                        <td><?php echo $row['estado'] ?></td>
                        <td>
                            <button type="button" class="btn btn-warning" onclick="javascript: location.href='frmEditarClientes.php?id=' + <?php echo $row['id'] ?>">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" onclick="javascript: location.href='frmRemoverClientes.php?id=' + <?php echo $row['id'] ?>">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true" ></span>
                            </button> 
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    
    </body>
</html>