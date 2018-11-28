<?php

/*=============================================>>>>>
= CONTROLADORES =
===============================================>>>>>*/
require_once "controladores/plantilla.controlador.php";
require_once "controladores/actividades.controlador.php";
require_once "controladores/usuarios.contolador.php";
/*=============================================>>>>>
= MODELOS =
===============================================>>>>>*/
require_once "modelos/conexion.php";
require_once "modelos/rutas.php";
require_once "modelos/plantilla.modelo.php";
require_once "modelos/actividades.modelo.php";
require_once "modelos/usuarios.modelo.php";
/*=============================================>>>>>
= LIBRERIAS =
===============================================>>>>>*/
require_once "extenciones/PHPMailer/PHPMailerAutoload.php";


/*=============================================>>>>>
= EJECUTAMOS LA PLANTILLA =
===============================================>>>>>*/
$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
