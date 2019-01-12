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
					
					<img class="img-thumbnail" src="<?php echo $servidor?>vistas/actividades/imagenes/foda-fortalezas/foda-fortalezas.jpg" alt="">

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

					<h1 class="text-muted text-uppercase">La linea de la vida</h1>
					
					<h4 class="text-muted"><small>linea de la vida</small></h4>	
	
					<br>

					<blockquote>
	
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae velit ducimus, consequatur id animi facilis dolor doloremque corrupti impedit odio cum, sed quam deserunt ipsam quia consequuntur perspiciatis repudiandae voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sapiente neque provident. Ex, quos ut aliquid explicabo, cupiditate numquam, iure voluptatem consectetur atque, quae perferendis nulla iste distinctio dolorum voluptas.</p>

					</blockquote>

					<h4> 
						
						<p class="text-muted">Entregado el día</p>
						
						<span class="label label-default" style="font-weight:100">

							<i class="fa fa-clock-o" style="margin-right:5px;"></i>
							10-12-2018 10:00:00

						</span>

					 </h4>
				
				</div>

				<hr>

			</div>			

		</div>	

		<br>

		<div class="row">
			
			<ul class="nav nav-tabs">
				
				<li class="active">
					
					<!-- <a href="" class="text-muted">Revisión</a> -->


					<a href="" class="text-muted">Sin Revisión</a>


				</li>

			</ul>

		</div>

		<br>

		<div class="row">
			
			<div class="col-xs-12 hidden">
				
				<h3 style="margin-top: -10px"> <i class="fa fa-thumbs-down"></i>Tu tutor aún no ha revisado tu actividad</h3>

				<br>

			</div>	

			<div class="col-md-2 col-sm-3 col-xs-12">
					
				<figure style="padding-bottom: 10px">
					
					<img class="img-rounded" width="80%" src="http://localhost/tutoriasBack/vistas/img/usuarios/admin/518.png">

				</figure>	



				<h5 class="text-muted"> <i class="fa fa-calendar-o" aria-hidden="true"></i> Revisada: <br> <br> 10-12-2019 13:00:12</h5>

			</div>

			<div class="col-md-10 col-sm-9 col-xs-12">

				<h1 style="margin-top: -10px"><small> Daniel Monroy Domínguez</small></h1>

				<h4> <small> Ingeneriero en Sistemas Computacionales <small></h4>

				 <h4> 
					
					<span class="label label-default hidden" style="font-weight:100">

						<i class="fa fa-thumbs-up" style="margin-right:5px;"></i>
						Bien echo

					</span>

					<span class="label label-default" style="font-weight:100">

						<i class="fa fa-thumbs-down" style="margin-right:5px;"></i>
						No lo hiciste muy bien

					</span>

				 </h4>
				
				<blockquote>
			
					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed fugiat, fuga iste enim dignissimos qui ullam inventore adipisci reprehenderit vitae quasi ducimus itaque maiores perferendis quis quia possimus officia illum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam obcaecati, dolores asperiores rerum dolorum deserunt. Ullam fugit commodi nihil nobis. Labore tempora, odio eius? Culpa aperiam esse voluptate, at ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos modi sit corrupti asperiores, cumque id, enim recusandae reprehenderit unde totam necessitatibus qui expedita, ad. Vel nam optio quia eligendi, molestias?</p>

				</blockquote>

			</div>

		</div>

	</div>

</div>