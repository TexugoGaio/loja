<?php

    require_once('conexao.php');

    $id = trim($_POST['txtID']);
    $desc = trim($_POST['txtDesc']);
    $uni = trim($_POST['txtUni']);
    $qtd = trim($_POST['txtQtd']);
    $valor = trim($_POST['txtValor']);

    if(!empty($desc) && !empty($uni) && !empty($qtd) && !empty($valor)){
        
        $con = open_database();
        select_database();

        $sql = "UPDATE produtos SET descricao='$desc' , unidade='$uni' , quantidade='$qtd' , valor='$valor' WHERE id='$id'; ";
        $ins = mysqli_query($con , $sql) or die(mysqli_error($con));
        close_database($con);
    }
    header("location: frmListarProdutos.php")

 ?>