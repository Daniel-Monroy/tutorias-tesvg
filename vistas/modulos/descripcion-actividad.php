
<!--/*=============================================>>>>>
=BREADCRUMB ACTIVIDADES =
===============================================>>>>>*/-->
<div class="container-fluid well well-sm">

  <div class="container">

    <div class="row">

      <ul class="breadcrumb lead fondoBreadcrumb text-uppercase">

           <li class="active pagActiva">
             <a href="<?php echo $url;?>">INICIO</a>
           </li>
           <li class="active pagActiva"> <?php echo $rutas[0];?></li>

      </ul>

    </div>

  </div>

</div>



<div class="container actividades" style="margin-bottom: 50px;">

  <?php 

    $item = "ruta";

    $valor = $rutas[0];

    $subActividades = ControladorActividades::ctrMostrarSubActividades($item, $valor);

   ?>

  <h3><?php echo $subActividades["nombre"]; ?></h3>
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#objetivo">Objetivo</a></li>
    <li><a data-toggle="tab" href="#imagen">Imagen</a></li>
    <li><a data-toggle="tab" href="#actividades">Actividad</a></li>
    <li><a data-toggle="tab" href="#cargaydescarga">Carga y Descarga de Archivos</a></li>
  </ul>

  <div class="tab-content">
   
    <div id="objetivo" class="tab-pane fade in active">
   
      <h3>Objetivo</h3>
   
      <p  style=" text-align: justify; font-size: 1.2em"><?php echo $subActividades["objetivo"]; ?></p>
   
    </div>

    <div id="imagen" class="tab-pane fade">
    
      <h3>Imagen</h3>

      <div class="row">
        
        <div class="col-xs-12 col-sm-4">
          
          <img src="<?php echo $url.$subActividades["imagen"];?>" class="img-responsive" width="100%" alt="">

        </div>

         <div class="col-xs-12 col-sm-8">
          
          <p style=" text-align: justify"> <?php echo $subActividades["textoAyuda"] ?> </p>

        </div>

      </div>
      
      <br>

      <br>
    
    </div>
    
    <div id="actividades" class="tab-pane fade">
      <h3>Actividades</h3>
    
      <p>
  
       <?php echo $subActividades["actividades"]; ?>

      </p>
    
    </div>
    
    <div id="cargaydescarga" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  
  </div>
</div>
