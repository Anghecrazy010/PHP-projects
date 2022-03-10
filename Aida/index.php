<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
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

					<!--<form class="form-inline my-2 my-lg-0" action="">
						<input type="text" class="form-control mr-sm-2" type="search" placeholder="Buscar">
						<button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
					</form>-->
				</div>
			</div>
		</nav>
	</header>

	<main class="container">
		<div class="row">
			<div class="col">
				<div class="carousel slide" id="slideshow" data-ride="carousel">
					<!-- Indicadores -->
					<ol class="carousel-indicators">
						<li data-target="#slideshow" class="active" data-slide-to="0"></li>
						<li data-target="#slideshow" data-slide-to="1"></li>
						<li data-target="#slideshow" data-slide-to="2"></li>
					</ol>

					<!-- Slides -->
					<div class="carousel-inner w-80">
						<div class="carousel-item active">
							<img src="img/F1.jpg" alt="" class="d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="img/F2.jpg" alt="" class="d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="img/F3.jpg" alt="" class="d-block w-100">
						</div>
					</div>

					<!-- Controles -->
					<a href="#slideshow" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a href="#slideshow" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="py-4 border-bottom">
					<h1 class="text-center">Paquetes del momento</h1>
				</div>
			</div>
		</div>	

		<div class="row py-4">
			<div class="col-12 col-sm-6 col-lg-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/PAQUETES1.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">iPhone</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="#" class="btn btn-sm btn-primary">Comprar</a>
						<a href="#" class="btn btn-sm btn-secondary">Detalles</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/PAQUETES2.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Mac</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="#" class="btn btn-sm btn-primary">Comprar</a>
						<a href="#" class="btn btn-sm btn-secondary">Detalles</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/PAQUETES3.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Canon</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="#" class="btn btn-sm btn-primary">Comprar</a>
						<a href="#" class="btn btn-sm btn-secondary">Detalles</a>
					</div>
				</div>
			</div>

			<!--<div class="col-12 col-sm-6 col-lg-3 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/4.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Apple Wach</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="#" class="btn btn-sm btn-primary">Comprar</a>
						<a href="#" class="btn btn-sm btn-secondary">Detalles</a>
					</div>
				</div>
			</div>-->

			<div class="col-12">
				<div class="py-4 border-bottom">
					<h1 class="text-center">Top 3 Ofertas</h1>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/5.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Keyboard</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="#" class="btn btn-sm btn-primary">Comprar</a>
						<a href="#" class="btn btn-sm btn-secondary">Detalles</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/6.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">iPad</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="#" class="btn btn-sm btn-primary">Comprar</a>
						<a href="#" class="btn btn-sm btn-secondary">Detalles</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/7.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Macbook</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="#" class="btn btn-sm btn-primary">Comprar</a>
						<a href="#" class="btn btn-sm btn-secondary">Detalles</a>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="py-4 border-bottom">
					<h1 class="text-center">Top 3 Agencias</h1>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/AGENCIA1.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Keyboard</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="#" class="btn btn-sm btn-primary">Comprar</a>
						<a href="#" class="btn btn-sm btn-secondary">Detalles</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/AGENCIA2.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">iPad</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="#" class="btn btn-sm btn-primary">Comprar</a>
						<a href="#" class="btn btn-sm btn-secondary">Detalles</a>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-lg-4 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/AGENCIA3.jpg" alt="">
					<div class="card-body">
						<h3 class="card-title">Macbook</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<a href="#" class="btn btn-sm btn-primary">Comprar</a>
						<a href="#" class="btn btn-sm btn-secondary">Detalles</a>
					</div>
				</div>
			</div>
			
		</div> <!--row-->
	</main>

	<!-- Footer -->
	<footer class="page-footer font-small indigo"> <!-- Footer Links -->
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
						<textarea class="form-control" placeholder="Escriba aqui sus comentarios" rows="2"></textarea>
						<button class="btn btn-primary my-3 my-sm-1" type="submit">Buscar</button>
					</form>
      			</div>

    		</div>
    		<!-- Grid row -->
    	</div>
  		<!-- Footer Links -->

  		<!-- Copyright -->
  		<div class="footer-copyright text-center py-3">© 2020 Copyright:
    		<a href="#"> Reuniones Perronas ISOF 5-01</a>
  		</div>
  		<!-- Copyright -->
	</footer>
	<!-- Footer -->

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>