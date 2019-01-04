/*=============================================
CABEZOTE
=============================================*/
$(document).on("click", "#btnCategorias", function(){

	if (window.matchMedia("(max-width:767px)").matches) {

		$("#btnCategorias").after($("#categorias").slideToggle("fast"));

	} else {

		$("#cabezote").after($("#categorias").slideToggle("fast"));

	}

})