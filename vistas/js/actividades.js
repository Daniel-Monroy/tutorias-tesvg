/*==================================
=            SUBIR PDF            =
==================================*/
$(document).on("change", ".nuevoPDF", function(){

  var archivo = this.files[0];
  /*===========================
  =  VALIDAR FORMATO           =
  ============================*/
  if (archivo["type"] != "application/pdf") {

    $(".nuevoPDF").val("");

    swal({
      title: "Error al subir el archivo",
      text: "Este debe estar en formato PDF!",
      type: "error",
      confirmButtonText: "!Cerrar¡"
    });

   } else {
    
    $("#btnCargarActividad").removeClass("hidden");
   
   }

});
