<!--/*=============================================>>>>>
=BREADCRUMB PERFIL USUARIO =
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

<div class="container actividades" style="margin-bottom: 100px;">

  <?php 

    $item = "ruta";

    $valor = $rutas[0];

  ?>
  
  <ul class="nav nav-tabs">
  
    <li class="active"><a data-toggle="tab" href="#perfil">Perfil</a></li>
  
  </ul>

  <div class="tab-content">

    <div id="perfil" class="tab-pane fade in active">
    
      <h3>Perfil</h3>

      <form enctype="multipart/form-data" method="POST">

        <div class="row">
          
          <div class="col-xs-12 col-sm-5">

            <?php 

              if (isset($_SESSION["validarSession"]) && $_SESSION["validarSession"] ) {
                
                if ($_SESSION["foto"] != null ) {

                  echo '
                  
                   <img src="'.$url.$_SESSION["foto"].'" class="img-thumbnail previsualizarImagen" width="80%" alt="">

                   ';
                } else {

                  echo'
                  
                  <img src="'.$url.'/vistas/img/alumnos/default/anonymous.png" class="img-thumbnail previsualizarImagen" width="80%" alt="">
                  
                  ';
                } 

              }

             ?>
            
           
            <hr>

            <div class="form-group">

              <div class="panel text-uppercase">Subir Imagen</div>

              <input type="file" class="nuevaFoto" name="editarFoto">
              
              <p class="help-block">Peso máximo de la foto 2MB</p>

              <input type="hidden" name="fotoActual" value="<?php echo $_SESSION["foto"];?>">
  
            </div>

          </div>

           <div class="col-xs-12 col-sm-7">

            <div class="box-body">
              
                
                <!-- Entrada para el ID -->
                <input type="hidden" name="id" value="<?php echo $_SESSION["id"];?>">

                <!-- Entrada para el Nombre -->
                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
                       
                    <input type="text" name="editarNombre" placeholder="Nombre" required class="form-control input-lg" value="<?php echo $_SESSION["nombre"] ?>">   

                  </div>
        
                </div> 

                <!-- Entrada para los Apellidos -->
                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"> <i class="fa fa-user"></i></span>
                       
                    <input type="text" name="editarApellidos" placeholder="Apellidos" required class="form-control 
                    input-lg" value="<?php echo $_SESSION["apellidos"] ?>">   
                 
                  </div>
               
                </div> 
                
                 <!-- Entrada para los Número de Control -->
                <div class="form-group">
                    
                  <div class="input-group">
                    
                    <span class="input-group-addon"> <i class="fa fa-code"></i></span>
                       
                    <input type="text" name="numeroControl" readonly placeholder="Número de Control" required class="form-control input-lg" value="<?php echo $_SESSION["numeroControl"]?>">   
                  </div>

                </div>  
                  

                <?php 

                  $item = "id";

                  $valor = $_SESSION["id_carrera"];

                  $carrera = ControladorGrupos::ctrMostrarCarrera($item, $valor);
        
                 ?>

                 <!-- Entrada para la Carrera -->
                <div class="form-group">
                    
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                       
                    <input type="text" readonly placeholder="Carrera" required class="form-control input-lg" value="<?php echo $carrera["descripcion"]?>">   

                    <input type="hidden" name="editarCarrera" value="<?php echo $carrera["id"]?>">
                  
                  </div>

                </div>  

                <?php 

                  $item = "id";

                  $valor = $_SESSION["id_grupo"];

                  $grupo = ControladorGrupos::ctrMostrarGrupos($item, $valor);
                
                 ?>
      
                <!-- Entrada para los Grupo -->
                <div class="form-group">
                    
                  <div class="input-group">
                    
                    <span class="input-group-addon"> <i class="fa fa-users"></i></span>
                       
                    <input type="text" readonly placeholder="Grupo" required class="form-control input-lg" value="<?php echo $grupo["nombre"]?>">   

                    <input type="hidden" name="editarGrupo" value="<?php echo $grupo["id"]?>">
                  
                  </div>
                  
                </div> 

                  <!-- Entrada para el EMAIL -->
                <div class="form-group">
                    
                  <div class="input-group">
                    
                    <span class="input-group-addon"> <i class="fa fa-envelope"></i></span>
                       
                    <input type="text" name="editarEmail" value="<?php echo $_SESSION["email"]?>" placeholder="Correo Electrónico" required class="form-control input-lg">   
                  </div>
                  
                </div> 

                <!-- Entrada para la Contraseña -->
                <div class="form-group">
                    
                  <div class="input-group">
                    
                    <span class="input-group-addon"> <i class="fa fa-unlock"></i></span>
                       
                    <input type="text" name="editarPassword" placeholder="Contraseña" class="form-control input-lg">  

                    <input type="hidden" name="passwordActual" value="<?php echo $_SESSION["password"]?>"> 
                  </div>
                  
                </div>

                 <!-- Entrada para el Botón -->
                <div class="form-group">
                                      
                    <button type="submit" class="btn btn-lg backColor"> Editar </button>

                </div> 

                 <?php 

                    $editarAlumno = new ControladorUsuarios();

                    $editarAlumno -> ctrEditarAlumno();

                  ?>    

              </div> 

            </div>

          </div>

        </div>

      </form>
    
    </div>
  
  </div>

</div>