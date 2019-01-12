<?php

  require_once "conexion.php";

  class ModeloActividades
  {


    # ======================================
    # = MOSTRAR CATEGORIA DE ACTIVIDADES
    # ======================================
    static public function mdlMostrarActividades($tabla, $item, $valor){

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


    # ==================================
    # = MOSTRAR UNA ACTIVIDAD REALIZADA =
    # ==================================
    static public function mdlActividadRealizadaPorAlumno($tabla, $item1, $valor1, $item2, $valor2){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item1 = :$item1 AND $item2 = :$item2");

        $stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);

        $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();
        
        $stmt -> close();

        $stmt = null;
    }

    # ======================================
    # = MOSTRAR TODAS ACTIVIDADES REALIZADAS
    # ======================================
    static public function mdlActividadesRealizadasPorAlumno($tabla, $item, $valor, $limite){

      if ($item != null) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC LIMIT $limite");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetchAll();

      } else {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla LIMIT $limite");

          $stmt -> execute();

          return $stmt -> fetchAll();

        }

         $stmt -> close();

         $stmt = null;
    }

    # ===================================
    # =MOSTRAR SUB-ACTIVIDADES ALUMNO   =
    # ===================================
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
    # =MOSTRAR SUB-ACTIVIDADES REALIZADAS=
    # ===================================
    static public function mdlMostrarTodasSubActividades($tabla, $item, $valor){

      if ($item != null) {
              
          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

          $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

          $stmt -> execute();

          return $stmt -> fetchAll(); 

        } else {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

          $stmt -> execute();

          return $stmt -> fetchAll(); 

        }

        $stmt -> close();

        $stmt = null;

    }


    # ===================================
    # =MOSTRAR SUB-ACTIVIDADES POR GRUPO=
    # ===================================
    static public function mdlMostrarSubActividadesbyGrupo($tabla, $item1, $valor1, $item2, $valor2){

      if ($item1 != null) {
              
          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item1 = :$item1 AND $item2 = :$item2");

          $stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);

          $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

          $stmt -> execute();

          return $stmt -> fetchAll(); 

        } else {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

          $stmt -> execute();

          return $stmt -> fetchAll(); 

        }

        $stmt -> close();

        $stmt = null;

    }
      

    # ===================================
    # = MOSTRAR PORTAFOLIO ACTIVIDADES  =
    # ===================================
    static public function mdlPortafolioActividades($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY rand() LIMIT 3");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }

    # ===================================
    # = MOSTRAR MENSAJES  =
    # ===================================
    static public function mdlMostrarMensajes($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY rand() LIMIT 3");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }

    # ===================================
    # = MOSTRAR ACERCA DE 
    # ===================================
    static public function mdlAcercaDe($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }



    # ====================================
    # = ACTIVIDADES REALIZADAS POR ALUMNOS
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
  
}
