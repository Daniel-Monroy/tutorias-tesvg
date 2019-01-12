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

      $tope = 12;

      //ENVIANDO SOLO POR ALUMNO Y CATEGORIA
      $actividadesRealizadas = ControladorActividades::ctrMostrarSubActividadesRealizadas($item, $valor, $ordenar, $modo, $base, $tope);
      
      foreach ($actividadesRealizadas as $key => $value) {
        
        $itemSubActividad = "id";

        $valorSubActiviad = $value["id_actividad"];

        $subActividad = ControladorActividades::ctrMostrarSubActividades($itemSubActividad, $valorSubActiviad);
        
        foreach ($subActividad as $key => $value1) {
          
          echo '

          <div class="col-md-4 col-sm-6 portfolio-item">
          
            <a class="portfolio-link" href="actividad">
          
              <img class="img-responsive" widht="50" src="'.$servidor.$value1["imagen"].'" alt="">
          
            </a>
          
            <div class="portfolio-caption">
          
              <h4>'.$value1["nombre"].'</h4>';

              $itemActividad = "id";

              $valorActividad = $value1["id_actividad"];

              $actividad = ControladorActividades::ctrMostrarActividades($itemActividad, $valorActividad);
          
              echo' <a href="actividad"> <p class="text-muted">'.$actividad["categoria"].'</p> </a>
          
            </div>
          
          </div> ';
        }
      
      }

      ?>

    </div>

  </div>

</section>
