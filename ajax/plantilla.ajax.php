<?php 

require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/plantilla.modelo.php";

/**
 * AjaxPlantilla
 */
class AjaxPlantilla
{

	public function ajaxEstiloPlantilla(){

		$respuesta = ControladorPlantilla::ctrEstiloPlantilla();

		echo json_encode($respuesta);

	}
	
}


$ajaxPlantilla = new AjaxPlantilla();

$ajaxPlantilla -> ajaxEstiloPlantilla();