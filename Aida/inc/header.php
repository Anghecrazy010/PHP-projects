<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Pagina web hecha con Bootstrap</title>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<a href="#" class="navbar-brand">
					<img src="img/palmera.png" width="30px" height="30px" class="d-inline-block align-top">
					Mazatravels
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Alternar Menu">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="menuNavegacion">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#" class="nav-link">Inicio</a>
						</li>
						<!-- Boton Desplegable -->
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
								Productos
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a href="#" class="dropdown-item">Computadoras</a>
								<a href="#" class="dropdown-item">Laptops</a>
								<a href="#" class="dropdown-item">Smartphones</a>
								<a href="#" class="dropdown-item">Drones</a>
								<a href="#" class="dropdown-item">Accesorios</a>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Contacto</a>
						</li>
					</ul>

					<form class="form-inline my-2 my-lg-0" action="">
						<input type="text" class="form-control mr-sm-2" type="search" placeholder="Buscar">
						<button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
					</form>
				</div>
			</div>
		</nav>
	</header>