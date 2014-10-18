<?php
	include 'cabecera.php';

	if(isset($_GET['userExiste'])){
		$existe=$_GET['userExiste'];
	}else{
		$existe=false;
	}



	
?>

<section id="formulario">
	<article>
		<h1>Formulario de registro:</h1>

		<form action="insertaUsuarios.php" method="post" onsubmit="return validar(this)">

			<p id="mensajeExiste"></p>

			<label for="nombre">Nombre:</label>
			<input type="text" id="nombre"  name="nombre" maxlength="30"/> <p class="mensajes" id="mensaje1">Este campo es obligatorio.</p>
			<br>

			<label for="apellido1">Primer apellido:</label>
			<input type="text" id="apellido1" name="apellido1" maxlength="30"> <p class="mensajes" id="mensaje2">Este campo es obligatorio.</p>
			<br>

			<label for="apellido2">Segundo apellido:</label>
			<input type="text" id="apellido2" name="apellido2" maxlength="30"> <p class="mensajes" id="mensaje3">Este campo es obligatorio.</p>
			<br>

			<label for="fecha">Fecha de nacimiento:</label>
			<input type="date" id="fecha" name="fecha">
			<br>

			<label for="usuario">Nombre de usuario:</label>
			<input type="text" id="usuario" maxlength="10" name="usuario"> <p class="mensajes" id="mensaje4">Este campo es obligatorio.</p>
			<?php if($existe) echo "<dd><p id='existe'> Ya existe el usuario </p></dd><br>"; ?>
			<br>

			

			<label for="clave">Contraseña:</label>
			<input type="password" id="clave" maxlength="30" name="clave"> <p class="mensajes" id="mensaje5">Este campo es obligatorio.</p>
			<br>

			<label for="claveRepe">Repita contraseña:</label>
			<input type="password" id="claveRepe" maxlength="30" name="claveRepe"> <p class="mensajes" id="mensaje6">Este campo es obligatorio.</p><p class="mensajes" id="mensaje7">La contraseña no coincide</p>
			<br>

			<label for="correo">Correo:</label>
			<input type="email" id="email" name="email" > <p class="mensajes" id="mensaje8" >Este campo es obligatorio.</p>	
			<br>

			<label for="acepto">Acepto terminos y condiciones</label> 
			<input type="checkbox" id="acepto"/> <p class="mensajes" id="mensaje10" name="acepto">No has aceptado los terminos.</p>
			<br>

			<input type="submit" value="Enviar formulario">

			<br>
			<br>

		</form>
	</article>
</section>

<?php
	include 'pie.php';
?>



