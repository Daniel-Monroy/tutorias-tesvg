<?php

$url = Ruta::ctrRuta();

$servidor = Ruta::ctrRutaServidor();

?>


<!--/*=============================================>>>>>
=BREADCRUMB INICIO =
===============================================>>>>>*/-->
<div class="container-fluid well well-sm">

  <div class="container">

    <div class="row">

      <ul class="breadcrumb lead fondoBreadcrumb text-uppercase">

           <li>
             <a href="<?php echo $url;  ?>">INICIO</a>
           </li>
           <li class="active pagActiva"><?php echo $rutas[0] ?></li>

      </ul>

    </div>

  </div>

</div>

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
					<h2 class="servicios-heading text-uppercase">Nuestros Profesores</h2>
					<h3 class="section-subheading text-muted">Algunos de ellos aparecen aquí.</h3>
				</div>
			</div>

			<div class="row">
			<?php

			$tutores = ControladorUsuarios::ctrMostrarTutores();

			foreach ($tutores as $key => $value) {

				echo '
								<div class="col-sm-4">
								<div class="team-member">
									<img class="mx-auto img-circle" src="'.$servidor.$value["foto"].'" alt="">
									<h4>'.$value["nombre"].'</h4>
									<p class="text-muted">'.$value["profesion"].'</p>
								</div>
								</div>
						 ';

			}

			?>
			</div>

		</div>
	</section>


	<section id="actividades" class="resumen-actividades">
		<div class="container-fluid">

			<div class="row contenedor-video">
				<div class="col-xs-12">
					<img src="<?php echo $url ?>vistas/img/bg-talleres.jpg" alt="" class="imagen-actividades">
					<video autoplay loop poster="<?php echo $url ?>vistas/img/bg-talleres.jpg" class="video-actividades">
						<source src="<?php echo $url ?>vistas/img/video/video.mp4" type="video/mp4">
						<source src="<?php echo $url ?>vistas/img/video/video.webm" type="video/webm">
						<source src="<?php echo $url ?>vistas/img/video/video.ogv" type="video/ogg">
					</video>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-xs-12 contenido-actividades">
					<h2 class="servicios-heading text-uppercase">Actividades Pendientes</h2>
					<h3 class="section-subheading text-muted">Revisemos que tienes...</h3>

					<div class="row" style="display:none">

						<div class="col-xs-12 sinActividad">

							<h1>Sin Actividades Pendientes</h1>

							<h2>Verifica esto con tu Tutor</h2>

						</div>

					</div>


					<div class="row">

						<div id="talleres" class="col-xs-12 info-curso bg-muted">
							<h3 class="tareas text-primary"> <span> <i class="fa fa-calendar"></i> </span> Tareas</h3>
							<div class="row">

								<?php
									/*=============================================>>>>>
									= ACTIVIDADES PENDIENTES =
									===============================================>>>>>*/

									$item1 = "id_alumno";

									$value1 = "juan";

									$item2 = "fecha";

									$value2 = "DESC";

									$actividades_pendientes = ControladorActividades::ctrActividadesPendientes($item1, $value1, $item2, $value2);

									if ($actividades_pendientes != null) {

										foreach ($actividades_pendientes as $key => $value) {
												echo '<div class="detalle-evento col-xs-12">
																	<h3 class="text-primary">'.$value["actividad"].'</h3>
																	<p><i class="fa fa-clock-o" aria-hidden="true"></i>'.$value["hora-actividad"].' hrs</p>
																	<p><i class="fa fa-calendar" aria-hidden="true"></i>'.$value["fecha-actividad"].'</p>
																	<p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre Valdez</p>
															</div>

												';
										}
									} else {

										echo '

										<div class="col-xs-12">
											<h1>Sin Actividades Pendientes</h1>
											<h2>@ChamoysTeam</h2>
										</div>

										';

									}
								 ?>
							 </div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>
