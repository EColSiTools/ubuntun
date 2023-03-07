<?php 
    ini_set('display_errors','on');
    ini_set('error_reporting', E_ALL );

    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM clientes WHERE estado='1';";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CLIENTES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

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

                                <input type="text" class="form-control mb-3" name="cedula" placeholder="Cedula" value="<?php echo $row['cedula'];  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres'];  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos'];  ?>">
                                <input type="text" class="form-control mb-3" name="celular" placeholder="Celular" value="<?php echo $row['celular'];  ?>">
                                <input type="text" class="form-control mb-3" name="direcion" placeholder="Direcion" value="<?php echo $row['direcion'];  ?>">
                                
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Tipo_de_documento</th>
                                        <th>Cedula</th>
                                        <th>Nombres</th>
                                        <th>Pellidos</th>
                                        <th>Celular </th>
                                        <th>Direcion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_clientes'];?></th>
                                                <th><?php  echo $row['tipo_de_documento'];?></th>
                                                <th><?php  echo $row['cedula'];?></th>
                                                <th><?php  echo $row['nombres'];?></th>
                                                <th><?php  echo $row['apellidos'];?></th> 
                                                <th><?php  echo $row['celular'];?></th>
                                                <th><?php  echo $row['direcion'];?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_clientes']; ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_clientes']; ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
