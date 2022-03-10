<?php 

include 'config.php';


if (isset($_POST['Nombre_u'])) {
	$Nombre_u = $_POST['Nombre_u'];
	$Correo_E = $_POST['Correo_E'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$sql = "INSERT INTO registro (Nombre_u, Correo_E, password)
	VALUES ('$Nombre_u', '$Correo_E','$password')";
	$result = mysqli_query($conn, $sql);
    if(!$result){
		die("query fail");
	}
	header("Location: index.php");

}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Anghelos</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
		<p class="login-text" style="font-size: 2rem; font-weight: 800;">Registro</p>
			<div class="input-group">
				<input type="text" placeholder="Nombre de usuario" name="Nombre_u" value="<?php echo $Nombre_u; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Correo electronico" name="Correo_E" value="<?php echo $Correo_E; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Contraseña" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
			   <input type="password" placeholder="Confirmar contraseña" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
			<div class="input-group">
				<button name="submit" class="btn">Registro</button>
			</div>
			<p class="login-register-text">¿Tiene una cuenta? <a href="index.php">Iniciar sesion aqui</a>.</p>
		</form>
	</div>
</body>
</html>