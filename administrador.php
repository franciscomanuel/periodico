<?php
	include 'cabecera.php';
	require_once('conexion.php');
?>

<h3>Insertar nuevas noticias</h3>
<input type="button" name="insertar" value="Insertar" onclick="insertNoticia();"/>

<h3>Modificar noticias</h3>
<ul>
<?php
	$consultaSQL = "SELECT * FROM noticias"; 
	$resultados = $conex->query( $consultaSQL ); 

	
	foreach ( $resultados as $fila ) { 
		$id=$fila["id_noticia"];
		echo "<li><a href='dinamica.php?id=$fila[id_noticia]'>" . $fila["titular"] . "</a></li>
		<form action='modificar.php' class='admin' method='post'>
			<input type='submit' name='modificar' value='Modificar''/>
			<input type='hidden' name='idNoticia1' value='$id'/>
		</form>
		<form action='eliminarNoticia.php' class='admin' method='post'>
			<input type='submit' name='borrar' value='Eliminar'/>
			<input type='hidden' name='idNoticia2' value='$id'/>
		</form>"; 

	} 
?>
</ul>

<?php
	include 'pie.php';
?>
