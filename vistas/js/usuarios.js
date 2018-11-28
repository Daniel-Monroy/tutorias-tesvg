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
