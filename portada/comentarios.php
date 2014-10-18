<?php
	include('../globales.php');

	echo '<hr class="lineasNoticiasRelacionadas">';
	echo '<h4 class="nRelacionadas">COMENTAR</h4>';
	echo '<hr class="lineasNoticiasRelacionadas">';

	$consultaSQL = "SELECT * FROM Comentarios where id_noticia='$id'"; 
	$resultados = $conex->query( $consultaSQL ); 
	

	if(@$_SESSION['_TIPO']=="usuario"){
		echo "<form action='../insertarComentarios.php' method='post'>
			<textarea name='textoArea' rows='4' cols='50' maxlength='200'></textarea>
			<br>
			<input type='submit' value='Comentar' />
			<input type='hidden' name='valor' value='$id'/>
		</form>";
		
		echo '<article class="comentar">';
		foreach ( $resultados as $fila ) {
								 
			echo "<br>
				<h4>$fila[usuario]:</h4>
				<p>$fila[contenido]</p>";
				
		}
		echo '</article>';
		
	}else if(@$_SESSION['_TIPO']=="administrador"){
		echo "<form action='../insertarComentarios.php' method='post'>
			<textarea name='textoArea' rows='4' cols='50' maxlength='200'></textarea>
			<br>
			<input type='submit' value='Comentar' />
			<input type='hidden' name='valor' value='$id'/>
		</form>";
		
		echo '<article class="comentar">';
		foreach ( $resultados as $fila ) {
								 
			echo "<br>
				<h4>$fila[usuario]:</h4>
				<p>$fila[contenido]</p>";
				
		}
		echo '</article>';
	}else {
		echo '<article class="comentar">';
		foreach ( $resultados as $fila ) {
								 
			echo "<br>
				<h4>$fila[usuario]:</h4>
				<p>$fila[contenido]</p>";
				
		}
		echo '</article>';
		
	}
?>
