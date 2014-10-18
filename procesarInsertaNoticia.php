<?php
	require_once('conexion.php');
	
	$id_noticia=$_POST["identificador"];
	$id_not=$id_noticia+1;
	$titular=$_POST["titular"];
	$contenido=$_POST["contenido"];
	$tipo=$_POST["tipo"];
	$autor=$_POST["autor"];
	$imagen=$_POST["imagen"];


	$consultaSQL="INSERT INTO noticias values('$id_not', '$titular', '$contenido', '$tipo', '$autor', '$imagen')";
	try{
		$conex->query($consultaSQL);
	}catch(PDOException $e){
		echo "Consulta fallida: " . $e->getMessage();
	}

	header ("Location: administrador.php");
	
?>
