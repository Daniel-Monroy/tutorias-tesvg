<?php

require_once "conexion.php";
/**
 * Modelo Usuarios
 */
class ModeloUsuarios {

    # ===============================
    # = MOSTRAR ALUMNOS
    # ===============================
    static public function mdlMostrarAlumnos($tabla, $item, $valor){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

      $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
      
      $stmt -> execute();

      return $stmt -> fetch();

      $stmt -> close();

      $stmt = null;

    }


    # ===============================
    # = ACTUALIZAR CONTRASEÑA ALUMNO 
    # ===============================
    static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

      $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

      $stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);

      $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

      if ($stmt -> execute()) {
        return "ok";
      } else {
        return "error";
      }

      $stmt -> close();

      $stmt = null;

    }


    # ==============================
    # = ACTUALIZAR DATOS ALUMNO 
    # ==============================
    static public function mdlActualizarDatosUsuario($tabla, $datos, $item, $valor){

      $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre , apellidos = :apellidos, numeroControl = :numeroControl, id_carrera = :id_carrera, id_grupo = :id_grupo, email = :email,  password = :password, foto = :foto, verificacion = :verficacion, modo = :modo, emailEncriptado = :emailEncriptado WHERE $item = :$item");

      $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
      
      $stmt -> bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
      
      $stmt -> bindParam(":numeroControl", $datos["numeroControl"], PDO::PARAM_STR);
      
      $stmt -> bindParam(":id_carrera", $datos["id_carrera"], PDO::PARAM_STR);
      
      $stmt -> bindParam(":id_grupo", $datos["id_grupo"], PDO::PARAM_STR);

      $stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
      
      $stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
      
      $stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

      $stmt -> bindParam(":verficacion", $datos["verficacion"], PDO::PARAM_STR);

      $stmt -> bindParam(":modo", $datos["modo"], PDO::PARAM_STR);

      $stmt -> bindParam(":emailEncriptado", $datos["emailEncriptado"], PDO::PARAM_STR);

      $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

      if ($stmt -> execute()) {

        return "ok";

      } else {
        
        return "error";
      
      }

      $stmt -> close();

      $stmt = null;

    }


    # ==============================
    # = MOSTRAR TUTORES
    # ==============================
    static public function mdlMostrarTutores($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY rand() LIMIT 3");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }


    # ==============================
    # = MOSTRAR COMUNIDAD
    # ==============================/
    static public function mdlMostrarComunidad($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY rand() LIMIT 3");

      $stmt -> execute();

      return $stmt -> fetchAll();

      $stmt -> close();

      $stmt = null;

    }

}
