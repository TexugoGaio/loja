<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <title>Inserir Produtos</title>
    </head>
    <body class="container">

        <h1>Cadastro de Novo Produto</h1>

        <form id="frmCadProd" name="frmCadProd" method="post" action="InserirProdutos.php">

            <div class="form-group" >
                <label for="lblDesc"> Descrição </label>
                <input type="text" class="form-control" id="txtDesc" name="txtDesc" placeholder="Descrição do Produto">
            </div>

            <div class="form-group" >
                <label for="lblUni"> Unidade </label>
                <input type="text" class="form-control" id="txtUni" name="txtUni" placeholder="Tipo de unidade (un, rolo, kg)">
            </div>

            <div class="form-group" >
                <label for="lblQtd"> Quantidade </label>
                <input type="text" class="form-control" id="txtQtd" name="txtQtd" placeholder="Quantidade de unidades">
            </div>

            <div class="form-group" >
                <label for="lblValor"> Valor </label>
                <input type="text" class="form-control" id="txtValor" name="txtValor" placeholder="Valor unitário">
            </div>

            <input type="submit" name="btnCadastrar" id="btnCadastrar" class="btn btn-success" value="Salvar">
            <input type="reset" name="btlLimpar" id"btnLimpar" class="btn btn-warning" value="Limpar Campos">
            <input type="button" name="btnVoltar" id="btnVoltar" class="btn btn-danger" value="Voltar" onclick="javascript:location.href='frmListarProdutos.php'">
        
        </form>    
    </body>
</html>