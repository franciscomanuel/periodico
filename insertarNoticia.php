<?php
	include 'cabecera.php';
	require_once('conexion.php');
?>

<form action="procesarInsertaNoticia.php" method="post" onsubmit="return validarInsertar(this)">
	<!--<dd><label for="identificador">Identificador</label></dd>
	<input type="text" name="identificador" maxlength="30"/>-->

	<dd><label for="tipo">Tipo</label></dd>
	<input type="text" name="tipo" maxlength="30"/><p class="mensajes" id="mensaje30">Este campo es obligatorio.</p>

	<dd><label for="autor">Autor</label></dd>
	<textarea name='autor' rows='2' cols='50' maxlength='100'></textarea><p class="mensajes" id="mensaje31">Este campo es obligatorio.</p>

	<dd><label for="titular">Titular</label></dd>
	<textarea name='titular' rows='3' cols='50' maxlength='100'></textarea><p class="mensajes" id="mensaje32">Este campo es obligatorio.</p>

	<dd><label for="contenido">Contenido</label></dd>
	<textarea name='contenido' rows='20' cols='50' maxlength='5000'></textarea>

	<dd><label for="imagen">Imagen</label></dd>
	<textarea name='imagen' rows='2' cols='50' maxlength='100'></textarea>

	<?php 
		$consultaSQL = "SELECT * FROM noticias"; 
		$resultados = $conex->query( $consultaSQL );
		$mayor=0;

		foreach ($resultados as $fila){
			if($fila['id_noticia']>$mayor){
				$mayor=$fila['id_noticia'];
			}
		}

	?>
	<input type="hidden" name="identificador" value="<?php echo $mayor ?>";>

	<br>

	<center><input type='submit' value='Insertar' /></center>

	<br><br>
	
</form>

<?php
	include 'pie.php';
?>
