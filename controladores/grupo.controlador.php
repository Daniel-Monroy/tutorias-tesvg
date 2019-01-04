<?php 

/**
 * ControladorGrupos
 */
class ControladorGrupos
{
	
	# =====================
    # = MOSTRAR GRUPOS    =
    # =====================
    static public function ctrMostrarGrupos($item, $valor){

    	$tabla = "grupos";

    	$respuesta = ModeloGrupos::mdlMostrarGrupos($tabla, $item, $valor);

    	return $respuesta;
    }

    # =====================
    # = MOSTRAR CARRERA   =
    # =====================
    static public function ctrMostrarCarrera($item, $valor){

    	$tabla = "carreras";

    	$respuesta = ModeloGrupos::mdlMostrarCarreras($tabla, $item, $valor);

    	return $respuesta;
    }
	
}