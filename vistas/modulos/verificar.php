<!--========================
=  VERIFICACION            =
==========================-->

<?php 

	$url = Ruta::ctrRuta();

	if (isset($rutas[1])) {
		
		$item = "emailEncriptado";	

		$valor = $rutas[1];
		
		$verificar = ControladorUsuarios::ctrMostrarUsuario($item, $valor);
				
		#PARA EL MENSAJE
		$usuarioVerificado = false;

		#ACTUALIZANDO EL CAMPO DE VERIFICACIÖN
		$item1 = "verificacion";

		$valor1 = 0;

		$item2 = "id";

		$valor2 = $verificar["id"];

		$actualizar = ControladorUsuarios::ctrActualizarUsuario($item1, $valor1, $item2, $valor2);

		if ($actualizar == "ok") {
			
			$usuarioVerificado = true;

		}
	
	}

 ?>


<div class="container">
	
	<div class="row">
		
		<div class="col-xs-12 text-center verificar">
			
			<?php if ($usuarioVerificado){ ?>
				
				<h3>Gracias</h3>

				<h2>¡Ya hemos verificado su cuenta de correo!, ahora puedes ingresar al sistema.</h2>

				<a href="<?php echo $url?>"><button class="btn btn-default backColor btn-lg">INGRESAR</button></a>

			<?php } else{ ?>

				<h3>Lo Sentimos</h3>

				<h2>¡No hemos verificado su cuenta de correo!, debe registrarse una vez más, verifica que tu correo eléctronico sea correcto.</h2>

				<a href="<?php echo $url?>"><button class="btn btn-default backColor btn-lg">REGISTRO</button></a>
	
			<?php } ?>

		</div>

	</div>

</div>