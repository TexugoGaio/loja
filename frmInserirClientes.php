<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <title>Inserir Clientes</title>
    </head>
    <body class="container">

        <h1>Cadastro de Novo Cliente</h1>

        <form id="frmCadCli" name="frmCadCli" method="post" action="InserirClientes.php">

            <div class="form-group" >
                <label for="lblnome"> Nome </label>
                <input type="text" class="form-control" id="txtNome" name="txtNome" >
            </div>

            <div class="form-group" >
                <label for="lblCPF"> CPF </label>
                <input type="text" class="form-control" id="txtCPF" name="txtCPF" >
            </div>

            <div class="form-group" >
                <label for="lblCid"> Cidade </label>
                <input type="text" class="form-control" id="txtCid" name="txtCid" >
            </div>

            <div class="form-group" >
                <label for="lblEst"> Estado </label>
                <input type="text" class="form-control" id="txtEst" name="txtEst" >
            </div>

            <input type="submit" name="btnCadastrar" id="btnCadastrar" class="btn btn-success" value="Salvar">
            <input type="reset" name="btlLimpar" id"btnLimpar" class="btn btn-warning" value="Limpar Campos">
            <input type="button" name="btnVoltar" id="btnVoltar" class="btn btn-danger" value="Voltar" onclick="javascript:location.href='frmListarClientes.php'">
        
        </form>    
    </body>
</html>