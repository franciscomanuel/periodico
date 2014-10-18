<?php
	require_once('conexion.php');
	
	$id=$_POST["idNoticia2"];

	$consultaSQL="DELETE FROM noticias where id_noticia=$id";

	try{
		$conex->query($consultaSQL);
	}catch(PDOException $e){
		echo "Consulta fallida: " . $e->getMessage();
	}

	include('administrador.php');


	
?>
