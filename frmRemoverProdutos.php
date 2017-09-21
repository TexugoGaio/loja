<?php
    
    require_once('conexao.php');

    $id = trim($_REQUEST['id']);

    $con = open_database();
    select_database();
    $sql = "SELECT * FROM produtos WHERE id=" . $id;
    $rs = mysqli_query($con, $sql) or die(mysqli_error($con));
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
        <title>Remover Produto</title>
    </head>
    <body class="container">

        <h1>Remover Produto</h1>

        <form action="RemoverProdutos.php" id="frmRemPro" name="frmRemPro" method="post">

            <div class="form-group">
                <label for="lblID" >
                    <h2><span class="control-label">ID: </span><input class="label label-danger" id="sp" value=" <?php echo $id ?>"> <span class="label label-danger"><?php echo $id ?></span> </h2>
                </label>
            </div>

            <div class="form-group">
                <label for="lblDesc">
                    <h2><span class="control-label ">Descrição: </span><span class="label label-danger"> <?php echo $desc ?> </span></h2>
                </label>
            </div>

            <div class="form-group">
                <label for="lblUni">
                    <h2><span class="control-label">Unidade: </span><span class="label label-danger"> <?php echo $uni ?> </span></h2>
                </label>
            </div>

            <div class="form-group">
                <label for="lblQtd">
                    <h2><span class="control-label">Quantidade: </span><span class="label label-danger"> <?php echo $qtd ?> </span></h2>
                </label>
            </div>

            <div class="form-group">
                <label for="lblValor">
                    <h2><span class="control-label ">Valor: </span><span class="label label-danger"> <?php echo $valor ?> </span></h2>
                </label>
            </div>


             <script>
                function funcaoRemover(){
                    var id = document.getElementById("sp").value;
                   
                    var x = "123";
                    var senha=prompt("Digite sua senha para remover: ");

                    if(senha==x){
                        javascript: location.href='RemoverProdutos.php?id='+ id;
                        
                    }
                    else{
                        alert("Senha incorreta!");
                    }
                }
            </script> 



            <br><br><br>
            <input type="button" name="btnRem" id="btnRem" class="btn btn-danger" value="Remover" onclick="funcaoRemover()">
            <input type="button" name="btnVoltar" id="btnVoltar" class="btn btn-warning" value="Voltar" onclick="javascript:location.href='frmListarProdutos.php'" >
         
        </form>
    
    </body>
</html>