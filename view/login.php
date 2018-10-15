<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="../resources/css/login.css">
		<script src="../resources/js/bootstrap.min.js"></script>
		<script src="../resources/js/jquery-3.3.1.min.js"></script>
	</head>
	<body>
		<div id="fullscreen_bg" class="fullscreen_bg"/>
			<div class="container">

				<form class="form-signin" method="POST" action="tipologin.php" enctype="application/x-www-form-urlencodes">
					<h1 class="form-signin-heading text-muted">Iniciar Sesiòn</h1>
						<input type="text" class="form-control" placeholder="Usuario" name="nombreUsuario" required="" autofocus="">
						<input type="password" class="form-control" placeholder="Password" name="clave" required="">
						<button class="btn btn-lg btn-primary btn-block" type="submit">
							Ingresar
						</button>
				</form>

			</div>
		</div>
	</body>
</html>