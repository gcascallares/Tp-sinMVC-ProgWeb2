<?php
	session_start();
		
	$conexion = mysqli_connect("localhost","root","ale37376896","tpnuevo");

	if(isset($_POST["nombreUsuario"]) && isset($_POST["clave"])){
		$usu=$_POST["nombreUsuario"];
		$con=md5($_POST["clave"]);
		
		$sql="select rol from Usuario where nombreUsuario='".$usu."' and clave='".$con."'";
		$result = mysqli_query($conexion,$sql);
		$cantfilas = mysqli_num_rows($result);
		$rows=mysqli_fetch_assoc($result);
		if($cantfilas!=0){
			if(($rows['rol'])=='opcomercio'){
				$_SESSION["login"]="nuevaSession";
				header("location:comercioHome.php");
			}
			else if(($rows['rol'])=='admininstrador'){
				$_SESSION["login"]="nuevaSession";
				//header("location:.php");
			}
			else if(($rows['rol'])=='cliente'){
				$_SESSION["login"]="nuevaSession";
				header("location:comercios.php");
			}
			else if(($rows['rol'])=='delivery'){
				$_SESSION["login"]="nuevaSession";
				//header("location:.php");
			}
		}
		if($cantfilas==0){
			echo "<h3>error en usuario y contraseña ingresados</h3>";
		}
	}
?>