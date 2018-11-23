<?php

  require_once "conexion.php";

  class ModeloActividades
  {

    /*=============================================>>>>>
    = LISTAR ACTIVIDADES =
    ===============================================>>>>>*/
    static public function mdlMostrarActividades($tabla, $item, $value){

      if ($item != null) {

      $stmt = Conexion::conectar()->prepare("SELECT *  FROM $tabla WHERE $item = :$item");

      $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

      $stmt -> execute();

      return $stmt -> fetch();

    } else {

        $stmt = Conexion::conectar()->prepare("SELECT *  FROM $tabla");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt -> close();

        $stmt = null;

      }

    }


    /*=============================================>>>>>
    = MOSTRAR PORTAFOLIO ACTIVIDADES =
    ===============================================>>>>>*/
    static public function mdlPortafolioActividades($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY rand() LIMIT 3");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }

    /*=============================================>>>>>
    = MOSTRAR MENSAJES  =
    ===============================================>>>>>*/
    static public function mdlMostrarMensajes($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY rand() LIMIT 3");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }


  }
