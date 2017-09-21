<?php
    require_once('conexao.php');

    $nome = trim($_POST['txtNome']);
    $cpf = trim($_POST['txtCPF']);
    $cid = trim($_POST['txtCid']);
    $est = trim($_POST['txtEst']);

    if(!empty($nome) && !empty($cpf) && !empty($cid) && !empty($est)){

        $con = open_database();
        select_database();
        $sql = "INSERT INTO clientes (nome, cpf, cidade, estado) VALUES ('$nome','$cpf','$cid','$est');";
        $ins = mysqli_query($con , $sql) or die(mysqli_error($con));
        close_database($con);


    }

    header("location: frmListarClientes.php")
?>