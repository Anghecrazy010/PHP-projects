<?php
if("$_POST"){


$nombre=$_POST['txtNombre'];
echo "Hello".$nombre;
}
?>
<!DOCTYPE html>
<html lang="en"> <!--This part is for change the language-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My first website"/>
    <meta name="author" content="Anghelo RA"/>
     <meta name="keywords" content="My first website, how can i do a website?, HTML">
    <title>website anghelo010</title> <!---Titulo parte superior-->
<link rel="stylesheet" href="style.css">

</head>

                      
<body>
    <header>
        <h1>Formulario prueba</h1> <!---El encabezado de la pagina-->

    </header>
    <form acttion = "testing.php" method="post">
     <input type = "text" name = "txtNombre" id="">
     <br>
     <input types = "submit" value="enviar">

     </form>


    

</body>
</html>