<?php

  require_once "conexion.php";
  /*=============================================>>>>>
  = PLANTILLA CONTROLADOR =
  ===============================================>>>>>*/

  class ModeloPlantilla {

    static public function mdlEstiloPlantilla($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

      $stmt -> execute();

      return $stmt -> fetch();

      $stmt -> close();

      $stmt = null;

    }

  
  }
