<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formularios</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<a href="index.php" class="navbar-brand">
					<img src="img/palmera.png" width="30px" height="30px" class="d-inline-block align-top">
					Mazatravels
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Alternar Menu">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="menuNavegacion">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="index.php" class="nav-link">Inicio</a>
						</li>
						<!-- Boton Desplegable -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
								Productos
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a href="mazatravel/computadoras" class="dropdown-item">Computadoras</a>
								<a href="mazatravel/laptops" class="dropdown-item">Laptops</a>
								<a href="mazatravel/smartphones" class="dropdown-item">Smartphones</a>
								<a href="mazatravel/drones" class="dropdown-item">Drones</a>
								<a href="mazatravel/accesorios" class="dropdown-item">Accesorios</a>
							</div>
						</li>
						<li class="nav-item">
							<a href="mazatravel/contacto" class="nav-link">Contacto</a>
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

	<div class="container formularioo">	
		<div class="row mt-3 w-50">
			<div class="col">

				<form action="" class="border border-secoundary rounded px-3">
					
					<div class="form-group px-3 mt-3">
						<h2 class="text-left">Registro clientes</h2>
					</div>

					<div class="form-group px-3 my-2">
						<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
					</div>

					<div class="form-group px-3 my-2">
						<input type="text" class="form-control" placeholder="Apellido paterno" name="cliente_ape_materno" id="apellido_paterno">
					</div>

					<div class="form-group px-3 my-2">
						<input type="text" class="form-control" placeholder="Apellido materno" name="cliente_ape_materno" id="apellido_materno">
					</div>

					<label for="mes">Fecha de nacimiento</label>

					<div class="form-group px-3 ">
						<label for="dia">Día</label>
						<select name="dia" id="calendario" class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
					
					<div class="form-group px-3 ">
						<label for="mes">Mes</label>
						<select name="mes" id="calendario" class="form-control">
							<option value="Enero">Enero</option>
							<option value="Febrero">Febrero</option>
							<option value="Marzo">Marzo</option>
						</select>
					</div>
					
					<div class="form-group px-3 ">
						<label for="año">Año</label>
						<select name="año" id="calendario" class="form-control">
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
						</select>
					</div>
					
					<label for="domicilio">Domicilio</label>

					<div class="form-group px-3 my-2">
						<input type="text" class="form-control" placeholder="Nombre de la calle" name="calle_nombre" id="domicilio_calle">
					</div>

					<div class="form-group px-3 my-2">
						<input type="text" class="form-control" placeholder="Número de casa" name="casa_numero" id="casa_numero">
					</div>

					<div class="form-group px-3 my-2">
						<input type="text" class="form-control" placeholder="Fraccionamiento o localidad" name="fraccionamiento" id="domicilio_fraccionamiento">
					</div>
					
					<label for="domicilio">Correo electrónico</label>
					
					<div class="form-group px-3 my-2">
						<input type="text" class="form-control" placeholder="Ingresa tu correo electrónico" name="usuario_correo" id="correoElectronico">
					</div>
					
					<label for="domicilio">Teléfono personal</label>
					
					<div class="form-group px-3 my-2">
						<input type="text" class="form-control" placeholder="Ingresa tu número de teléfono personal" name="usuario_telefono" id="usuario_telefono">
					</div>
					
					<div class="form-check">
						<label class="form-check-label my-2 px-3">
							<input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2">Acepto Terminos y Condiciones
						</label>
					</div>

					<div class="form-check mb-3">
						<button class="btn btn-primary my-2 px-3" type="submit">Registrarse</button>
					</div>
					

				</form>

			</div>
		</div>
	</div>
	
	<footer class="page-footer font-small indigo">
		<div class="container text-center text-md-left"><!-- Grid row -->
    		<div class="row"><!-- Grid column -->
      			<div class="col-md-3 mx-auto"> 
        			<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Redes sociales</h5><!-- Links -->
        			<ul class="list-unstyled">
          				<li>

            				<a href="https://www.facebook.com/">Facebook</a>
          				</li>
          				<li>
            				<a href="https://www.instagram.com/">Instagram</a>
          				</li>
          				<li>
            				<a href="https://twitter.com/?lang=es">Twitter</a>
          				</li>
       		   			<!--<li>
            				<a href="#!">Very long link 4</a>
          				</li>-->
        			</ul>
      			</div> <!-- Grid column -->

      			<hr class="clearfix w-100 d-md-none"> <!-- Grid column -->
      			<div class="col-md-3 mx-auto">

        			<!-- Links -->
        			<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Datos de la empresa</h5>

	        		<ul class="list-unstyled">
    	      			<li>
        	    			<h5>Direccion</h5>
          				</li>
          				<li>
            				<h5>Teléfono</h5>
  	        			</li>
    	      			<li>
        	    			<h5>Ciudad</h5>
          				</li>
          				<!--<li>
            				<a href="#!">Link 4</a>
          				</li>-->
 		       		</ul>

      			</div> <!-- Grid column -->

  	    		<hr class="clearfix w-100 d-md-none">

    	  		<!-- Grid column -->
      			<div class="col-md-3 mx-auto">
        			<!-- Links -->
        			<h5 class="font-weight-bold text-uppercase mt-3">Contacto</h5>

        			<form class="form-d-block my-1 my-lg-0" action="">
        				<input type="text" class="form-control my-1 mr-sm-1" placeholder="Nombre">
						<input type="email" class="form-control my-1 mr-sm-1" placeholder="Email">
						<textarea class="form-control" placeholder="Escriba aqui sus comentarios" rows="1"></textarea>
						<button class="btn btn-primary my-3 my-sm-1" type="submit">Buscar</button>
					</form>
      			</div>

    		</div>
    		<!-- Grid row -->
    	</div>
  		<!-- Footer Links -->

  		<!-- Copyright -->
  		<div class="footer-copyright text-center py-3">© 2020 Copyright:
    		<a href="reunionesperronas.com"> Reuniones Perronas ISOF 5-01</a>
  		</div>
  		<!-- Copyright -->
	</footer>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>