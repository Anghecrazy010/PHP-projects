<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM students";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
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

                                    <input type="int" class="form-control mb-3" name="Id_Alumno" placeholder="id_Alumno">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="Apellido" placeholder="apellido">
                                    <input type="int" class="form-control mb-3" name="Edad" placeholder="edad">
                                    <input type="text" class="form-control mb-3" name="Direccion_Residencia" placeholder="direcion_Residencia">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_Alumno</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Edad</th>
                                        <th>Direccion_Residencia</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Id_Alumno']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellido']?></th>  
                                               <th><?php  echo $row['Edad']?></th>  
                                                <th><?php  echo $row['Direccion_Residencia']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['Id_Alumno'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Id_Alumno'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                            
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <a href="welcome.php">previous_page</a>
    </body>
</html>