<?php
    
    require_once('conexao.php');

    $id = trim($_REQUEST['id']);

    $con = open_database();
    select_database();
    $sql = "SELECT * FROM clientes WHERE id=" . $id;
    $rs = mysqli_query($con, $sql) or die(mysqli_error($con));
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
        <title>Remover Cliente</title>
    </head>
    <body class="container">

        <h1>Remover Cliente</h1>

        <form action="RemoverClientes.php" id="frmRemCli" name="frmRemCli" method="post">

            <div class="form-group">
                <label for="lblID" >
                    <h2><span class="control-label">ID: </span><input class="label label-danger" id="sp" value=" <?php echo $id ?>"> <span class="label label-danger"><?php echo $id ?></span> </h2>
                </label>
            </div>

            <div class="form-group">
                <label for="lblNome">
                    <h2><span class="control-label ">Nome: </span><span class="label label-danger"> <?php echo $nome ?> </span></h2>
                </label>
            </div>

            <div class="form-group">
                <label for="lblCPF">
                    <h2><span class="control-label">CPF: </span><span class="label label-danger"> <?php echo $cpf ?> </span></h2>
                </label>
            </div>

            <div class="form-group">
                <label for="lblCid">
                    <h2><span class="control-label">Cidade: </span><span class="label label-danger"> <?php echo $cid ?> </span></h2>
                </label>
            </div>

            <div class="form-group">
                <label for="lblEst">
                    <h2><span class="control-label ">Estado: </span><span class="label label-danger"> <?php echo $est ?> </span></h2>
                </label>
            </div>


             <script>
                function funcaoRemover(){
                    var id = document.getElementById("sp").value;
                   
                    var x = "123";
                    var senha=prompt("Digite sua senha para remover: ");

                    if(senha==x){
                        javascript: location.href='RemoverClientes.php?id='+ id;
                        
                    }
                    else{
                        alert("Senha incorreta!");
                    }
                }
            </script> 



            <br><br><br>
            <input type="button" name="btnRem" id="btnRem" class="btn btn-danger" value="Remover" onclick="funcaoRemover()">
            <input type="button" name="btnVoltar" id="btnVoltar" class="btn btn-warning" value="Voltar" onclick="javascript:location.href='frmListarClientes.php'" >
         
        </form>
    
    </body>
</html>