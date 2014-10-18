<?php
	include 'cabecera.php';
	require_once('conexion.php');
	$id=$_POST["idNoticia1"];
?>

<form action="procesarModificaNoticia.php" method="post" onsubmit="return validarModificar(this)">
<!--<input type='text' name='identificador' maxlength='30' value='$fila[id_noticia]'/>-->
	<?php 
		$consultaSQL = "SELECT * FROM noticias where id_noticia='$id'"; 
		$resultados = $conex->query( $consultaSQL );

		foreach ($resultados as $fila){
		
			echo "
			
			<input type='hidden' name='v' value='$id'/>

			<dd><label for='tipo'>Tipo</label></dd>
			<input type='text' name='tipo' maxlength='30' value='$fila[tipo]'/><p class='mensajes' id='mensaje40'>Este campo es obligatorio.</p>

			<dd><label for='autor'>Autor</label></dd>
			<textarea name='autor' rows='2' cols='50' maxlength='100'>$fila[autor]</textarea><p class='mensajes' id='mensaje41'>Este campo es obligatorio.</p>

			<dd><label for='titular'>Titular</label></dd>
			<textarea name='titular' rows='3' cols='50' maxlength='100'>$fila[titular]</textarea><p class='mensajes' id='mensaje42'>Este campo es obligatorio.</p>

			<dd><label for='contenido'>Contenido</label></dd>
			<textarea name='contenido' rows='20' cols='50' maxlength='5000'>$fila[contenido]</textarea>

			<dd><label for='imagen'>Imagen</label></dd>
			<textarea name='imagen' rows='2' cols='50' maxlength='100'>$fila[imagen]</textarea>

			<br>

			<center><input type='submit' value='Cambiar' /></center>

			<br><br>";
		}
	?>
	
</form>

<?php
	include 'pie.php';
?>
