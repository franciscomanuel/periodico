<?php
	require_once('conexion.php');
	
	$id_not=$_POST["identificador"];
	$titular=$_POST["titular"];
	$contenido=$_POST["contenido"];
	$tipo=$_POST["tipo"];
	$autor=$_POST["autor"];
	$imagen=$_POST["imagen"];

	$id=$_POST["v"];


	$consultaSQL="UPDATE noticias SET id_noticia='$id', titular='$titular', contenido='$contenido', tipo='$tipo', autor='$autor', imagen='$imagen' where id_noticia='$id'";
	try{
		$conex->query($consultaSQL);
	}catch(PDOException $e){
		echo "Consulta fallida: " . $e->getMessage();
	}

	header ("Location: administrador.php");
	
?>


