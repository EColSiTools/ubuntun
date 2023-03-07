<?php
include("conexion.php");
$con=conectar();


//$cod_clientes=$_POST['cod_clientes'];
$tipo_de_documento=$_POST['tipo_de_documento'];
$cedula=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$celular=$_POST['celular'];
$direcion=$_POST['direcion'];

$sql="INSERT INTO clientes ( `tipo_de_documento`, `cedula`, `nombres`, `apellidos`, `celular`, `direcion`) VALUES('$tipo_de_documento','$cedula','$nombres','$apellidos','$celular','$direcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>
