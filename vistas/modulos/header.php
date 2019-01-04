<?php

	$servidor = Ruta::ctrRutaServidor();

	$url = Ruta::ctrRuta();

?>

<!--=====================================
TOP
======================================-->
<?php

	$estiloPlantilla = ControladorPlantilla::ctrEstiloPlantilla();

?>


<div class="container-fluid barraSuperior" style="background: <?php echo $estiloPlantilla['barraSuperior'];?> " id="top">

	<div class="container">

		<div class="row">
			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">

				<ul>

					<?php
					/*=============================================>>>>>
					= SOCIALES =
					===============================================>>>>>*/
					$social = ControladorPlantilla::ctrEstiloPlantilla();

					$jsonRedesSociales = json_decode($social["redesSociales"], true);

					foreach ($jsonRedesSociales as $key => $value) {

						echo '

						<li>
							<a href="'.$value["url"].'" target="_blank">
								<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
							</a>
						</li>

						';

					}

					?>

				</ul>

			</div>

			<!--=====================================
			REGISTRO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">

				<ul>

					<?php
						if (isset($_SESSION["validarSession"])) {

							if ($_SESSION["validarSession"] == "ok") {

								if ($_SESSION["modo"] == "directo") {

									if ($_SESSION["foto"] == "") {

										echo'
										<li><img class="img-circle" src="'.$servidor.'vistas/img/usuarios/default/anonymous.png" width="10%" alt=""></li>
										';

									} else {

										echo'
											<li><img class="img-circle" src="'.$url.$_SESSION["foto"].'" width="10%" alt=""></li>
										';

									}

								}

							}

						}
						?>
					<li><a style="color: <?php echo $estiloPlantilla['textoSuperior']; ?>" href="<?php echo $url ?>perfil" data-toggle="modal">Ver Perfil</a></li>

					<li>|</li>

					<li><a style="color: <?php echo $estiloPlantilla['textoSuperior']; ?>" href="<?php echo $url ?>salir" data-toggle="modal">Salir</a></li>

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

				<a href="<?php echo $url?>">

					<img src="<?php echo $servidor.$estiloPlantilla["logoTutorias"]?>" class="img-responsive">

				</a>

			</div>

			<!--=====================================
			BLOQUE CATEGORÍAS Y BUSCADOR
			======================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

				<!--=====================================
				BOTÓN CATEGORÍAS
				======================================-->
				<div class="col-sm-4 col-xs-12 backColor" id="btnCategorias">
				
					<p>ACTIVIDADES
						<span class="pull-right"><i class="fa fa-bars" aria-hidden="true"></i></span>	
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
			LOGO ESTADO DE MÉXICO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipoedomex">

				<a href="<?php echo $url?>">

				<img src="<?php echo $servidor.$estiloPlantilla["logoTESVG"]?>" class="img-responsive">

				</a>

			</div>

		</div>

		<!--=====================================
		CATEGORÍAS
		======================================-->

		<?php

			$item = null;

			$value = null;

			$actividades = ControladorActividades::ctrMostrarActividades($item, $value);
			
		?>

		<div class="col-xs-12 backColor" id="categorias">
			
			<?php 	
		
			foreach ($actividades as $key => $value) {

				echo '  
				
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

					<h4> 
	
						<a href="#" class="pixelCategorias">'.$value["categoria"].'</a>

					</h4>

					<hr>

					<ul>';


					$item1 = "id_actividad";

					$valor1 = $value["id"];

					$item2 = "id_grupo";

					$valor2 = $_SESSION["id_grupo"];

					$subActividades = ControladorActividades::ctrMostrarSubActividadesbyGrupo($item1, $valor1, $item2, $valor2);

					foreach ($subActividades as $key => $value1) {
						
						echo '  
						
							<li><a href="'.$value1["ruta"].'" class="pixelSubCategoria">'.$value1["nombre"].'</a></li>

						';

					}
				
					echo'
						
					</ul>

				</div>

				'; 
			}

			?>

		</div>

	</div>

</header>