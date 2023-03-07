<?php

include("conexion.php");
$con=conectar();

$cod_clientes=$_GET['id'];

//$sql="DELETE FROM clientes  WHERE cod_clientes='$cod_clientes'";
$sql="UPDATE clientes SET  estado='3' WHERE cod_clientes='$cod_clientes'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>
