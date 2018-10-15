<?php
	session_start();
	if(!isset($_SESSION["login"])){
		include("error/error404_view.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nombre Pagina</title>
	<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="../resources/css/estilosIndex.css">
    <link rel="stylesheet" href="../resources/css/comercios.css">
	<script src="../resources/js/bootstrap.min.js"></script>
	<script src="../resources/js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="container-fluid px-0">
		<div class="header d-flex justify-content-between align-items-center">
			<div class="logo"> ACA VA EL LOGO Y EL NOMBRE</div>
			<div class="bar d-flex">
				<div class="sesion">Bienvenido "Usuario"</div>
				<div class="sesion"><a href="">Cerrar sesión</a></div>
			</div>
		</div>
        <div class="title mt-3">
			<h5>¿Qué querés comer?</h5>
		</div>
		<div class="searchComercio d-flex justify-content-center mt-2">
			<input type="text" class="mr-2">
			<input type="button" value="Buscar">
        </div>
        <div class="tituloComercio text-center mt-5">
            Selecciona un comercio para comenzar con tu pedido!
        </div>
        <div class="row contenido border mt-4">
            <div class="col col-3 filtro">
                Filtrar por: <br> <br>
                <div class="f-flex flex-column zona checkboxes">
                    <div>Zona</div>
                    <div>
                        <input type="checkbox" name="" id="">Zona 1
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">Zona 2
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">Zona 3
                    </div>
                </div>

                <div class="f-flex flex-column categoria checkboxes mt-5">
                    <div>Categoria</div>
                    <div>
                        <input type="checkbox" name="" id="">Categoria 1
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">Categoria 2
                    </div>
                    <div>
                        <input type="checkbox" name="" id="">Categoria 3
                    </div>
                </div>
            </div>
            <div class="col col-9">
                <div class="row comercio">
                    <div class="col col-4 img">
                        IMAGEN
                    </div>
                    <div class="col col-8">
                        <div class="nombreComercio">Nombre Comercio</div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo officiis commodi in, exercitationem hic repudiandae modi aut sit a, placeat, sunt tempore. Vel, possimus hic.
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="button" value="Ver menú">
                        </div>
                    </div>
                </div>
                <div class="row comercio">
                    <div class="col col-4 img">
                        IMAGEN
                    </div>
                    <div class="col col-8">
                        <div class="nombreComercio">Nombre Comercio</div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo officiis commodi in, exercitationem hic repudiandae modi aut sit a, placeat, sunt tempore. Vel, possimus hic.
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="button" value="Ver menú">
                        </div>
                    </div>
                </div>
                <div class="row comercio">
                    <div class="col col-4 img">
                        IMAGEN
                    </div>
                    <div class="col col-8">
                        <div class="nombreComercio">Nombre Comercio</div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo officiis commodi in, exercitationem hic repudiandae modi aut sit a, placeat, sunt tempore. Vel, possimus hic.
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="button" value="Ver menú">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer d-flex justify-content-center mt-4 pt-1">
			INFORMACION SOBRE LA EMPRESA, FOOTER LINKS ETC...
		</div>
	</div>
</body>
</html>