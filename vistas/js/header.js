/*=============================================
CABEZOTE
=============================================*/
$("#btnCategorias").click(function(){

  if (window.matchMedia("(max-width:767)").matches) {
    $("#btnCategorias").after(("#categorias").slideToggle("fast"));
  } else {
    $("#cabezote").after($("#categorias").slideToggle("fast"));
  }

});
