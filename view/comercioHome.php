<?php
	session_start();
	if(!isset($_SESSION["login"])){
		include("error404_view.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Home Comercios</title>
		<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="../resources/css/estilosIndex.css">
		<link rel="stylesheet" href="../resources/css/comercioHome.css">
		<script src="../resources/js/bootstrap.min.js"></script>
		<script src="../resources/js/jquery-3.3.1.min.js"></script>
	</head>
	<body>
		<div class="container-fluid px-0">
			<div class="header d-flex justify-content-between align-items-center">
				<div class="logo"> ACA VA EL LOGO Y EL NOMBRE</div>
					<div class="bar d-flex">
						<div class="sesion">Bienvenido "Comercio"</div>
						<div class="sesion"><a href="">Mis Menus</a></div>
						<div class="sesion"><a href="">Mis Ofertas</a></div>
						<div class="sesion"><a href="">Estadisticas</a></div>
						<div class="sesion"><a href="logout.php">Cerrar sesión</a></div>
					</div>
			</div>
			<div class="banner d-flex flex-column align-items-center">
				<div><h3>Banner</h3></div>
			</div>
			<div class="title mt-4">
				<h1>Mis Menus</h1>
				<div class="container">
					<div class="row">	 
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top img-thumbnail media" src="http://www.disenologoseconomicos.com/wp-content/uploads/2017/08/logo-predisenado-comida-07.jpg" alt="Mi Imagen">
								<div class="card-body">
									<h4 class="card-title">Menu 1</h4>
									<p class="card-text">Descripcion</p>
									<a href="#" class="btn btn-primary">Modificar</a>
									<a href="#" class="btn btn-primary">Ver</a>
								</div>
							</div> 
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top img-thumbnail" src="http://www.disenologoseconomicos.com/wp-content/uploads/2017/08/logo-predisenado-comida-negativo-07.jpg" alt="Mi Imagen">
								<div class="card-body">
									<h4 class="card-title">Menu 2</h4>
									<p class="card-text">Descripcion</p>
									<a href="#" class="btn btn-primary">Modificar</a>
									<a href="#" class="btn btn-primary">Ver</a>
								</div>
							</div> 
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top img-thumbnail" src="http://www.disenologoseconomicos.com/wp-content/uploads/2017/08/logo-predisenado-comida-07.jpg" alt="Mi Imagen">
								<div class="card-body">
									<h4 class="card-title">Menu 3</h4>
									<p class="card-text">Descripcion</p>
									<a href="#" class="btn btn-primary">Modificar</a>
									<a href="#" class="btn btn-primary">Ver</a>
								</div>
							</div> 
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top img-thumbnail" src="http://www.disenologoseconomicos.com/wp-content/uploads/2017/08/logo-predisenado-comida-negativo-07.jpg" alt="Mi Imagen">
								<div class="card-body">
									<h4 class="card-title">Menu 4</h4>
									<p class="card-text">Descripcion</p>
									<a href="#" class="btn btn-primary">Modificar</a>
									<a href="#" class="btn btn-primary">Ver</a>
								</div>
							</div> 
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top img-thumbnail" src="http://www.disenologoseconomicos.com/wp-content/uploads/2017/08/logo-predisenado-comida-07.jpg" alt="Mi Imagen">
								<div class="card-body">
									<h4 class="card-title">Menu 5</h4>
									<p class="card-text">Descripcion</p>
									<a href="#" class="btn btn-primary">Modificar</a>
									<a href="#" class="btn btn-primary">Ver</a>
								</div>
							</div> 
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top img-thumbnail" src="http://www.disenologoseconomicos.com/wp-content/uploads/2017/08/logo-predisenado-comida-negativo-07.jpg" alt="Mi Imagen">
								<div class="card-body">
									<h4 class="card-title">Menu 6</h4>
									<p class="card-text">Descripcion</p>
									<a href="#" class="btn btn-primary">Modificar</a>
									<a href="#" class="btn btn-primary">Ver</a>
								</div>
							</div> 
						</div>
					</div>
				</div>
				<!-- <a href="#" class="btn btn-primary mt-3">Ver Todos</a> -->
			</div>
		
			<div class="title mt-4">
					<h1>Mis Ofertas</h1>
					<div class="container">
						<div class="row">	 
							<div class="col-md-4">
								<div class="card">
									<img class="card-img-top img-thumbnail" src=".jpg" alt="Mi Imagen">
									<div class="card-body">
										<h4 class="card-title">Oferta 1</h4>
										<p class="card-text">Descripcion</p>
										<a href="#" class="btn btn-primary">Modificar</a>
										<a href="#" class="btn btn-primary">Ver</a>
									</div>
								</div> 
							</div>
							<div class="col-md-4">
								<div class="card">
									<img class="card-img-top img-thumbnail" src=".jpg" alt="Mi Imagen">
									<div class="card-body">
										<h4 class="card-title">Oferta 2</h4>
										<p class="card-text">Descripcion</p>
										<a href="#" class="btn btn-primary">Modificar</a>
										<a href="#" class="btn btn-primary">Ver</a>
									</div>
								</div> 
							</div>
							<div class="col-md-4">
								<div class="card">
									<img class="card-img-top img-thumbnail" src=".jpg" alt="Mi Imagen">
									<div class="card-body">
										<h4 class="card-title">Oferta 3</h4>
										<p class="card-text">Descripcion</p>
										<a href="#" class="btn btn-primary">Modificar</a>
										<a href="#" class="btn btn-primary">Ver</a>
									</div>
								</div> 
							</div>
						</div>
					</div>
				<!-- <a href="#" class="btn btn-primary mt-3">Ver Todos</a> -->
			</div>
			<div class="estadisticas row text-center mt-5">
				<div class="col col-md-4 registro">
					<h5>Ventas</h5>
				</div>
				<div class="col col-md-4 registro">
				<h5>Pagos</h5>
				</div>
				<div class="col col-md-4 registro">
				<h5>Actividad</h5>
				</div>	
			</div>
				<!-- <div class="text-center mb-3">
				<a href="#" class="btn btn-primary mt-3">Ver Todos</a>
				</div>   -->
		</div>
		<div class="footer d-flex justify-content-center mt-4 pt-1">
				INFORMACION SOBRE LA EMPRESA, FOOTER LINKS ETC...
		</div>
		</div>
	</body>
</html>