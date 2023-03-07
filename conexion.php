<?php
function conectar(){
    $host="127.0.0.1";
    $user="root";
    $pass="12345678";

    $bd="cliente";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>

