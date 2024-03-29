
<!--/*=============================================>>>>>
=BREADCRUMB ACTIVIDADES =
===============================================>>>>>*/-->
<div class="container-fluid well well-sm">

  <div class="container">

    <div class="row">

      <ul class="breadcrumb lead fondoBreadcrumb text-uppercase">

           <li>
             <a href="<?php echo $url;?>">INICIO</a>
           </li>
           <li class="active pagActiva"> <?php echo $rutas[0];?></li>

      </ul>

    </div>

  </div>

</div>



<div class="container actividades" style="margin-bottom: 80px;">

  <?php 

    # =========================
    # = MOSTRAR SUB-ACTIVIDADES 
    # =========================  
    $item = "ruta";

    $valor = $rutas[0];

    $subActividades = ControladorActividades::ctrMostrarSubActividades($item, $valor);;
    
    # ========================
    # = ACTIVIDAD REALIZADA =
    # ========================
    $item1 = "id_alumno";

    $valor1 = $_SESSION["id"];

    $item2 = "id_actividad";

    $valor2 = $subActividades[0]["id"];

    $ordenar = "id";

    $modo = "DESC";

    $base = 0;

    $tope = 1;

    //ENVIANDO SOLO POR ALUMNO Y CATEGORIA
    $actividadesRealizadas = ControladorActividades::ctrMostrarSubActividadesRealizadasby2params($item1, $valor1, $item2, $valor2);
  
  ?>

  <h3><?php echo $subActividades[0]["nombre"]; ?></h3>
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#objetivo">Objetivo</a></li>
    <li><a data-toggle="tab" href="#imagen">Imagen</a></li>
    <li><a data-toggle="tab" href="#actividades">Actividad</a></li>

    <?php if (!$actividadesRealizadas): ?>

    <li><a data-toggle="tab" href="#cargaydescarga">Carga y Descarga de Archivos</a></li>
      
    <?php endif ?>

  </ul>

  <div class="tab-content">
   
    <div id="objetivo" class="tab-pane fade in active">
         
      <h3>Objetivo</h3>

        <blockquote class="text-justify">

         <?php echo $subActividades[0]["objetivo"];?>
        
        </blockquote>
   
    </div>

    <div id="imagen" class="tab-pane fade">
    
      <h3>Imagen</h3>

      <div class="row">
        
        <div class="col-xs-12 col-sm-4">
          
          <img src="<?php echo $servidor.$subActividades[0]["imagen"];?>" class="img-thumbnail" width="100%" alt="">

        </div>

         <div class="col-xs-12 col-sm-8" style="margin-top: 0px">

            <h1><?php echo $subActividades[0]["nombre"] ?></h1>
            
            <blockquote class="text-justify">

              <?php echo $subActividades[0]["textoAyuda"]?>
        
            </blockquote>

        </div>

      </div>
      
      <br>

      <br>
    
    </div>
    
    <div id="actividades" class="tab-pane fade">
     
      <h3>Actividades</h3>
    
      <blockquote class="text-justify">
  
       <?php echo $subActividades[0]["actividades"]; ?>

      </blockquote>
    
    </div>

   <?php if (!$actividadesRealizadas): ?>
      
    <div id="cargaydescarga" class="tab-pane fade">

      <h3 class="text-muted">Zona de Descarga</h3>
        
       <div class="row">
         
          <div class="col-xs-12 col-sm-4">

             <div class="form-group">


              <div class="panel text-uppercase">Descargar Archivo</div>

              
               <a target="_blanck" href="<?php echo $servidor.$subActividades[0]["ruta_archivo"];?>">
                
                <button class="btn btn-default backColor">Descargar</button>

              </a>
              
              <p class="help-block"><?php echo $subActividades[0]["nombre"];?></p>
  
            </div>

          </div>

          <div class="col-xs-12 col-sm-4">

            <form method="POST" enctype="multipart/form-data">
              
              <div class="form-group">

                <div class="panel text-uppercase">Subir Archivo</div>

                <input type="file" class="nuevoPDF" name="nuevoPDF">
                
                <p class="help-block">Peso máximo del archivo 2MB</p>

                <input type="hidden" name="numeroControl" value="<?php echo $_SESSION["numeroControl"];?>">

                <input type="hidden" name="idAlumno" value="<?php echo $_SESSION["id"]; ?>">

                <input type="hidden" name="nombreArchivo"  value="<?php echo $rutas[0]?>">

                <input type="hidden" name="idActividad" value="<?php echo $subActividades[0]["id"]?>">

                <button type="submit" id="btnCargarActividad" class="btn btn-default backColor hidden"> Cargar </button>

                </div> 

              </div>

              <?php 

                $cargarActividad = new ControladorActividades();

                $cargarActividad -> ctrCargarActividad();

               ?>

            </form>

          </div>

       </div>

    </div>

    <?php endif ?>
    

  </div>

</div>
