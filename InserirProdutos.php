<?php
    require_once('conexao.php');

    $desc = trim($_POST['txtDesc']);
    $uni = trim($_POST['txtUni']);
    $qtd = trim($_POST['txtQtd']);
    $valor = trim($_POST['txtValor']);

    if(!empty($desc) && !empty($uni) && !empty($qtd) && !empty($valor)){

        $con = open_database();
        select_database();
        $sql = "INSERT INTO produtos (descricao, unidade, quantidade, valor) VALUES ('$desc','$uni','$qtd','$valor');";
        $ins = mysqli_query($con , $sql) or die(mysqli_error($con));
        close_database($con);


    }

    header("location: frmListarProdutos.php")
?>