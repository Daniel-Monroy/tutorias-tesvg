<?php

  /*=============================================>>>>>
  = USUARIOS MODELO =
  ===============================================>>>>>*/
  class ModeloUsuarios
  {

    /*=============================================>>>>>
    = MOSTRAR ALUMNOS =
    ===============================================>>>>>*/
    static public function mdlMostrarAlumnos($tabla, $item, $valor){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

      $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

      if ($stmt -> execute()) {
        return $stmt -> fetch();
      }

      $stmt -> close();

      $stmt = null;

    }

    static public function mdlActualizarUsuario($tabla, $id, $item, $valor){

      $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item = :$item WHERE id = :id");

      $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

      $stmt -> bindParam(":id", $id, PDO::PARAM_STR);

      if ($stmt -> execute()) {
        return "ok";
      } else {
        return "error";
      }

      $stmt -> close();

      $stmt = null;

    }


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
