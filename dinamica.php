<?php
	include 'cabecera.php';
?>





<section id="sec1">
	<article id="destacadas">


		<?php
			$id=$_GET['id'];
			$consultaSQL = "SELECT * FROM noticias where id_noticia='$id'"; 
			$resultados = $conex->query( $consultaSQL ); 
			$resultados->execute();
			$fila=$resultados->fetch();

		?>

		<h1 class="titulosNoticias"><?php echo $fila['titular']; ?></h1>

		<ul class="listasNoticias">
			<li>Regiones separatistas que Rusia apoya</li>
			<li>Los náufragos de la antigua URSS</li>
		</ul>	

		<hr class="suspensivos">
		<p class="autorNoticias"><?php echo $fila['autor']; ?></p>	
		<hr class="suspensivos">

		<br>

		<img src="<?php echo $fila['imagen']; ?>" class="imagenesNoticias3">
		<hr class="suspensivos">

		<br>

		<p><?php echo $fila['contenido']; ?></p>
			

	</article>

	<article id="opiniones">
		<?php
			include('comentarios.php');
		?>
	</article>
</section>

<section id="sec2">
	<article id="relaciaonadas">
		<hr class="lineasNoticiasRelacionadas">
		<h4 class="nRelacionadas">NOTICIAS RELACIONADAS</h4>
		<hr class="lineasNoticiasRelacionadas">
		<br>

		<h4 class="nRelacionadas2">En el Valle de Lecrín</h4>
		<aside class="relacionadas2">
			<ul>
				<li><a href="local/kerry_advierte_consecuencia_ucrania.php">Kerry advierte a Lavrov de los costes de desestabilizar Ucrania</a></li>
				<li><a href="local/prorrusos_movilizan_este_ucrania.php">Grupos prorrusos se movilizan por la secesión del este de Ucrania</a></li>
				<li><a href="local/OTAN_avisa_a_rusia.php">La OTAN avisa de que un paso más supone "una escalada seria"</a></li>
			</ul>
		</aside>

		<h4 class="nRelacionadas2">En otros medios</h4>
		<aside class="relacionadas2">
			<ul>
				<li><a href="http://www.lavanguardia.com/">lavanguardia.es</a></li>
				<li><a href="http://www.abc.es/">abc.es</a></li>
				<li><a href="http://www.rtve.es/">rtve.es</a></li>
				<li><a href="http://www.elmundo.es/">elmundo.es</a></li>
				<li><a href="http://www.20minutos.es/">20minutos.es</a></li>
			</ul>
		</aside>

		<h4 class="nRelacionadas2">Y además</h4>
		<aside class="relacionadas2">
			<ul>
				<li><a href="#">El fin de Windows XP aúpa las ventas de PC de sobremesa en Europa (Dealerworld.es)</a></li>
				<li><a href="#">Los gastos no deducibles  (Captio)</a></li>
				<li><a href="#">La censura planea sobre la regulación de Internet en México (El País)</a></li>
				<li><a href="#">Aguirre: la ciudadanía "no quiere políticos prepotentes en coches… (Expansión)</a></li>
			</ul>
		</aside>


	</article>
				
	<article id="publicitarios">
		<a href="https://www.apple.com/es/"><img src="img/HomerApple.jpg"></a>
		<a href="https://www.nestle.es/kitkat/aspx/index.aspx"><img src="img/kitkat.jpg"></a>
		<a href="http://www.nike.com/es/es_es/"><img src="img/nike.jpg" id="imgNike"></a>
	</article>
</section>

<?php
	include 'pie.php';
?>
