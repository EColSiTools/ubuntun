<?php

include("conexion.php");
$con=conectar();

$cod_clientes=$_POST['cod_clientes'];
$tipo_de_documento=$_POST['tipo_de_documento'];
$cedula=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$celular=$_POST['celular'];
$direcion=$_POST['direcion'];

$sql="UPDATE clientes SET  tipo_de_documento='$tipo_de_documento',cedula='$cedula',nombres='$nombres',apellidos='$apellidos',celular='$celular',direcion='$direcion' WHERE cod_clientes='$cod_clientes'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>
