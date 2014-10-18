<?php
	define("DB_DSN", "mysql:host=localhost;dbname=15517788");
	define("DB_USUARIO", "15517788");
	define("DB_CONTRASENIA", "15517788x");

	try{
		$conex = new PDO(DB_DSN, DB_USUARIO, DB_CONTRASENIA);
		$conex->setAttribute(PDO::ATTR_PERSISTENT,TRUE);
		$conex->setAttribute(PDO::ERRMODE_EXCEPTION,TRUE);
	}catch(PDOexception $e){
		die("Conexion fallida: ".$e->getMessage());
	}

	session_start();
?>


