<?php 

/**
 * ControladorTutores
 */
class ControladorTutores
{
	
	# =====================
    # = MOSTRAR TUTOR     =
    # =====================
    static public function ctrMostrarTutores($item, $valor){

      $tabla = "usuarios";

      $respuesta = ModeloTutores::mdlMostrarTutores($tabla, $item, $valor);

      return $respuesta;

    }


}