<?php
class ControladorActividades
{

  # ================================
  # =MOSTRAR UNA ACTIVIDAD REALIZADA 
  # ================================
  static public function ctrActividadRealizadaPorAlumno($item1, $valor1, $item2, $valor2){

    $tabla = "actividades_alumnos";

    $respuesta = ModeloActividades::mdlActividadRealizadaPorAlumno($tabla, $item1, $valor1, $item2, $valor2);

    return $respuesta;
  }

  # =====================================
  # =MOSTRAR TODAS ACTIVIDADES REALIZADAS
  # =====================================
  static public function ctrActividadesRealizadasPorAlumno($item, $valor, $limite){

    $tabla = "actividades_alumnos";

    $respuesta = ModeloActividades::mdlActividadesRealizadasPorAlumno($tabla, $item, $valor, $limite);

    return $respuesta;
  }

  # ==============================================
  # =MOSTRAR SUB-ACTIVIDADES POR GRUPO Y CATEGORIA
  # ==============================================
  static public function ctrMostrarSubActividadesbyGrupo($item1, $valor1, $item2, $valor2){

    $tabla = "sub_actividades";

    $respuesta = ModeloActividades::mdlMostrarSubActividadesbyGrupo($tabla, $item1, $valor1, $item2, $valor2);

    return $respuesta;

  }

  # =====================================
  # =MOSTRAR ACTIVIDADES           =
  # =====================================
  static public function ctrMostrarActividades($item, $value){

    $tabla = "actividades";

    $respuesta = ModeloActividades::mdlMostrarActividades($tabla, $item, $value);

    return $respuesta;

  }


  # ===================================
  # =MOSTRAR 1 SUB-ACTIVIDAD
  # ===================================
  static public function ctrMostrarSubActividades($item, $valor){

    $tabla = "sub_actividades";

    $respuesta = ModeloActividades::mdlMostrarSubActividades($tabla, $item, $valor);

    return $respuesta;

  }

  # ===================================
  # =MOSTRAR TODAS LAS SUB-ACTIVIDADES
  # ===================================
  static public function ctrMostrarTodasSubActividades($item, $valor){

    $tabla = "sub_actividades";

    $respuesta = ModeloActividades::mdlMostrarTodasSubActividades($tabla, $item, $valor);

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
