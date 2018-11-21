<?php

/*=============================================>>>>>
= CONTROLADORES =
===============================================>>>>>*/
require_once "controladores/plantilla.controlador.php";

/*=============================================>>>>>
= MODELOS =
===============================================>>>>>*/
require_once "modelos/plantilla.modelo.php";
require_once "modelos/rutas.php";


/*=============================================>>>>>
= EJECUTAMOS LA PLANTILLA =
===============================================>>>>>*/
$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
