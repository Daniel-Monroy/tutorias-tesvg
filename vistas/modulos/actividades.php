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


      <div class="col-sm-6 col-xs-12">
    
        <div class="input-group dropdown">
          
          <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            
            Ordenar Actividades <span class="caret"></span>
            
          </button>

          <ul class="dropdown-menu">
          
            <?php 
            
              echo ' 

                <li>

                  <a href="'.$url.$rutas[0].'/1/recientes">Más reciente</a>

                </li>
                
                <li><a href="'.$url.$rutas[0].'/2/antiguas">Más antiguas</a></li>
              ';

            ?>

          </ul>

        </div>

      </div>

    
      <div class="col-lg-12 text-center">
        
        <h2 class="servicios-heading text-uppercase">PORTAFOLIO</h2>
        
        <h3 class="section-subheading text-muted">Las actividades que has realizado</h3>
      
      </div>
    
    </div>

    <div class="row">

      <?php

      # =================================
      # LLAMADO DE LA PAGINACIÓN        =
      # =================================
      
      if (isset($rutas[1])) {
          
        #BASE Y LIMITE PARA MOSTRAR PRODUCTOS
        $base = ($rutas[1] - 1) * 6;

        $tope = "6";

        if (isset($rutas[2])) {
          
          if ($rutas[2] == "antiguas") {
            
            $modo = "ASC";

            $_SESSION["ordenar"] = $modo;

          } else {

            $modo = "DESC";

            $_SESSION["ordenar"] = $modo;
          }
          
        } else {

          if (isset($_SESSION["ordenar"])) {
            
            $modo = $_SESSION["ordenar"];
          
          } else {

            $modo = "DESC";
          }
        
        }

      } else {

        $base = 0;

        $tope = "6";

        $rutas[1] = 1;

        $modo = "DESC";
          
      }

      # ========================
      # = ACTIVIDADES REALIZADAS
      # ========================
      $item = "id_alumno";

      $valor = $_SESSION["id"];

      $ordenar = "id";

      //ENVIANDO SOLO POR ALUMNO Y CATEGORIA
      $actividadesRealizadas = ControladorActividades::ctrMostrarSubActividadesRealizadas($item, $valor, $ordenar, $modo, $base, $tope);

      $listarActividades = ControladorActividades::ctrListarSubActividadesRealizadas($item, $valor, $ordenar);
     
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

      ?>

    </div>

  </div>


  <div class="clearfix"></div>


  <!--===================
  = PAGINACIÓN           =
  =====================-->
  <center>

    <?php 

      if (count($listarActividades) != 0) {
          
        #PARA LA DIVICIÓN Y MOSTRAR LAS PÁGINAS 
        $totalPaginas = ceil(count($listarActividades) / 6);
        
        if ($totalPaginas > 4) {

          #CUANDO EXISTEN MAS DE 4 PÁGINAS DE PRODUCTOS
          echo '<ul class="pagination">';


          # ===================================================
          # = LLAMADA DE LOS BÓTONES DE LAS PRIMERAS 4 PÁGINAS=
          # ===================================================
          if ($rutas[1] == 1) {
            
            for ($i = 1; $i<=4 ; $i++) {
        
              echo ' 
                
                <li id="item'.$i.'"><a href="'.$url.$rutas[0]."/".$i.'">'.$i.'</a></li>
              
              ';

            }

            echo '
              <li class="disabled"><a>...</a></li>
              <li><a href="'.$url.$rutas[0]."/".$totalPaginas.'">'.$totalPaginas.'</a></li>
                <li><a href="'.$url.$rutas[0].'/2"><i class="fa fa-angle-right"></i></a></li>
            ';

          } else 
           

          # ======================================================
          # = LLAMADA DE LOS BÓTONES DE LA PRIMER MITAD DE PÁGINAS
          # ======================================================
          if ($rutas[1] != $totalPaginas && 
            $rutas[1] != 1 && 
            $rutas[1] < ($totalPaginas/2) && 
            $rutas[1] < ($totalPaginas - 3)) {
            
            $numeroPagina = $rutas[1];

            echo ' 
              <li><a href="'.$url.$rutas[0].'/'.($numeroPagina - 1).'"><i class="fa fa-angle-left"></i></a></li>
            ';

            for ($i = $numeroPagina; $i<=($numeroPagina + 3) ; $i++) {
        
              echo ' 
                
                <li id="item'.$i.'"><a href="'.$url.$rutas[0]."/".$i.'">'.$i.'</a></li>
              
              ';

            }

            echo '
              <li class="disabled"><a>...</a></li>
              <li id="item'.$i.'"><a href="'.$url.$rutas[0]."/".$totalPaginas.'">'.$totalPaginas.'</a></li>
                <li><a href="'.$url.$rutas[0].'/'.($numeroPagina + 1).'"><i class="fa fa-angle-right"></i></a></li>
            ';


          } else 


          # ======================================================
          # = LLAMADA DE LOS BÓTONES DE LA SEGUNDA MITAD DE PÁGINAS
          # ======================================================
          if ($rutas[1] != $totalPaginas && 
            $rutas[1] != 1 && 
            $rutas[1] >= ($totalPaginas/2) && 
            $rutas[1] < ($totalPaginas - 3)) {

            $numeroPagina = $rutas[1];

            echo ' 
              <li><a href="'.$url.$rutas[0].'/'.($numeroPagina - 1).'"><i class="fa fa-angle-left"></i></a></li>
              <li id="item1"><a href="'.$url.$rutas[0].'/1">1</a></li>
              <li class="disabled"><a>...</a></li>
            ';

            for ($i = $numeroPagina; $i<=($numeroPagina + 3) ; $i++) {

              echo ' 
                
                <li id="item'.$i.'"><a href="'.$url.$rutas[0]."/".$i.'">'.$i.'</a></li>
              
              ';
            }

            echo '
                <li><a href="'.$url.$rutas[0].'/'.($numeroPagina + 1).'"><i class="fa fa-angle-right"></i></a></li>
            ';


          }

          # ===================================================
          # = LLAMADA DE LOS BÓTONES DE LAS UTLIMAS 4 PÁGINAS=
          # ===================================================
          else {

            $numeroPagina = $rutas[1];

            echo ' 
              <li><a href="'.$url.$rutas[0].'/'.($numeroPagina - 1).'"><i class="fa fa-angle-left"></i></a></li>
              <li item="1"><a href="'.$url.$rutas[0].'/1">1</a></li>
              <li class="disabled"><a>...</a></li>
            ';
            
            for ($i = ($totalPaginas - 3); $i<= $totalPaginas ; $i++) {
        
              echo ' 
                
                <li id="item'.$i.'"><a href="'.$url.$rutas[0]."/".$i.'">'.$i.'</a></li>
              
              ';

            }

          }
            

          echo '</ul>';
            
        } 

        # ===============================================
        # = SI SOLAMENTE EXISTEN 4 PÁGINAS DE PRODUCTOS
        # ===============================================
        else { 

          echo ' 
            <ul class="pagination">
          ';

          for ($i = 1; $i <= $totalPaginas; $i++) {
            
            echo ' 
               <li id="item'.$i.'"><a href="'.$url.$rutas[0]."/".$i.'">'.$i.'</a></li>
            ';

          }

          echo '</ul>';

        } 
       
       }

     ?>

  </center>

</section>


