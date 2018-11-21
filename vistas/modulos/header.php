<?php

	$servidor = Ruta::ctrRutaServidor();

	$url = Ruta::ctrRuta();

?>

<!--=====================================
TOP
======================================-->
<div class="container-fluid barraSuperior" id="top">

	<div class="container">

		<div class="row">
			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">

				<ul>

					<li>
						<a href="http://facebook.com/" target="_blank">
							<i class="fa fa-facebook redSocial facebookBlanco" aria-hidden="true"></i>
						</a>
					</li>

					<li>
						<a href="http://youtube.com/" target="_blank">
							<i class="fa fa-youtube redSocial youtubeBlanco" aria-hidden="true"></i>
						</a>
					</li>

					<li>
						<a href="http://twitter.com/" target="_blank">
							<i class="fa fa-twitter redSocial twitterBlanco" aria-hidden="true"></i>
						</a>
					</li>

					<li>
						<a href="http://google.com/" target="_blank">
							<i class="fa fa-google-plus redSocial googleBlanco" aria-hidden="true"></i>
						</a>
					</li>

					<li>
						<a href="http://instagram.com/" target="_blank">
							<i class="fa fa-instagram redSocial instagramBlanco" aria-hidden="true"></i>
						</a>
					</li>

				</ul>

			</div>

			<!--=====================================
			REGISTRO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">

				<ul>

					<li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
					<li>|</li>
					<li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<!--=====================================
HEADER
======================================-->
<header class="container-fluid">

	<div class="container">

		<div class="row" id="cabezote">

			<!--=====================================
			LOGOTIPO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">

				<a href="#">

					<img src="<?php echo $servidor ?>vistas/img/plantilla/logoTESVG.png" class="img-responsive">

				</a>

			</div>

			<!--=====================================
			BLOQUE CATEGORÍAS Y BUSCADOR
			======================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

				<!--=====================================
				BOTÓN CATEGORÍAS
				======================================-->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">

					<p>CATEGORÍAS

						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>

					</p>

				</div>

				<!--=====================================
				BUSCADOR
				======================================-->

				<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">

					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">

					<span class="input-group-btn">

						<a href="#">

							<button class="btn btn-default backColor" type="submit">

								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>

			</div>

			<!--=====================================
			CARRITO DE COMPRAS
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="tareas">

				<a href="#">

					<button class="btn btn-default pull-left backColor">

						<i class="fa fa-flag" aria-hidden="true"></i>

					</button>

				</a>

				<p>ACTIVIDADES: <span class="actividadesTotales">3</span> <br> REALIZADAS: <span class="actividadesRealizadas">2</span></p>

			</div>

		</div>

		<!--=====================================
		CATEGORÍAS
		======================================-->

		<div class="col-xs-12 backColor" id="categorias">

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>

				<hr>

				<ul>

					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

				</ul>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>

				<hr>

				<ul>

					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

				</ul>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>

				<hr>

				<ul>

					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

				</ul>

			</div>

			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

				<h4>
					<a href="#" class="pixelCategorias">Lorem Ipsum</a>
				</h4>

				<hr>

				<ul>

					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>

				</ul>

			</div>

		</div>

	</div>

</header>



<section id="servicios" class="bg-muted">

	<div class="container">

		<div class="row">

			<div class="col-lg-12 text-center">

				<h2 class="servicios-heading text-uppercase">Mensajes para ti</h2>
				<h3 class="section-subheading text-muted">Lorem ipsum eiusk kaiioa oiank</h3>

			</div>

		</div>

		<div class="row text-center mensajes">

			<div class="col-sm-4">
				<span class="fa-stack fa-5x">
				  <i class="fa fa-circle fa-stack-2x text-primary"></i>
				  <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="servicios-heading">DIRECTOR GENERAL</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>

			<div class="col-sm-4">
				<span class="fa-stack fa-5x">
					<i class="fa fa-circle fa-stack-2x text-primary"></i>
					<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="servicios-heading">DIRECTOR GENERAL</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>


			<div class="col-sm-4">
				<span class="fa-stack fa-5x">
					<i class="fa fa-circle fa-stack-2x text-primary"></i>
					<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
				</span>
				<h4 class="servicios-heading">DIRECTOR GENERAL</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>


		</div>

	</div>

</section>


<!-- Portfolio Grid -->
	<section class="bg-light" id="portfolio">
		<div class="container">

			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="servicios-heading text-uppercase">Portfolio</h2>
					<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
						<img class="img-responsive" src="<?php echo $url?>vistas/img/tarea.jpg" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>Threads</h4>
						<p class="text-muted">Illustration</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
						<img class="img-responsive" src="<?php echo $url?>vistas/img/tarea.jpg" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>Threads</h4>
						<p class="text-muted">Illustration</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
						<img class="img-responsive" src="<?php echo $url?>vistas/img/tarea.jpg" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>Threads</h4>
						<p class="text-muted">Illustration</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="team" class="bg-muted">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="servicios-heading text-uppercase">Our Amazing Team</h2>
					<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="team-member">
						<img class="mx-auto img-circle" src="<?php echo $url;?>vistas/img/team/2.jpg" alt="">
						<h4>Juan Pablo</h4>
						<p class="text-muted">Jefe de Divición</p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-facebook-f"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-youtube-play"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="team-member">
						<img class="mx-auto img-circle" src="<?php echo $url;?>vistas/img/team/2.jpg" alt="">
						<h4>Juan Pablo</h4>
						<p class="text-muted">Jefe de Divición</p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-facebook-f"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-youtube-play"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="team-member">
						<img class="mx-auto img-circle" src="<?php echo $url;?>vistas/img/team/2.jpg" alt="">
						<h4>Juan Pablo</h4>
						<p class="text-muted">Jefe de Divición</p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-facebook-f"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="fa fa-youtube-play"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="text-center resumen-actividades">
		<div class="row">
			<div class="col-xs-12 contenedor-video">
				<video autoplay loop poster="<?php echo $url ?>vistas/img/bg-talleres.jpg">
					<source src="<?php echo $url ?>vistas/img/video/video.mp4" type="video/mp4">
					<source src="<?php echo $url ?>vistas/img/video/video.webm" type="video/webm">
					<source src="<?php echo $url ?>vistas/img/video/video.ogv" type="video/ogg">
				</video>
			</div>
		</div><!--contenedor del video-->

		<div class="row contenido-programa">
			<div class="col-lg-12">
				<h2 class="servicios-heading text-uppercase">Tus Actividades</h2>
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>

			<div id="talleres" class="col-xs-12 info-curso bg-muted">
				<h3 class="section-subheading tareas"> <span> <i class="fa fa-calendar">  </i> </span> Tareas</h3>
				<div class="row">
					<div class="detalle-evento col-xs-12">
							<h3 class="text-primary">HTML 5, CSS3 y JAVASCRIPT</h3>
							<p><i class="fa fa-clock-o" aria-hidden="true"></i>16:00 hrs</p>
							<p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
							<p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre Valdez</p>
					</div>
					<div class="detalle-evento col-xs-12">
							<h3 class="text-primary">HTML 5, CSS3 y JAVASCRIPT</h3>
							<p><i class="fa fa-clock-o" aria-hidden="true"></i>16:00 hrs</p>
							<p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
							<p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre Valdez</p>
					</div>
					<div class="detalle-evento col-xs-12">
							<h3 class="text-primary">HTML 5, CSS3 y JAVASCRIPT</h3>
							<p><i class="fa fa-clock-o" aria-hidden="true"></i>16:00 hrs</p>
							<p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Dic</p>
							<p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre Valdez</p>
					</div>
				</div>
			</div>

		</div>
	</section>


	<section class="clearfix countUpSection">

	<div class="container">

		<div class="page-header text-center">
			<h2 class="text-primary">¿Cuantos Somos?</h2>
		</div>

		<div class="row">

			<div class="col-sm-3 col-xs-12">
				<div class="text-center countItem">
					<div class="counter">7</div>
					<div class="counterInfo bg-color-1">Administradores</div>
				</div>
			</div>

			<div class="col-sm-3 col-xs-12">
				<div class="text-center countItem">
					<div class="counter">8</div>
					<div class="counterInfo bg-color-2">Cordinadores</div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="text-center countItem">
					<div class="counter">60</div>
					<div class="counterInfo bg-color-3">Tutores</div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="text-center countItem">
					<div class="counter">220</div>
					<div class="counterInfo bg-color-4">Tutorados</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="btnArea text-center">
					<a href="#" class="btn btn-primary">Get it now</a>
				</div>
			</div>
		</div>
	</div>
</section>
