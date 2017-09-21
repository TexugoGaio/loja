<?php
    require_once('conexao.php'); 
    
    $cliente  = trim($_POST['slcCliente']);
    $data = trim($_POST['txtData']); 
    
    if(!empty($cliente) && !empty($data) ){
      $con = open_database(); 
      select_database();   
      $sql = "INSERT INTO pedidos (cliente, data) VALUES  ('$cliente', '$data');";
      $ins = mysqli_query($con,$sql); 
      close_database($con); 

         unset($cliente, $data); 
      }
      echo $msg; 
    }
    //header("location: frmAdicionarProdutosPedidos.php")
?>