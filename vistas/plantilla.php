<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="manifest" href="site.webmanifest">

  <?php

    $servidor = Ruta::ctrRutaServidor();

    $url = Ruta::ctrRuta();

    session_start();

  ?>


  <!--======================
  = PLUGINS CSS           =
  =======================-->  
  <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/flexslider.css">

	<link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/sweetalert.css">

  <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/login-register.css">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

  <!-- Theme CSS -->
  <link href="<?php echo $url ?>vistas/css/agency.css" rel="stylesheet">

  <!--=============================================>>>>>
  = PERSONALIZADOS =
  ===============================================>>>>>-->
  <link rel="stylesheet" href="<?php echo $url?>vistas/css/plantilla.css">
  <link rel="stylesheet" href="<?php echo $url?>vistas/css/cabezote.css">
  <link rel="stylesheet" href="<?php echo $url?>vistas/css/presentacion.css">


  <!--=============================================>>>>>
  = PLUGINS JS =
  ===============================================>>>>>-->
  <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

  <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>

  <!-- Efectos de animación aplicados en el Slide -->
  <script src="<?php echo $url?>vistas/js/plugins/jquery.easing.js"></script>
  
  <!-- Efectos SCROLL UP -->
  <script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>

  <script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>

  <script src="<?php echo $url; ?>vistas/js/plugins/sweetalert.min.js"></script>

  <script src="<?php echo $url; ?>vistas/js/plugins/jqBootstrapValidation.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</head>

<body>
<!--==============================
= INCLUIMOS LAS VISTAS DISPONIBLES
===============================-->  
<?php

if(!$_SESSION) {

  if (isset($_GET["ruta"])) {

    $rutas = array();

    $rutas = explode("/", $_GET["ruta"]);

    if ($rutas[0] == "verificar") {
      
      include "modulos/verificar.php";

    }

  } else {
  
     include "modulos/presentacion.php";
  
  }


} else {

  include "modulos/header.php";

  $rutas = array();

  $ruta = null;

  if (isset($_GET["ruta"])) {

  $rutas = explode("/", $_GET["ruta"]);

    $item = "ruta";

    $value =  $rutas[0];

    # =============================================
    # = URL AMIGABLE DE ACTIVIDADES - CATEGORIAS =
    # =============================================
    $actividadesCategoria = ControladorActividades::ctrMostrarActividades($item, $value);

    $subActividades = ControladorActividades::ctrMostrarInfoSubActividades($item, $value); 

    if ($rutas[0] == $actividadesCategoria["ruta"] || $rutas[0] == $subActividades["ruta"] ) {

      $ruta = $rutas[0];

    }

    # =============================================
    # = URL AMIGABLE DE ACTIVIDADES - SUBCATEGORIAS 
    # =============================================
    if ($ruta != null || $rutas[0] == $actividadesCategoria["ruta"]  || $rutas == $subActividades["ruta"]) {

      include "modulos/descripcion-actividad.php";

    } else if ($rutas[0] == "salir" || $rutas[0] == "perfil" || $rutas[0] == "actividad" || $rutas[0] == "actividades"){

      include "modulos/".$rutas[0].".php";

    } else {

      include "modulos/error404.php";

    }

  } else {

    include "modulos/alumno-inicio.php";

  }

}

include "modulos/footer.php";

?>

<input type="hidden" value="<?php echo $url;?>" id="rutaLocal">
<input type="hidden" value="<?php echo $servidor;?>" id="rutaServidor">

<!--========================
=  JS PERSONALES           =
==========================-->
<script src="<?php echo $url; ?>vistas/js/plugins/agency.js"></script>

<script src="<?php echo $url;?>vistas/js/presentacion.js"></script>

<script src="<?php echo $url;?>vistas/js/plantilla.js"></script>

<script src="<?php echo $url;?>vistas/js/header.js"></script>

<script src="<?php echo $url;?>vistas/js/usuarios.js"></script>

<script src="<?php echo $url;?>vistas/js/actividades.js"></script>



</body>

</html>
