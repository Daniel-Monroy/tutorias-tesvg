<?php
class ControladorActividades
{


  # =====================================
  # =MOSTRAR ACTIVIDADES           =
  # =====================================
  static public function ctrMostrarActividades($item, $value){

    $tabla = "actividades";

    $respuesta = ModeloActividades::mdlMostrarActividades($tabla, $item, $value);

    return $respuesta;

  }

  # ===================================
  # =MOSTRAR INFO SUB-ACTIVIDADES
  # ===================================
  static public function ctrMostrarInfoSubActividades($item, $valor){

    $tabla = "sub_actividades";

    $respuesta = ModeloActividades::mdlMostrarInfoSubActividades($tabla, $item, $valor);

    return $respuesta;

  }


  # ===================================
  # =MOSTRAR SUB-ACTIVIDADES
  # ===================================
  static public function ctrMostrarSubActividades($item, $valor){

    $tabla = "sub_actividades";

    $respuesta = ModeloActividades::mdlMostrarSubActividades($tabla, $item, $valor);

    return $respuesta;

  }
  
  # ===================================
  # =MOSTRAR SUB-ACTIVIDADES 2 PARAMETROS
  # ===================================
  static public function ctrMostrarSubActividadesby2params($item1, $valor1, $item2, $valor2){

    $tabla = "sub_actividades";

    $respuesta = ModeloActividades::mdlMostrarSubActividadesby2params($tabla, $item1, $valor1, $item2, $valor2);

    return $respuesta;

  }

  # ===================================
  # =MOSTRAR SUB-ACTIVIDADES REALIZADAS CON DOS PARAMETROS
  # ===================================
  static public function ctrMostrarSubActividadesRealizadasby2params($item1, $valor1, $item2, $valor2){

    $tabla = "actividades_alumnos";

    $respuesta = ModeloActividades::mdlMostrarSubActividadesRealizadasby2params($tabla, $item1, $valor1, $item2, $valor2);

    return $respuesta;

  }


  # ===================================
  # =MOSTRAR SUB-ACTIVIDADES REALIZADAS 
  # ===================================
  static public function ctrMostrarSubActividadesRealizadas($item, $valor, $ordenar, $modo, $base, $tope){

    $tabla = "actividades_alumnos";

    $respuesta = ModeloActividades::mdlMostrarSubActividadesRealizadas($tabla, $item, $valor, $ordenar, $modo, $base, $tope);

    return $respuesta;

  }

  # ===================================
  # =MOSTRAR REVISIÖN DE ACTIVIDAD 
  # ===================================
  static public function ctrMostrarRevisionActividad($item, $valor){

    $tabla = "comentarios_actividad";

    $respuesta = ModeloActividades::mdlMostrarRevisionActividad($tabla, $item, $valor);

    return $respuesta;

  }


  # ===============================
  # = LISTAR ACTIVIDADES REALIZADAS
  # ===============================
  static public function ctrListarSubActividadesRealizadas($item, $valor, $ordenar){

    $tabla = "actividades_alumnos";

    $respuesta = ModeloActividades::mdlListarSubActividadesRealizadas($tabla, $item, $valor, $ordenar);

    return $respuesta;

  }

  # ===================================
  # =CARGAR ACTIVIDAD
  # ===================================
  static public function ctrCargarActividad(){

    if (isset($_FILES["nuevoPDF"])) {
      
      $directorio = "vistas/actividades/alumnos/".$_POST["numeroControl"];

      mkdir($directorio, 0755);

      $documento = $directorio.'/'.$_POST["nombreArchivo"].'.pdf';
  
      if (move_uploaded_file($_FILES['nuevoPDF']['tmp_name'], $documento)) {

          $tabla = "actividades_alumnos";

          $datos = array('id_alumno' => $_POST["idAlumno"], 'idActividad' => $_POST["idActividad"], 'ruta' => $documento);

          $respuesta = ModeloActividades::mdlActividadesCreadas($tabla, $datos);

          if ($respuesta == "ok") {

              #COMENTARIO SOBRE LAS ACTIVIDADES
              $tabla1 = "comentarios_actividad";

              $datos1 = array(
                'id_alumno' => $_POST["idAlumno"], 
                'id_tutor' => $_SESSION["id_tutor"], 
                'id_subactividad' => $_POST["idActividad"],
                'estadoActividad' => 0,
                'mensaje' => "",
                'estadoAlumno' => 0
              );

              $comentarioActividad = ModeloActividades::mdlComentarioActividad($tabla1, $datos1);
          
              if ($comentarioActividad == "ok") {
                   echo ' 
                   <script>
                       swal({
                          title: "¡Bien echo!",
                          text: "¡Tu actividad ha sido almacenada con éxito, en breve notificaremos a tu Tutor!",
                          type: "success",
                          confirmButtonText: "Cerrar",
                          closeOnConfirm: false
                      },function(isConfirm){
                           if (isConfirm) {
                              window.location = "'.$_POST["ruta"].'";
                            }
                      });
                    </script>
                 ';
              }
          
          }
      
      } else {
        echo ' 
         
         <script>
         
           swal({
              title: "¡Error!",
              text: "¡Intenta una vez más!",
              type: "error",
              confirmButtonText: "Cerrar",
              closeOnConfirm: false
          },function(isConfirm){
               if (isConfirm) {
                  window.location = "'.$_POST["ruta"].'";
                }
          });
         
          </script>
         
         ';

      }

    }

  }






















  # =================
  # = PORTAFOLIO 
  # =================
  static public function ctrPortafolioActividades(){

    $tabla = "portafolio";

    $respuesta = ModeloActividades::mdlPortafolioActividades($tabla);

    return $respuesta;

  }

  # =================
  # = MENSAJES 
  # =================
  static public function ctrMostrarMensajes(){

    $tabla = "mensajes";

    $respuesta = ModeloActividades::mdlMostrarMensajes($tabla);

    return $respuesta;

  }

  # =================
  # = ACERCA DE 
  # =================
  static public function ctrAcercaDe(){

    $tabla = "acercade";

    $respuesta = ModeloActividades::mdlAcercaDe($tabla);

    return $respuesta;

  }

}
