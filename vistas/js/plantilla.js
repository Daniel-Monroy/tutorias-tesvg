//Ruta
var rutaLocal = $("#rutaLocal").val();
var rutaServidor = $("#rutaServidor").val();


/*==============
= PLANTILLA    =
================*/
$.ajax({
	url: rutaLocal+"ajax/plantilla.ajax.php",
	success: function(respuesta){
		
		var colorFondo = JSON.parse(respuesta).colorFondo;
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barraSuperior = JSON.parse(respuesta).barraSuperior;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;
		

		$(".backColor, .backColor a").css({"background": colorFondo, "color": colorTexto});
		
		$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior, "color": textoSuperior});
	}
});

/*====================
PAGINACIÓN
====================*/
var url=window.location.href;

var indice=url.split("/");

var pagActual=indice[5];

if(pagActual!="#"){

	if(isNaN(pagActual)){

		$("#item1").addClass("active");}

	else{

		$("#item"+pagActual).addClass("active");

		$("#item"+pagActual+"a").removeAttr("href");}

}