<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM clientes WHERE cod_clientes='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_clientes" value="<?php echo $row['cod_clientes']  ?>">
                                
                                <?php 

                                    $sql2="SELECT *  FROM cedula";
                                    $query2=mysqli_query($con,$sql2);

                                    //$ejecutar=mysqli_fetch_array($query2);
                                ?>
                                <select name="tipo_de_documento">  
                                <?php while($opciones=mysqli_fetch_array($query2)){ ?>

                                <option value="<?php echo $opciones['tipo_de_documento'];?>"><?php echo $opciones['tipo_de_documento'];?></option>

                                <?php } ?>
                                </select>
                                
                                <input type="text" class="form-control mb-3" name="cedula" placeholder="Cedula" value="<?php echo $row['cedula']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="celular" placeholder="Celular" value="<?php echo $row['celular']  ?>">
                                <input type="text" class="form-control mb-3" name="direcion" placeholder="Direcion" value="<?php echo $row['direcion']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html> 
