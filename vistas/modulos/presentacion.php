<?php

  $url = Ruta::ctrRuta();

  $servidor = Ruta::ctrRutaServidor();

?>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo $url; ?>">TUTORIAS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Inicio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portafolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Equipo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Historia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#somos">Somos...</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header class="presentacion">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Ingeneria en Sistemas Computacionales</div>
                <div class="intro-heading">Tutorias</div>
                <a href="#modalInicio" data-toggle="modal" class="page-scroll btn btn-xl">Iniciar</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Comunidad</h2>
                    <h3 class="section-subheading text-muted">Algunos de nuestros usuarios.</h3>
                </div>
            </div>

            <?php
              $comunidad = ControladorUsuarios::ctrMostrarComunidad();
            ?>

            <div class="row text-center">
              <?php foreach ($comunidad as $key => $value) {
                echo '<div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa '.$value["icono"].' fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">'.$value["tipo-usuario"].'</h4>
                        <p class="text-muted">'.$value["descripcion"].'</p>
                    </div>';
              } ?>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Nuestro Equipo TESVG.</h3>
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

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Acerca de...</h2>
                    <h3 class="section-subheading text-muted">Un poco de la Historia.</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                  <?php

                  $acercaDe = ControladorActividades::ctrAcercaDe();
                  ?>

                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src=" <?php echo $servidor.$acercaDe[0]["imagen"]?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4> <?php echo $acercaDe[0]["titulo"] ?> </h4>
                                    <h4 class="subheading"> <?php echo $acercaDe[0]["subtitulo"] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $acercaDe[0]["descripcion"] ?></p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src=" <?php echo $servidor.$acercaDe[1]["imagen"]?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $acercaDe[1]["titulo"]?></h4>
                                    <h4 class="subheading"> <?php echo $acercaDe[1]["subtitulo"] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $acercaDe[1]["descripcion"] ?></p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo $servidor.$acercaDe[2]["imagen"]?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $acercaDe[2]["titulo"]?></h4>
                                    <h4 class="subheading"><?php echo $acercaDe[2]["subtitulo"] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $acercaDe[2]["descripcion"] ?></p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src=" <?php echo $servidor.$acercaDe[3]["imagen"]?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $acercaDe[3]["titulo"]?></h4>
                                    <h4 class="subheading"><?php echo $acercaDe[3]["subtitulo"] ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $acercaDe[3]["descripcion"] ?></p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>FIN
                                    <br>de la
                                    <br>HISTORIA!</h4>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="servicios-heading text-uppercase">Nuestros Profesores</h2>
                <h3 class="section-subheading text-muted">Algunos de ellos aparecen aquí.</h3>
              </div>
            </div>
            <div class="row">
         
            <?php

            $item = "perfil";

            $valor = "3";

            $tutores = ControladorUsuarios::ctrMostrarTutores($item, $valor);

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


  	<section class="clearfix countUpSection" id="somos">
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
  						<a href="#modalInicio" data-toggle="modal" class="btn btn-primary">INICIAR</a>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

    <div class="container-fluid">

      <div class="modal fade login in modales" id="modalInicio" style="overflow-y: scroll;"  aria-hidden="true">
  		      <div class="modal-dialog login animated">
      		      <div class="modal-content">
      		         <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h2 class="modal-title">Inicia con..</h2>
                      </div>
                      <div class="modal-body">
                          <div class="box">
                               <div class="content">
                                  <div class="social">
                                      <a id="google_login" class="circle google" href="#">
                                          <i class="fa fa-google-plus fa-fw"></i>
                                      </a>
                                      <a id="facebook_login" class="circle facebook" href="#">
                                          <i class="fa fa-facebook fa-fw"></i>
                                      </a>
                                  </div>
                                  <div class="division">
                                      <div class="line l"></div>
                                        <span>o</span>
                                      <div class="line r"></div>
                                  </div>
                                  <div class="error"></div>
                                  <div class="form loginBox">
                                      <form method="post" onsubmit="return validateForm()">
                                        <input id="emailIngreso" required class="form-control" type="text" placeholder="Correo Electronico" name="emailIngreso">
                                        <input id="passwordIngreso"  class="form-control" type="password" placeholder="Contraseña" name="passwordIngreso">
                                          <?php
                                            $inicio = new ControladorUsuarios();
                                            $inicio -> ctrLoginUsuario();
                                          ?>
                                        <input class="btn btn-default btn-login backColor" type="submit" value="Inicio">
                                      </form>
                                  </div>
                               </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <div class="forgot register-footer" style="">
                              <a href="#modalOlvido" data-toggle="modal" data-dismiss="modal"><span>¿Olvidaste Tu Contraseña?</span></a>
                          </div>
                      </div>
      		      </div>
  		      </div>
  		  </div>
    </div>


    <div class="container-fluid">

      <div class="modal fade login in modales" id="modalOlvido"  style="overflow-y: scroll;" aria-hidden="true">
  		      <div class="modal-dialog login animated">
      		      <div class="modal-content">
      		         <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h2 class="modal-title">Olvido de Contraseña..</h2>
                          <span class="text-muted">Ingresa tu EMAIL y en breve se te enviara información que te ayudara</span>
                      </div>
                      <div class="modal-body">
                          <div class="box">
                               <div class="content">
                                  <div class="form loginBox">
                                      <form method="post">
                                        <input id="emailIngreso" required class="form-control" type="text" placeholder="Correo Electronico" name="emailOlvido">
                                          <?php
                                            $password = new ControladorUsuarios();
                                            $password -> ctrOlvidoPassword();
                                          ?>
                                        <input class="btn btn-default btn-login backColor" type="submit" value="Enviar">
                                      </form>
                                  </div>
                               </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <div class="forgot register-footer" style="">
                              <a href="#modalInicio" data-toggle="modal" data-dismiss="modal"><span>Iniciar Sesión</span></a>
                          </div>
                      </div>
      		      </div>
  		      </div>
  		  </div>
    </div>
