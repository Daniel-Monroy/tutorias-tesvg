<?php

/*=============================================>>>>>
= CONTROLADORES =
===============================================>>>>>*/
require_once "controladores/plantilla.controlador.php";
require_once "controladores/actividades.controlador.php";
/*=============================================>>>>>
= MODELOS =
===============================================>>>>>*/
require_once "modelos/conexion.php";
require_once "modelos/rutas.php";
require_once "modelos/plantilla.modelo.php";
require_once "modelos/actividades.modelo.php";


/*=============================================>>>>>
= EJECUTAMOS LA PLANTILLA =
===============================================>>>>>*/
$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
