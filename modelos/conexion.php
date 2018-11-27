<?php

class Conexion {

  public function conectar(){

    $link = new PDO("mysql:host=localhost; dbname=u881670891_tuto1",
            "root",
            "",
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );

    return $link;

  }

}
