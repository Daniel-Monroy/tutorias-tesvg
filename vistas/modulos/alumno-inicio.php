<?php

$url = Ruta::ctrRuta();

$servidor = Ruta::ctrRutaServidor();

?>


<!--=====================
= BREADCRUMB            =
======================-->
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

<!--=====================
ACTIVIDADES REALIZADAS  =
======================-->
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

			# ========================
		    # = ACTIVIDADES REALIZADAS
		    # ========================
		    $item = "id_alumno";

		    $valor = $_SESSION["id"];

		    $ordenar = "id";

		    $modo = "DESC";

		    $base = 0;

		    $tope = 3;

		    //ENVIANDO SOLO POR ALUMNO Y CATEGORIA
		    $actividadesRealizadas = ControladorActividades::ctrMostrarSubActividadesRealizadas($item, $valor, $ordenar, $modo, $base, $tope);
		    
		   	
		   	if (count($actividadesRealizadas) == 0) {
		   		
		   		echo '<h3 class="text-muted text-center"> No has realizado ninguna actividad </h3>';

		   	} else {

				foreach ($actividadesRealizadas as $key => $value) {
					
					$itemSubActividad = "id";

					$valorSubActiviad = $value["id_actividad"];

					$subActividad = ControladorActividades::ctrMostrarSubActividades($itemSubActividad, $valorSubActiviad);

					foreach ($subActividad as $key => $value1) {
						
						echo '

						<div class="col-md-4 col-sm-6 portfolio-item">
						
							<a class="portfolio-link" href="actividad/'.$value["id"].'">
						
								<img class="img-responsive" widht="50" src="'.$servidor.$value1["imagen"].'" alt="">
						
							</a>
						
							<div class="portfolio-caption">
						
								<h4>'.$value1["nombre"].'</h4>';

								$itemActividad = "id";

								$valorActividad = $value1["id_actividad"];

								$actividad = ControladorActividades::ctrMostrarActividades($itemActividad, $valorActividad);
						
								echo' <a href="actividad/'.$value["id"].'"> <p class="text-muted">'.$actividad["categoria"].'</p> </a>
						
							</div>
						
						</div> ';
					}
				
				}

		
			echo'

			<a href="actividades">
				<button class="btn btn-default pull-right btn-lg backColor"><i class="fa fa-eye"></i> Ver todas las actividades <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</button>
			</a>';

			}

			?>

		</div>
		
		

	</div>

</section>

<br>

<section id="actividades" class="resumen-actividades">
	
	<div class="container-fluid video">

		<div class="row">

			<div class="col-xs-12 multimendiaActividades">

				<img src="<?php echo $url ?>vistas/img/bg-talleres.jpg">

				<video autoplay loop poster="<?php echo $url ?>vistas/img/bg-talleres.jpg" class="video-actividades img-responsive">
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


				<div class="row">

					<div id="talleres" class="col-xs-12 info-curso bg-muted">
						
						<h3 class="tareas text-primary"> <span> <i class="fa fa-calendar"></i> </span> Tareas</h3>
						

						<div class="row">


							<?php 
  							# ============================
						    # = TODAS LAS ACTIVIDADES    =
						    # ============================
							$itemSubActividad = "id_tutor";

							$valorSubActiviad = $_SESSION["id_tutor"];
							
							$subActividades = ControladorActividades::ctrMostrarSubActividades($itemSubActividad, $valorSubActiviad);
					
						    # ============================
						    # = ACTIVIDADES REALIZADAS   =
						    # ============================
							$item = "id_alumno";

						    $valor = $_SESSION["id"];

						    $ordenar = "id";

						    $modo = "DESC";

						    $base = 0;

						    $tope = count($subActividades);
						    
						    $actividadesRealizadas = ControladorActividades::ctrMostrarSubActividadesRealizadas($item, $valor, $ordenar, $modo, $base, $tope);
							

							if (count($actividadesRealizadas) == count($subActividades)) {
								
								echo '  

									<div class="col-xs-12">
										<h1>Sin Actividades Pendientes</h1>
										<h2>Tutorias TESVG</h2>
									</div>

								';
							
							}  else {

								$realizadas = array();

								$sinRealizar = array();
								
								# ============================
							    # = ACTIVIDADES REALIZADAS   =
							    # ============================
								foreach ($subActividades as $key => $value) {

									array_push($sinRealizar, $value["id"]);

									foreach ($actividadesRealizadas as $key => $value1){

									 	if ($value["id"] == $value1["id_actividad"]) {

											array_push($realizadas, $value["id"]);
							 				
									 	 }

									 }
									
								}
								
								$pendientes = array_diff($sinRealizar, $realizadas);


								# ===============================
								# TOMA EL PRIMER INDICE DEL ARRAY
								# ===============================
								if (!function_exists('array_key_first')) {
								    
								    function array_key_first($pendientes)
								    {
								        if (count($pendientes)) {
								            reset($pendientes);
								            return key($pendientes);
								        }

								        return null;
								    }
								}

								$firstKey = array_key_first($pendientes);



								# ===============================
								# TOMA EL ULTIMO INDICE DEL ARRAY
								# ===============================
								if (!function_exists('array_key_last')) {
  
								    function array_key_last($array) {
								        $key = NULL;

								        if(is_array($array)) {

								            end($array);
								            
								            $key = key( $array );
								        }

								        return $key;
								    }
								}
								
								$lastKey = array_key_last($pendientes);
								
								for ($i=$firstKey; $i <=$lastKey ; $i++) { 
									
									$item = "id";
									
									$valor = $pendientes[$i];
									
									$subActividades = ControladorActividades::ctrMostrarSubActividades($item, $valor);
									
									for ($i1=0; $i1 < count($subActividades); $i1++) { 
										
									 echo' 
										 
										 <div class="detalle-evento col-xs-12 col-md-6 col-lg-12">
												
										 	<a href="'.$subActividades[$i1]["ruta"].'"> <h3 class="text-primary">'.$subActividades[$i1]["nombre"].'</h3> </a>
											
										 	<p>
										 		<i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 a.m
										 	</p>
										 	<p>
										 		<i class="fa fa-calendar" aria-hidden="true"></i> 2018-02-14
										 	</p>
										 	<p>';

										 	$itemTutor = "id";

										 	$valorTutor = $subActividades[$i1]["id_tutor"];

										 	$tutor = ControladorTutores::ctrMostrarTutores($itemTutor, $valorTutor);
												
										 	echo'
										 		<i class="fa fa-user" aria-hidden="true"></i>'.$tutor[0]["nombre"]." ".$tutor[0]["apellidos"].'
										 	</p>
										
										 </div>
										
										 ';

									}


								 	if ($i>=1) break;
									
								}
								
							}
						

						?> 
						
						 </div>

					</div> 

				</div>

			</div>

		</div>

	</div>

</section>