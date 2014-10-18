<?php
	include('globales.php');
	require_once('conexion.php');

	$usuario=$_POST["usuario"];
	$clave=$_POST["contrasenia"];

	$consultaSQL=$conex->prepare("select * from  Usuarios where usuario='$usuario' and clave='$clave'");
	$consultaSQL->execute();
	$resultado=$consultaSQL->fetch(PDO::FETCH_OBJ);

	if($resultado!=null){	
		
		if($resultado->tipo=="administrador"){
			$_TIPO="administrador";
			$_NOMBRE="$usuario";
		}else{
			if($resultado->tipo=="usuario"){
				$_TIPO="usuario";
				$_NOMBRE="$usuario";
			}
		}
	}
	$_SESSION['_TIPO']=$_TIPO;
	$_SESSION['_NOMBRE']=$_NOMBRE;

	

	function dameURL(){
		$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
		return $url;
	}

	header("Location:".$_SERVER['HTTP_REFERER']); 
?>
