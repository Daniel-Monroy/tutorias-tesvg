/*=============================================>>>>>
= VALIDAR INGRESO DE USUARIO =
===============================================>>>>>*/
$("input").focus(function(){
  $(".alert").remove();
});


function validateForm(){

  var email = $("#emailIngreso").val();
  var password = $("#passwordIngreso").val();

  /*=============================================>>>>>
  = VALIDAR EMAIL =
  ===============================================>>>>>*/
  if (email != ""){
    var exprecion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if (!exprecion.test(email)) {
      $("#emailIngreso").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> No se permiten caracteres especiales</div>');
      return false;
    }
  }else {
    $("#emailIngreso").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Debe ingresar un Correo Électronico</div>');
    return false;
  }


  /*=============================================>>>>>
  = VALIDAR PASSWORD =
  ===============================================>>>>>*/
  if (password != ""){
    var exprecion = /^[a-zA-Z0-9]*$/;
    if (!exprecion.test(password)) {
      $("#passwordIngreso").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> No se permiten caracteres especiales</div>');
      return false;
    }
  }
  else {
    $("#passwordIngreso").parent().before('<div class="alert alert-warning"><strong>ATENCIÓN:</strong> Debe ingresar una Contraseña</div>');
    return false;
  }


  return true;

}

/*==================================
=            SUBIR FOTO            =
==================================*/
$(document).on("change", ".nuevaFoto", function(){

  var imagen = this.files[0];
  /*===========================
  =  VALIDAR FORMATO           =
  ============================*/
  if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {

    $(".nuevaFoto").val("");

    swal({
      title: "Error al subir la imagen",
      text: "!La imagen debe estar en formato JPG o PNG!",
      type: "error",
      confirmButtonText: "!Cerrar¡"
    });

  } else if(imagen["size"] > 2000000) {

    $(".nuevaFoto").val("");

    swal({
      title: "Error al subir la imagen",
      text: "!La imagen no debe superar los 2MB en su tamaño!",
      type: "error",
      confirmButtonText: "!Cerrar¡"
    });


  } else {

    var datosImagen = new FileReader;

    datosImagen.readAsDataURL(imagen);

    $(datosImagen).on("load", function(event){

      var rutaImagen = event.target.result;

      $(".previsualizarImagen").attr("src", rutaImagen);

    });

  }
});
