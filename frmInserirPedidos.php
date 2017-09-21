<html>
    
     <head>
        <meta charset="UTF-8">
        <title>Inserir Pedido</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
    </head>
    <body class="container ">
        <br><br>
        <h1>Cadastrar novo Pedido</h1>
        <br><br><br>
        <form id="frmCadPed" name="frmCadPed" method="post" action="InserirPedidos.php" role="form" >


            <div class="form-group">
                <label for="lblCliente">Cliente</label>
                <br><br>
                <select name="slcCliente" id="slcCliente" class="form-control">

                    <?php
                        //ESSA PORRA É IMPORTANTE
                        require_once('conexao.php');
                        $con = open_database();
                        select_database();
                        $sql = "SELECT * FROM clientes;";
                        $rs = mysqli_query($con,$sql);
                        close_database($con);
                        $row = mysqli_fetch_assoc($rs);                

                    ?>
                    
                    <option value="<?php echo $row['id'] ?>" selected>
                        <?php echo $row['nome'];?>
                    </option>

                    <?php while($row = mysqli_fetch_assoc($rs)){?>
                        <option value="<?php echo $row['id'] ?>">
                            <?php echo $row['nome'];?>
                        </option>
                    <?php } ?>

                </select>
            </div>



            <div class="form-group">

                <label for="lblData"> Data </label>
                <br><br>
                <input type="date" class="form-control" name="txtData" id="txtData" value="<?php (new DateTime())->format('y-m-d') ?>">    
                
            </div>

            <br><br><br>

            <input name="bt_cad" id="bt_cad" class="btn-lg btn-success" type="submit" value="Gravar"> 
            &nbsp&nbsp&nbsp&nbsp
            <input name="bt_limpar" id="bt_limpar" class="btn-lg btn-warning" type="reset" value="Limpar">
            &nbsp&nbsp&nbsp&nbsp
            <input name="bt_voltar" id="bt_voltar" class="btn-lg btn-danger" type="button" value="Voltar" onclick="javascript:location.href='listarPedidos.php'">

             

        </form>
        
    </body>
</html>