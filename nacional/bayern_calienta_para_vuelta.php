	<?php
		include 'cabecera.php';
		$id=$_GET['id'];
	?>

			<section id="sec1">
				<article id="destacadas">
					<h6 class="tituloNoticia">LA AFICIÓN BÁVARA, CONVENCIDA PESE A LA DERROTA »</h6>

					<h1 class="titulosNoticias">El Bayern ya calienta para la vuelta</h1>

					<ul class="listasNoticias">
						<li>Real Madrid 1-0 Bayern de Múnich: Bayern, este es el Madrid</li>
					</ul>	

					<hr class="suspensivos">
					<p class="autorNoticias">DELFÍN MELERO 23/04/2014 - 22:04.	</p>
					<hr class="suspensivos">

					<br>

					<img src="../img/aficionados_bayern_cantando.jpg" class="imagenesNoticias">
					<footer>Aficionados del bayern cantando en el Bernabeu después del partido.</footer>
					<hr class="suspensivos">

					<br>	

					<p>Casi una hora después de que acabara el partido, los 4.000 aficionados del Bayern no paraban cantar con el Bernabéu a media luz. Calentaban pese a la derrota pensando en la vuelta del próximo martes, cuando se jugarán el pase a la final de Lisboa. La caldera del Allianz ya empieza a hervir con el Real Madrid al fondo.</p>

				</article>

				<article id="opiniones">
					<?php
						include 'comentarios.php';
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
							<li><a href="../nacional/ancelotti_contra_somos_formidables.php">Ancelotti: "A la contra somos formidables"</a></li>
							<li><a href="../nacional/guardiola_hemos_sido_valientes.php">Guardiola: "Hemos sido valientes"</a></li>
							<li><a href="../nacional/pepe_ramos_hacen_posible.php">Pepe y Ramos hacen posible el plan</a></li>
							<li><a href="../nacional/lahm_fortaleza_debilidad.php">Lahm, fortaleza y debilidad</a></li>
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
					<a href="https://www.apple.com/es/"><img src="../img/HomerApple.jpg"></a>
					<a href="https://www.nestle.es/kitkat/aspx/index.aspx"><img src="../img/kitkat.jpg"></a>
					<a href="http://www.nike.com/es/es_es/"><img src="../img/nike.jpg" id="imgNike"></a>
				</article>
			</section>

			<?php
				include 'pie.php';
			?>
