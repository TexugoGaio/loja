<?php

    require_once('conexao.php');

    $id = trim($_POST['txtID']);
    $nome = trim($_POST['txtNome']);
    $cpf = trim($_POST['txtCPF']);
    $cid = trim($_POST['txtCid']);
    $est = trim($_POST['txtEst']);

    if(!empty($nome) && !empty($cpf) && !empty($cid) && !empty($est)){
        
        $con = open_database();
        select_database();

        $sql = "UPDATE clientes SET nome='$nome' , cpf='$cpf' , cidade='$cid' , estado='$est' WHERE id='$id'; ";
        $ins = mysqli_query($con , $sql) or die(mysqli_error($con));
        close_database($con);
    }
    header("location: frmListarClientes.php")

 ?>