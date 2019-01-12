<?php

/**
 * ControladorUsuarios
 */
class ControladorUsuarios
{
    # =====================
    # = MOSTRAR ALUMNO   =
    # =====================
    static public function ctrMostrarUsuario($item, $valor){

      $tabla = "alumnos";

      $respuesta = ModeloUsuarios::mdlMostrarAlumnos($tabla, $item, $valor);

      return $respuesta;

    }


    # =====================
    # = EDITAR ALUMNO  =
    # =====================
    public function ctrEditarAlumno(){

      if (isset($_POST["editarNombre"])) {
        
        if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"]) && 
            preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellidos"]) && 
            preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/', $_POST["editarEmail"]) &&
            preg_match('/^[a-zA-Z0-9]*$/', $_POST['editarPassword'])) {
        
            $ruta = $_POST["fotoActual"];
            # =======================
            # = VALIDAR IMAGEN      =
            # =======================
            if (isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"])) {
              
              list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);

              $nuevoAncho = 500;

              $nuevoAlto = 500;
              # =======================
              # = Crear Directorio para guardar la IMG      =
              # =======================
              $directorio = "vistas/img/alumnos/".$_POST["numeroControl"];

              # ===============================================================
              # = PRIMERO PREGUNTAMOS SI EXISTE UNA IMAGEN EN LA BASE DE DATOS=
              # ===============================================================
              if (!empty($_POST["fotoActual"])) {
                
                unlink($_POST["fotoActual"]);
              
              } else {

                mkdir($directorio, 0755);
            
              }
      
              # ======================================================================================
              # = DE ACUERDO EL TIPO DE ARCHIVO USAMOS EL MÉTODO CORRESPONDIENTE           =
              # ======================================================================================
              if ($_FILES["editarFoto"]["type"] == "image/jpeg") {
              
                # =======================
                # = Guardo la imagen en el directorio=
                # =======================

                $aleatorio = mt_rand(100,999);

                $ruta = "vistas/img/alumnos/".$_POST["numeroControl"]."/".$aleatorio.".jpg";

                $origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);

                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                // imagecopyresized("imagen de destino", "origen", "0", "0", "0", "0", "$nuevoAncho", "$nuevoAlto", "$alto", "$ancho");

                imagejpeg($destino, $ruta);

              } 

              if ($_FILES["editarFoto"]["type"] == "image/png") {
              
                # =======================
                # = Guardo la imagen en el directorio      =
                # =======================
                $aleatorio = mt_rand(100,999);

                $ruta = "vistas/img/alumnos/".$_POST["numeroControl"]."/".$aleatorio.".png";

                $origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);

                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                // imagecopyresized("imagen de destino", "origen", "0", "0", "0", "0", "$nuevoAncho", "$nuevoAlto", "$alto", "$ancho");

                imagepng($destino, $ruta);

              }

            } 

            $tabla = "alumnos";

            $item = "numeroControl";

            $valor = $_POST["numeroControl"];

            if ($_POST["editarPassword"] != "") {
              
              if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])) {
              
                $encriptar = crypt($_POST["editarPassword"], '$2a$07$asxy54ahjppf45sd87a5a4dDDGsystemdev$');

              } else {

                echo ' 
                <script> 
                  swal({
                    type: "error",
                    title: "!Error!",
                    text: "No se permiten caracteres especiales", 
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeConfirmButton: false
                  }).then((result)=>{
                    if(result.value){
                      window.location = "usuarios";
                    }
                  });
                </script>
                ';
              
              } 

            } else {

              $encriptar = $_POST["passwordActual"];
            
            } 

            $datos = array(
                   'id' => $_POST["id"], 
                   'nombre' => $_POST["editarNombre"], 
                   'apellidos' => $_POST["editarApellidos"], 
                   'numeroControl' => $_POST["numeroControl"], 
                   'id_tutor' => $_POST["editarTutor"], 
                   'id_carrera' => $_POST["editarCarrera"], 
                   'id_grupo' => $_POST["editarGrupo"],  
                   'email' => $_POST["editarEmail"], 
                   'password' => $encriptar, 
                   'foto' => $ruta,
                   'modo' => "directo",
                   'emailEncriptado' => "",
                   'verificacion' => 0
                );

            $respuesta = ModeloUsuarios::mdlActualizarDatosUsuario($tabla, $datos, $item, $valor);

            if ($respuesta == "ok") {

              $_SESSION["validarSession"] = "ok";
              $_SESSION["id"] = $datos["id"];
              $_SESSION["nombre"] = $datos["nombre"];
              $_SESSION["apellidos"] = $datos["apellidos"];
              $_SESSION["id_tutor"] = $datos["id_tutor"];
              $_SESSION["numeroControl"] = $datos["numeroControl"];
              $_SESSION["id_carrera"] = $datos["id_carrera"];
              $_SESSION["id_grupo"] = $datos["id_grupo"];
              $_SESSION["email"] = $datos["email"];
              $_SESSION["password"] = $datos["password"];
              $_SESSION["foto"] = $datos["foto"];
              $_SESSION["modo"] = "directo";

                echo'<script>
                  swal({
                      title: "¡LISTO!",
                      text: "¡Tus datos han sido actualizados!",
                      type: "success",
                      confirmButtonText: "Cerrar",
                      closeOnConfirm: false
                  },

                  function(isConfirm){
                       if (isConfirm) {
                         window.location = "perfil";
                        }
                  });

                  </script>';
            }

          }  else {
           
            echo ' 
            <script> 
              swal({
                type: "error",
                title: "!Error!",
                text: "Todos los campos son obligatorios y No se permiten caracteres especiales",  
                showConfirmButton: true,
                confirmButtonText: "Cerrar",
                closeConfirmButton: false
              }).then((result)=>{
                if(result.value){
                  window.location = "perfil";
                }
              });
            </script>
            ';
        
        }

      }

    }


    # =====================
    # = ACTUALIZAR USUARIO=
    # =====================
    static public function ctrActualizarUsuario($item1, $valor1, $item2, $valor2){

        $tabla = "alumnos";

        $respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

        return $respuesta;

    }

 
    # =====================
    # = LOGIN =
    # =====================
    static public function ctrLoginUsuario(){

      if (isset($_POST["emailIngreso"])) {

        if (preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/', $_POST["emailIngreso"]) &&
            preg_match('/^[a-zA-Z0-9]*$/', $_POST['passwordIngreso'])) {

              $encriptar = crypt($_POST["passwordIngreso"], '$2a$07$asxy54ahjppf45sd87a5a4dDDGsystemdev$');

              $tabla = "alumnos";

              $item = "email";

              $valor = $_POST["emailIngreso"];

              $respuesta = ModeloUsuarios::mdlMostrarAlumnos($tabla, $item, $valor);

              if ($respuesta["email"] == $_POST["emailIngreso"] && $respuesta["password"] == $encriptar) {

                if ($respuesta["verificacion"] == 1) {
                
                  echo'<script>
                      swal({
                          title: "¡No has verificado tu EMAIL!",
                          text: "¡Por favor revisa la bandeja de entrada o la carpeta SPAN de tu correo electrónico!",
                          type: "error",
                          confirmButtonText: "Cerrar",
                          closeOnConfirm: false
                      },function(isConfirm){
                           if (isConfirm) {
                              history.back();
                            }
                      });
                      </script>';
                
                } else if ($respuesta["activo"] != 1){

                    echo'<script>
                      swal({
                          title: "¡INFORMA A TU TUTOR!",
                          text: "¡Te ha sido bloqueado el acceso al sistema!",
                          type: "error",
                          confirmButtonText: "Cerrar",
                          closeOnConfirm: false
                      },function(isConfirm){
                           if (isConfirm) {
                              history.back();
                            }
                      });
                      </script>';

                }  else {
                    
                    $_SESSION["validarSession"] = "ok";
                    $_SESSION["id"] = $respuesta["id"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["apellidos"] = $respuesta["apellidos"];
                    $_SESSION["id_tutor"] = $respuesta["id_tutor"];
                    $_SESSION["numeroControl"] = $respuesta["numeroControl"];
                    $_SESSION["id_carrera"] = $respuesta["id_carrera"];
                    $_SESSION["id_grupo"] = $respuesta["id_grupo"];
                    $_SESSION["email"] = $respuesta["email"];
                    $_SESSION["password"] = $respuesta["password"];
                    $_SESSION["foto"] = $respuesta["foto"];
                    $_SESSION["modo"] = $respuesta["modo"];

                    date_default_timezone_set('America/Mexico_City');
                    
                    $fecha = date('Y-m-d'); 

                    $hora = date('H:i:s');

                    $fechaActual = $fecha.' '.$hora;

                    $item1 = "ultimo_login";

                    $valor1 = $fechaActual;

                    $item2 = "id";

                    $valor2 = $respuesta["id"];

                    $ultimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

                    if ($ultimoLogin == "ok") {
                     
                      echo '

                        <script> window.location = "'.$url.'"; </script>;
                      
                      ';
                    }

                  }

              } else {

                echo'<script>
                    swal({
                        title: "¡ERROR AL INGRESAR AL SISTEMA!",
                        text: "¡Por favor verifica tus datos!",
                        type: "error",
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    },function(isConfirm){
                         if (isConfirm) {
                            history.back();
                          }
                    });
                    </script>';
              }


        } else {
          echo'<script>
              swal({
                  title: "¡ERROR AL INGRESAR AL SISTEMA!",
                  text: "¡No se permiten caracteres especiales!",
                  type: "error",
                  confirmButtonText: "Cerrar",
                  closeOnConfirm: false
              },function(isConfirm){
                   if (isConfirm) {
                      history.back();
                    }
              });
              </script>';
        }

      }

    }

    # ======================
    # = OLVIDO DE CONTRASEÑA
    # ======================
    static public function ctrOlvidoPassword(){

      if (isset($_POST["emailOlvido"])) {

        if (preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/', $_POST["emailOlvido"])) {

          function generarPassword($longitud){

            $key = "";

            $pattern = "1234567890abcdefghijklmnopqrstvwxyz";

            $max = strlen($pattern) - 1;

            for ($i=0; $i<=$longitud; $i++) {

              $key .= $pattern{mt_rand(0, $max)};

            }

            return $key;
          }

          $nuevaPassword = generarPassword(11);

          $encriptar = crypt($nuevaPassword, '$2a$07$asxy54ahjppf45sd87a5a4dDDGsystemdev$');

          $tabla = "alumnos";

          $item1 = "email";

          $valor1 = $_POST["emailOlvido"];

          $respuesta1 = ModeloUsuarios::mdlMostrarAlumnos($tabla, $item1, $valor1);

          if ($respuesta1) {

            $item1 = "password";

            $valor1 = $encriptar;

            $item2 = "id";

            $valor2 = $respuesta1["id"];

            $respuesta2 = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

            if ($respuesta2 == "ok") {

              /*=============================================>>>>>
              = REENVIO DE CONTRASEÑA =
              ===============================================>>>>>*/
              date_default_timezone_set("America/Mexico_City");

              $url = Ruta::ctrRuta();

              $servidor = Ruta::ctrRutaServidor();

              $mail = new PHPMailer;

              $mail->CharSet = 'UTF-8';

              $mail -> isMail();

              $mail -> setFrom('chamoysteam@gmai.com', 'Tutorias TESVG');

              $mail -> addReplyTo('chamoysteam@gmai.com', 'Tutorias TESVG');

              $mail -> Subjet = "Tutorias TESVG,  Nueva contraseña de la Plataforma Tutorias TESVG";

              $mail -> addAddress($_POST["emailOlvido"]);

              $mail -> msgHTML('

              <div style="background:#eee; position: relative; font-family: sans-serif; padding-bottom: 40px;">
                <center>
                  <img style="padding:20px; width:10%;" src="http://chamoysteam.xyz/tutorias-admin/vistas/img/plantilla/logoTutorias.png" alt="">
                </center>

                <div style="position:relative; margin:auto; width:600px; background:white; padding:20px;">
                  <center>
                    <img style="padding: 20px; width:15%;" src="http://chamoysteam.xyz/tutorias-admin/vistas/img/plantilla/icon-pass.png" alt="">
                    <h3 style="font-weight:100; color:#999">SOLICITUD DE NUEVA CONTRASEÑA</h3>
                    <hr style="border:1px solid #ccc; width:80%">

                    <h4 style="font-weight:100; color:#999; padding:0 20px;"> <strong>Nueva Contraseña en TUTORIAS TESVG</strong> '.$nuevaPassword.' </h4>

                    <a href="'.$url.'" target="_blank" style="text-decoration:none">
                    <div style="line-height:60px; background:#fe4918; width:60%; color:white">Ingrese a Tutorias TESVG</div>
                    </a>

                    <br>
                    <hr style="border:1px solid #ccc; width:80%">
                    <h5 style="font-weight:100; color:#999;">Si no es dueño de esta cuenta en TUTORIAS TESVG puede ignorar este correo y la cuenta se eliminara</h5>

                  </center>

                </div>

               </div>

              ');

              $envio = $mail -> Send();

              // $mail -> ErrorInfo();

              if (!$envio) {
                echo'<script>
                    swal({
                        title: "¡Error!",
                        text: "¡Ha ocurrido un problema enviando tu nueva contraseña, contacta al Administrador!",
                        type: "error",
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                    },function(isConfirm){
                         if (isConfirm) {
                            history.back();
                          }
                    });
                    </script>';
              }

              echo'<script>
                  swal({
                      title: "¡Bien echo!",
                      text: "¡Revisa tu nueva contraseña en tu EMAIL!",
                      type: "success",
                      confirmButtonText: "Cerrar",
                      closeOnConfirm: false
                  },function(isConfirm){
                       if (isConfirm) {
                          history.back();
                        }
                  });
                  </script>';

            }

          } else {

            echo'<script>
                swal({
                    title: "¡ERROR!",
                    text: "¡El EMAIL no existe en el sistema!",
                    type: "error",
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                },function(isConfirm){
                     if (isConfirm) {
                        history.back();
                      }
                });
                </script>';

          }

        } else {
          echo'<script>
              swal({
                  title: "¡ERROR!",
                  text: "¡El EMAIL es incorrecto!",
                  type: "error",
                  confirmButtonText: "Cerrar",
                  closeOnConfirm: false
              },function(isConfirm){
                   if (isConfirm) {
                      history.back();
                    }
              });
              </script>';
        }

      }

    }
    
    # ======================
    # = MOSTRAR TUTORES
    # ======================
    static public function ctrMostrarTutores($item, $valor){

      $tabla = "usuarios";

      $respuesta = ModeloUsuarios::mdlMostrarTutores($tabla, $item, $valor);

      return $respuesta;

    }

    # ======================
    # = MOSTRAR COMUNIDAD 
    # ======================
    static public function ctrMostrarComunidad(){

      $tabla = "informacion";

      $respuesta = ModeloUsuarios::mdlMostrarComunidad($tabla);

      return $respuesta;

    }

}
