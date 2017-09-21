<?php 

    require_once('conexao.php');
    $con = open_database();
    select_database();
    $sql = "SELECT from pedidos.id, pedidos.cliente, clientes.nome, pedidos.data FROM pedidos INNER JOIN clientes ON pedidos.cliente = clientes.id;";
    $rs = mysqli_query($con,$sql);
    close_database($con);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <title>Manter Pedidos</title>
    </head>
    <body class="container">

        <h1>Manter Pedidos</h1>
        <br><br>

        <input type="button" id="btnNovo" class="btn btn-primary" value="Novo" onclick="javaascript:location.href='frmInserirPedidos.php'">
        <input type="button" id="btnVoltar" class="btn btn-warning" value="Voltar" onclick="javascript:location.href='index.php'"> 
        <input type="button" id="btnLogout" class="btn btn-danger" value="Logout" onclick="javascript:location.href='logout.php'" >

        <br><br>

        <div class="row col-md-12">
            <table class="table table-hover table-bordered" >

                <tr>
                    <th>ID</th>
                    <th>ID Cliente</th>
                    <th>Nome</th>
                    <th>Data</th>
                    <th>Detalhes</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>

                <?php while($row = mysqli_fetch_assoc($rs)) { ?>
                
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['cliente'] ?></td>
                    <td><?php echo $row['nome'] ?></td>
                    <td><?php echo (new DataTime($row['data']))->format("d/m/y"); ?></td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="javascript:location.href='frmDetalhesPedido.php?id=' + <?php echo row['id'] ?>">
                            <span class="glyphicon-list-alt" aria-hidden="true"></span>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="javascript:location.href='frmEditarPedidos.php?id=' + <?php echo row['id'] ?>">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" onclick="javascript:location.href='frmRemoverPedidos.php?id=' + <?php echo row['id'] ?>">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
                
                <?php } ?>    

            </table>
        </div>
    
    </body>
</html>