<?php
/*=============================================>>>>>
= MOSTRAR LAS CATEGORIAS DE ACTIVIDADES =
===============================================>>>>>*/
class ControladorActividades
{

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


}
