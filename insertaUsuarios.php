<?php
	/*require_once('conexion.php');*/
	
	$nom=$_POST["nombre"];
	$ap1=$_POST["apellido1"];
	$ap2=$_POST["apellido2"];
	$fec=$_POST["fecha"];
	$user=$_POST["usuario"];
	$pass=$_POST["clave"];
	$correo=$_POST["email"];


	$con=mysqli_connect('localhost','15517788','15517788x');

	mysqli_select_db($con,'15517788');
	
	
	$total = mysqli_num_rows(mysqli_query($con,"SELECT * FROM Usuarios WHERE usuario='$user'"));

	echo $total;

	if($total==0){
		$consultaSQL="INSERT INTO Usuarios values('$user', '$pass', '$nom', '$ap1', '$ap2', '$correo', 'usuario')";
		try{
			$con->query($consultaSQL);
		}catch(PDOException $e){
			echo "Consulta fallida: " . $e->getMessage();
		}
		header('Location: formulario.php');	
	}else{
		header('Location: formulario.php?userExiste=true');
	}

?>
