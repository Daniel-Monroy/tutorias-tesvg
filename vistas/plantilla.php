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

  ?>
  <!--=============================================>>>>>
  = PLUGINS CSS =
  ===============================================>>>>>-->
  <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Theme CSS -->
  <link href="<?php echo $url ?>vistas/css/agency.css" rel="stylesheet">

  <!--=============================================>>>>>
  = PERSONALIZADOS =
  ===============================================>>>>>-->
  <link rel="stylesheet" href="<?php echo $url ?>vistas/css/plantilla.css">

  <link rel="stylesheet" href="<?php echo $url ?>vistas/css/cabezote.css">

  <link rel="stylesheet" href="<?php echo $url ?>vistas/css/presentacion.css">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>
  <?php include "modulos/presentacion.php" ?>
</body>


<!--=============================================>>>>>
= PLUGINS JS =
===============================================>>>>>-->
<script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

<script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>

<script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>

<script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>

<script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>

<script src="<?php echo $url; ?>vistas/js/plugins/sweetalert.min.js"></script>

<script src="<?php echo $url; ?>vistas/js/plugins/jqBootstrapValidation.js"></script>

<script src="<?php echo $url; ?>vistas/js/plugins/agency.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!--=============================================>>>>>
= JS PERSONALES =
===============================================>>>>>-->
<script src="<?php echo $url;?>vistas/js/presentacion.js"></script>

</html>
