<?php 

session_start();

if (!isset($_SESSION['Nombre_u'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>
</head>
<body>
    <?php echo "<h1>Bienvenidos " . $_SESSION['Nombre_u'] . "</h1>"; ?>
    <a href="alumno.php">Next_page</a>
    <a href="logout.php">Logout</a>
</body>
</html>