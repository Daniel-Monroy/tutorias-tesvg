<?php

  /*=============================================>>>>>
  = USUARIOS CONTROLADOR =
  ===============================================>>>>>*/
  class ControladorUsuarios
  {

    /*=============================================>>>>>
    = MOSTRAR TUTORES =
    ===============================================>>>>>*/
    public function ctrMostrarTutores(){

      $tabla = "tutores";

      $respuesta = ModeloUsuarios::mdlMostrarTutores($tabla);

      return $respuesta;

    }

    /*=============================================>>>>>
    = MOSTRAR COMUNIDAD =
    ===============================================>>>>>*/
    public function ctrMostrarComunidad(){

      $tabla = "informacion";

      $respuesta = ModeloUsuarios::mdlMostrarComunidad($tabla);

      return $respuesta;

    }

  }
