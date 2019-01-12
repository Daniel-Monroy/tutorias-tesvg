<?php

# ===================
# =CONTROLADORES    =
# ===================
require_once "controladores/plantilla.controlador.php";
require_once "controladores/actividades.controlador.php";
require_once "controladores/usuarios.contolador.php";
require_once "controladores/tutores.controlador.php";
require_once "controladores/grupo.controlador.php";


# ===================
# = MODELOS         =
# ===================
require_once "modelos/rutas.php";
require_once "modelos/plantilla.modelo.php";
require_once "modelos/actividades.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/tutores.modelo.php";
require_once "modelos/grupo.modelo.php";


# ===================
# = LIBRERIAS       =
# ===================
require_once "extenciones/PHPMailer/PHPMailerAutoload.php";



# ===================
# = PLANTILLA       =
# ===================
$plantilla = new ControladorPlantilla();

$plantilla -> plantilla();
