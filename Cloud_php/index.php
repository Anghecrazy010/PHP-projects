<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar_datos</title>
</head>
<body>
    <h1>Hello there</h1>
    <form action ="index.php" method="POST">
    <input type="text" name="texto" placeholder="texto">
    <input type="submit" value="Añadir Estudiante"> 'Agrega a un estudiante'
</form>
       <div id="todolist">
           <?php
          $servidor = "localhost";
          $nombreusuario = "Anghelo";
          $password = "anghecrazy0102";
          $db = "pruebas";
      
          $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
      
          if($conexion->connect_error){
              die("Conexión fallida: " . $conexion->connect_error);
          }

          if(isset($_POST['texto'])){
            $texto = $_POST['texto'];
            
            $sql = "INSERT INTO Students(Nombre)
                                VALUES('$texto')";
            
            if($conexion->query($sql) === true){
                echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
            }else{
                die("Error al insertar datos: " . $conexion->error);
            }
            $conexion->close();
        }
        $sql = "SELECT * FROM students";
         $resultado = $conexion->query($sql);

           ?>
</div>
</body>
</html>