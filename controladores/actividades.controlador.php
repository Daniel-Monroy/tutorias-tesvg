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


}
