<?php
/*=============================================>>>>>
= MOSTRAR LAS CATEGORIAS DE ACTIVIDADES =
===============================================>>>>>*/
class ControladorActividades
{

  # =====================================
  # =MOSTRAR SUB-ACTIVIDADES           =
  # =====================================
  public function ctrMostrarSubActividades($item, $valor){

    $tabla = "sub_actividades";

    $respuesta = ModeloActividades::mdlMostrarSubActividades($tabla, $item, $valor);

    return $respuesta;

  }


  # =====================================
  # = LISTAR SUB-ACTIVIDADES           =
  # =====================================
  public function ctrListarSubActividades($item, $valor){

    $tabla = "sub_actividades";

    $respuesta = ModeloActividades::mdlListarSubActividades($tabla, $item, $valor);

    return $respuesta;

  }



  # =====================================
  # =MOSTRAR ACTIVIDADES           =
  # =====================================
  public function ctrMostrarActividades($item, $value){

    $tabla = "actividades";

    $respuesta = ModeloActividades::mdlMostrarActividades($tabla, $item, $value);

    return $respuesta;

  }

  public function ctrPortafolioActividades(){

    $tabla = "portafolio";

    $respuesta = ModeloActividades::mdlPortafolioActividades($tabla);

    return $respuesta;

  }

  public function ctrMostrarMensajes(){

    $tabla = "mensajes";

    $respuesta = ModeloActividades::mdlMostrarMensajes($tabla);

    return $respuesta;

  }

  static public function ctrActividadesPendientes($item1, $value1, $item2, $value2){

    $tabla = "actividadesPendientes";

    $respuesta = ModeloActividades::mdlMostrarActividadesPendientes($tabla, $item1, $value1, $item2, $value2);

    return $respuesta;

  }

  public function ctrAcercaDe(){

    $tabla = "acercade";

    $respuesta = ModeloActividades::mdlAcercaDe($tabla);

    return $respuesta;

  }


}
