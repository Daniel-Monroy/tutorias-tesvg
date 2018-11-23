<?php

  /*=============================================>>>>>
  = USUARIOS MODELO =
  ===============================================>>>>>*/
  class ModeloUsuarios
  {

    /*=============================================>>>>>
    = MOSTRAR TUTORES =
    ===============================================>>>>>*/
    static public function mdlMostrarTutores($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY rand() LIMIT 3");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }


    /*=============================================>>>>>
    = MOSTRAR TUTORES =
    ===============================================>>>>>*/
    static public function mdlMostrarComunidad($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY rand() LIMIT 3");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }

  }
