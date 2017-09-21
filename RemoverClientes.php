<?php 

    require_once('conexao.php');


    $id = trim($_REQUEST['id']);

    if(!empty($id)){

        $con = open_database();
        select_database();
        $sql = "DELETE FROM clientes WHERE id='$id';";
        $ins = mysqli_query($con , $sql) or die(mysqli_error($con));
        close_database($con);

        
    }
    else{
        echo "erro";
    }
    header("Location: frmListarClientes.php")

?>