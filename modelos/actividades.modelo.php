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


    # ===========================
    # =MOSTRAR INFO SUB-ACTIVIDADES  =
    # ===========================
    static public function mdlMostrarInfoSubActividades($tabla, $item, $valor){

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


    # ===========================
    # =MOSTRAR SUB-ACTIVIDADES  =
    # ===========================
    static public function mdlMostrarSubActividades($tabla, $item, $valor){

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


    # ===========================
    # =MOSTRAR SUB-ACTIVIDADES BY PARAMETROS =
    # ===========================
    static public function mdlMostrarSubActividadesby2params($tabla, $item1, $valor1, $item2, $valor2){

      if ($item1 != null) {
              
          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item1 = :$item1 AND $item2 =:$item2");

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


    # ==================================
    # =MOSTRAR MOSTRAR ACTIVIDADES REALIZADAS CON PARAMETROS
    # ==================================
    static public function mdlMostrarSubActividadesRealizadasby2params($tabla, $item1, $valor1, $item2, $valor2){

       if ($item1 != null) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item1 = :$item1 AND $item2 =:$item2");

        $stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);

        $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetchAll();

      } else {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

          $stmt -> execute();

          return $stmt -> fetchAll();

        }

         $stmt -> close();

         $stmt = null;

    }


    # ==================================
    # =MOSTRAR MOSTRAR SUB-ACTIVIDADES 
    # ==================================
    static public function mdlMostrarSubActividadesRealizadas($tabla, $item, $valor, $ordenar, $modo, $base, $tope){

       if ($item != null) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY $ordenar $modo LIMIT $base, $tope");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetchAll();

      } else {

          $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

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

    # ====================================
    # = COMENTARIO PARA LAS ACTIVIDADES 
    # ====================================
    static public function mdlComentarioActividad($tabla, $datos){

      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_subactividad, id_tutor, id_alumno, estadoActividad, mensaje, estadoAlumno) VALUES (:id_subactividad, :id_tutor, :id_alumno, :estadoActividad, :mensaje, :estadoAlumno)");

      $stmt -> bindParam(":id_subactividad", $datos["id_subactividad"], PDO::PARAM_INT);

      $stmt -> bindParam(":id_tutor", $datos["id_tutor"], PDO::PARAM_INT);

      $stmt -> bindParam(":id_alumno", $datos["id_alumno"], PDO::PARAM_INT);

      $stmt -> bindParam(":estadoActividad", $datos["estadoActividad"], PDO::PARAM_INT);

      $stmt -> bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);

      $stmt -> bindParam(":estadoAlumno", $datos["estadoAlumno"], PDO::PARAM_INT);

      if($stmt -> execute()){

        return "ok";

      } else {

        return "error";

      }

      $stmt -> close();

      $stmt = null;

    }
  
}
