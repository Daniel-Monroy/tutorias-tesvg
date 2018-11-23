<?php

$url = Ruta::ctrRuta();

$servidor = Ruta::ctrRutaServidor();

?>


<section id="servicios" class="bg-muted">

	<div class="container">

		<div class="row">

			<div class="col-lg-12 text-center">

				<h2 class="servicios-heading text-uppercase">Mensajes para ti</h2>
				<h3 class="section-subheading text-muted">Nuestros dirigentes se preocupan por ti</h3>

			</div>

		</div>

		<div class="row text-center mensajes">

			<?php

				$mensajes = ControladorActividades::ctrMostrarMensajes();

				foreach ($mensajes as $key => $value) {

					echo '

					<div class="col-sm-4">
						<span class="fa-stack fa-5x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="fa '.$value["icono"].' fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="servicios-heading">'.$value["nombre"].' <br> <small>Director</small></h4>
						<p class="text-muted">'.$value["mensaje"].'.</p>
					</div>

					';

				}

			?>

		</div>

	</div>

</section>


<!-- Portfolio Grid -->
	<section class="bg-light" id="portfolio">
		<div class="container">

			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="servicios-heading text-uppercase">Portfolio</h2>
					<h3 class="section-subheading text-muted">Actividades de nuestro día a día</h3>
				</div>
			</div>

			<div class="row">

				<?php

				$portafolio = ControladorActividades::ctrPortafolioActividades();

				foreach ($portafolio as $key => $value) {

				echo '

					<div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link">
							<img class="img-responsive" widht="50" src="'.$servidor.$value["img"].'" alt="">
						</a>
						<div class="portfolio-caption">
							<h4>'.$value["titulo"].'</h4>
							<p class="text-muted">'.$value["subtitulo"].'</p>
						</div>
					</div> ';

				}

				?>

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
