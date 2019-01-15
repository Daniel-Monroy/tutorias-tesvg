<?php

$url = Ruta::ctrRuta();

$servidor = Ruta::ctrRutaServidor();

# ========================
# = ACTIVIDADES REALIZADAS
# ========================
$item = "id";

$valor = $rutas[1];

$ordenar = "id";

$modo = "DESC";

$base = 0;

$tope = 1;

//ENVIANDO SOLO POR ALUMNO Y CATEGORIA
$actividadesRealizadas = ControladorActividades::ctrMostrarSubActividadesRealizadas($item, $valor, $ordenar, $modo, $base, $tope);

# ========================
# = ACTIVIDAD REALIZADA  =
# ========================
$item = "id";

$valor = $actividadesRealizadas[0]["id_actividad"];

$subActividad = ControladorActividades::ctrMostrarSubActividades($item, $valor);


?>

<!--=====================
= BREADCRUMB            =
======================-->
<div class="container-fluid well well-sm">

  <div class="container">

    <div class="row">

      <ul class="breadcrumb lead fondoBreadcrumb text-uppercase">

           <li class="">
             <a href="<?php echo $url;?>">INICIO</a>
           </li>

			<li class="active paginaActual"><?php echo $rutas[0];?></li>

      </ul>

    </div>

  </div>

</div>

<!--==============
= INFO-ACTIVIDAD =
===============-->
<div class="container infoActividad">
	
	<div class="container">
		
		<div class="row">
			
			<!--==============
			= IMAGEN =
			===============-->
			<div class="col-md-5 col-sm-6 col-xs-12">
				
				<figure class="visor">
					
					<img class="img-thumbnail" src="<?php echo $servidor.$subActividad[0]["imagen"]; ?>" alt="">

				</figure>

			</div>


			<div class="col-md-7 col-sm-6 col-xs-12">
				
				<div class="col-xs-12">

					<div class="col-xs-12">

						<h6 class="text-muted text-uppercase pull-right">

							<a href="#">

								<i class="fa fa-download"></i> Descargar

							</a>

						</h6>

					</div>

					<div class="clearfix"></div>	

					<?php 

						echo '  

						<h1 class="text-muted text-uppercase">'.$subActividad[0]["nombre"].'</h1>
						
						<h4 class="text-muted"><small>linea de la vida</small></h4>	

						<br>
							
						<blockquote>
	
							<p class="text-justify">'.$subActividad[0]["objetivo"].'</p>

						</blockquote>	


						<h4> 
						
							<p class="text-muted">Entregado el día</p>
							
							<span class="label label-default" style="font-weight:100">

								<i class="fa fa-clock-o" style="margin-right:5px;"></i>
								'.$actividadesRealizadas[0]["fecha"].'

							</span>

						 </h4>

						';


					 ?>

				</div>

				<hr>

			</div>			

		</div>	

		<br>

		<div class="row">
			
			<ul class="nav nav-tabs">
				
				<li class="active">

					<?php 

						$item = "id_subactividad";

						$valor = $subActividad[0]["id"];

						$revision = ControladorActividades::ctrMostrarRevisionActividad($item, $valor);
						
						if ($revision["estadoActividad"] == 0) {
							
								echo '<a href="" class="text-muted">Sin Revisión</a>';

						} else {

							echo '<a href="" class="text-muted">Revisada</a>';

						}


					 ?>

				</li>

			</ul>

		</div>

		<br>

		<div class="row">


			<?php 

			if ($revision["estadoActividad"] == 0) {


				echo ' 

				<div class="col-xs-12">
				
					<h3 style="margin-top: -10px"> <i class="fa fa-thumbs-down"></i>Tu tutor aún no ha revisado tu actividad</h3>
		
					<br>

				</div>	

				';


			} else {


			 echo '  

				<div class="col-md-2 col-sm-3 col-xs-12">';

					$item = "id";

					$valor = $subActividad[0]["id_tutor"];

					$tutor = ControladorTutores::ctrMostrarTutores($item, $valor);
					

					echo'
					<figure style="padding-bottom: 10px">
						
						<img class="img-rounded" width="80%" src="'.$servidor.$tutor[0]["foto"].'">

					</figure>	

					<h5 class="text-muted"> <i class="fa fa-calendar-o" aria-hidden="true"></i> Revisada: <br> <br> '.$revision["fecha"].'</h5>

				</div>

				<div class="col-md-10 col-sm-9 col-xs-12">

					 <h1 style="margin-top: -10px"><small> '.$tutor[0]["nombre"]." ".$tutor[0]["apellidos"].'</small> <button  class="btn btn-default backColor btn-sm pull-right"> <i class="fa fa-thumbs-up" aria-hidden="true" ></i> Enterado</button></h1> 


					 <h4> <small> '.$tutor[0]["profesion"].' <small></h4>

					 <h4> 
						
						<span class="label label-default hidden" style="font-weight:100">

							<i class="fa fa-thumbs-up" style="margin-right:5px;"></i>
							Bien echo

						</span>

					 </h4>
					
					<blockquote>
				
						<p class="text-justify">
						
							'.$revision["mensaje"].'

						</p>

					</blockquote>

				</div>

			 ';

			}?>
			
		</div>

	</div>

</div>