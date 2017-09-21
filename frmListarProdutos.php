<?php
    session_start();
    // if(!isset($_SESSION['user'])){
    //     header("Location: index.php");

        require_once('conexao.php');
        $con = open_database();
        select_database();
        $rs = mysqli_query($con, "SELECT * FROM produtos;");
        close_database($con);
    //}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="bootstrap/css/style.css" rel="stylesheet">
        <title>Manter Produtos</title>
    </head>
    <body>

        <h1>Manter Produtos</h1>
        <br><br>

        <input type="button" id="btnNovo" class="btn btn-primary" value="Novo" onclick="javascript:location.href='inserirProduto.php'" >
        <input type="button" id="btnLogout" class="btn btn-danger" value="Logout" onclick="javascript:location.href='logout.php'" >

        <br><br>

        <div class="row col-md-7">
            <table class="table table-striped table table-hover" >
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Unidade</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($rs)){ ?>
                
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['descricao'] ?></td>
                        <td><?php echo $row['unidade'] ?></td>
                        <td><?php echo $row['quantidade'] ?></td>
                        <td><?php echo $row['valor'] ?></td>
                        <td>
                            <button type="button" class="btn btn-warning" onclick="javascript: location.href='frmEditarProdutos.php?id=' + <?php echo $row['id'] ?>">
                                <span class="glyphicon-pencil" aria-hidden="true" ></span>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" onclick="javascript: location.href='frmRemoverProdutos.php?id=' + <?php echo $row['id'] ?>">
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    
    </body>
</html>
