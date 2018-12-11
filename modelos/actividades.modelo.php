<?php

  require_once "conexion.php";

  class ModeloActividades
  {

    # =========================================================
    # =MOSTRAR CATEGORÍAS DE ACTIVIDADES           =
    # =========================================================
    static public function mdlMostrarSubActividades($tabla, $item, $valor){

      if ($item != null) {
              
          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

          $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

          $stmt -> execute();

          return $stmt -> fetch(); 

        } else {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

          $stmt -> execute();

          return $stmt -> fetchAll(); 

        }

        $stmt -> close();

        $stmt = null;

    }


    # ===================================
    # = LISTAR SUB-ACTIVIDADES         =
    # ===================================
    static public function mdlListarSubActividades($tabla, $item, $valor){
              
          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

          $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

          $stmt -> execute();

          return $stmt -> fetchAll(); 

          $stmt -> close();

          $stmt = null;

    }
      
    
    /*=============================================>>>>>
    = LISTAR ACTIVIDADES =
    ===============================================>>>>>*/
    static public function mdlMostrarActividades($tabla, $item, $valor){

      if ($item != null) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();

      } else {

          $stmt = Conexion::conectar()->prepare("SELECT *  FROM $tabla");

          $stmt -> execute();

          return $stmt -> fetchAll();

        }

         $stmt -> close();

         $stmt = null;
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

    /*=============================================>>>>>
    = MOSTRAR ACTIVIDADES  =
    ===============================================>>>>>*/
    static public function mdlMostrarActividadesPendientes($tabla, $item1, $value1, $item2, $value2){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  WHERE $item1 = :$item1 ORDER BY rand() LIMIT 3");

      $stmt -> bindParam(":".$item1, $value1, PDO::PARAM_STR);

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }


    /*=============================================>>>>>
    = MOSTRAR ACERCA DE  =
    ===============================================>>>>>*/
    static public function mdlAcercaDe($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }



    # ====================================
    # = ACTIVIDADES CREADAS POR ALUMNOS  =
    # ====================================
    static public function mdlActividadesCreadas($tabla, $datos){

      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_alumno, id_actividad, ruta) VALUES (:id_alumno, :id_actividad, :ruta)");

      $stmt -> bindParam(":id_alumno", $datos["id_alumno"], PDO::PARAM_INT);

      $stmt -> bindParam(":id_actividad", $datos["idActividad"], PDO::PARAM_STR);

      $stmt -> bindParam(":ruta", $datos["ruta"], PDO::PARAM_STR);

      if($stmt -> execute()){

        return "ok";

      } else {

        return "error";

      }

      $stmt -> close();

      $stmt = null;

    }


    # ====================================
    # = ACTIVIDADES HECHAS POR ALUMNOS  =
    # ====================================
    static public function mdlMostrarActividadesRealizadas($tabla, $item1, $valor1, $item2, $valor2){

      if ($item1 != null) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item1 = :$item1 AND $item2 = :$item2");

        $stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);

        $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();

      } else {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

          $stmt -> execute();

          return $stmt -> fetchAll();

        }

         $stmt -> close();

         $stmt = null;
    }
  
  
}
