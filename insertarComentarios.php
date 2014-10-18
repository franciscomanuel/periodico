<?php
	require_once('conexion.php');
	
	$id=$_POST['valor'];

	$nombre=$_SESSION['_NOMBRE'];
	$comentario=$_POST['textoArea'];


	$consultaSQL="INSERT INTO Comentarios values('$id', '$comentario', '$nombre')";
	try{
		$conex->query($consultaSQL);
	}catch(PDOException $e){
		echo "Consulta fallida: " . $e->getMessage();
	}

	header("Location:".$_SERVER['HTTP_REFERER']); 
	
?>
