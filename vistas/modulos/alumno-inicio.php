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

           <li class="active">
             <a href="<?php echo $url;?>">INICIO/</a>
           </li>

      </ul>

    </div>

  </div>

</div>


<!-- ACTIVIsDADES REALIZADAS -->
<section class="bg-muted" id="portfolio">
	
	<div class="container">

		<div class="row">
		
			<div class="col-lg-12 text-center">
				<h2 class="servicios-heading text-uppercase">PORTAFOLIO</h2>
				
				<h3 class="section-subheading text-muted">Las actividades que has realizado</h3>
			
			</div>
		
		</div>

		<div class="row">

			<?php

			$item = "id_alumno";

			$valor = $_SESSION["id"];

			#Todas las Actividades
			$actividadesRealizadas = ControladorActividades::ctrActividadesRealizadasPorAlumno($item, $valor);
			
			foreach ($actividadesRealizadas as $key => $value) {
				
				$itemSubActividad = "id";

				$valorSubActiviad = $value["id_actividad"];

				$subActividad = ControladorActividades::ctrMostrarTodasSubActividades($itemSubActividad, $valorSubActiviad);
				
				foreach ($subActividad as $key => $value1) {
					
					echo '

					<div class="col-md-4 col-sm-6 portfolio-item">
					
						<a class="portfolio-link">
					
							<img class="img-responsive" widht="50" src="'.$servidor.$value1["imagen"].'" alt="">
					
						</a>
					
						<div class="portfolio-caption">
					
							<h4>'.$value1["nombre"].'</h4>';

							$itemActividad = "id";

							$valorActividad = $value1["id_actividad"];

							$actividad = ControladorActividades::ctrMostrarActividades($itemActividad, $valorActividad);
					
							echo' <p class="text-muted">'.$actividad["categoria"].'</p>
					
						</div>
					
					</div> ';
				}
			
			}

			?>

		</div>

	</div>

</section>


<hr>


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

								// $item1 = "id_alumno";

								// $value1 = $_SESSION["id"];

								// $item2 = "fecha";

								// $value2 = "DESC";

								// $actividades_pendientes = ControladorActividades::ctrActividadesPendientes($item1, $value1, $item2, $value2);

								// if ($actividades_pendientes != null) {

								// 	foreach ($actividades_pendientes as $key => $value) {
								// 			echo '<div class="detalle-evento col-xs-12">
								// 								<h3 class="text-primary">'.$value["actividad"].'</h3>
								// 								<p><i class="fa fa-clock-o" aria-hidden="true"></i>'.$value["hora-actividad"].' hrs</p>
								// 								<p><i class="fa fa-calendar" aria-hidden="true"></i>'.$value["fecha-actividad"].'</p>
								// 								<p><i class="fa fa-user" aria-hidden="true"></i>Juan Pablo de la Torre Valdez</p>
								// 						</div>

								// 			';
								// 	}
								// } else {

								// 	echo '

								// 	<div class="col-xs-12">
								// 		<h1>Sin Actividades Pendientes</h1>
								// 		<h2>@ChamoysTeam</h2>
								// 	</div>

								// 	';

								//}
							 ?>
						 </div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>
