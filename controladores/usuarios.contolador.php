<?php
  /*=============================================>>>>>
  = USUARIOS CONTROLADOR =
  ===============================================>>>>>*/
  class ControladorUsuarios
  {

    /*=============================================>>>>>
    = ACTUALIZAR USUARIO =
    ===============================================>>>>>*/
    static public function ctrActualizarUsuario($id, $item, $valor){

      $tabla = "alumnos";

      $respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla,$id, $item, $valor);

      return $respuesta;

    }

    /*=============================================>>>>>
    = MOSTRAR USUARIO =
    ===============================================>>>>>*/
    static public function ctrMostrarUsuario($id, $item, $valor){

      $tabla = "alumnos";

      $respuesta = ModeloUsuarios::mdlMostrarAlumnos($tabla, $item, $valor);

      return $respuesta;

    }

    /*=============================================>>>>>
    = LOGIN TUTORADOS =
    ===============================================>>>>>*/
    public function ctrLoginUsuario(){

      if (isset($_POST["emailIngreso"])) {

        if (preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/', $_POST["emailIngreso"]) &&
            preg_match('/^[a-zA-Z0-9]*$/', $_POST['passwordIngreso'])) {

              $encriptar = crypt($_POST["passwordIngreso"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

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
                  } else {
                    $_SESSION["validarSession"] = "ok";
                    $_SESSION["id"] = $respuesta["id"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["numeroControl"] = $respuesta["numeroControl"];
                    $_SESSION["carrera"] = $respuesta["carrera"];
                    $_SESSION["grupo"] = $respuesta["grupo"];
                    $_SESSION["email"] = $respuesta["email"];
                    $_SESSION["foto"] = $respuesta["foto"];
                    $_SESSION["modo"] = $respuesta["modo"];

                    echo '
                      <script> window.location = "'.$url.'"; </script>;
                    ';

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

    /*=============================================>>>>>
    = OLVIDO DE PASSWORD =
    ===============================================>>>>>*/
    public function ctrOlvidoPassword(){

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

          $encriptar = crypt($nuevaPassword, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

          $tabla = "alumnos";

          $item1 = "email";

          $valor1 = $_POST["emailOlvido"];

          $respuesta1 = ModeloUsuarios::mdlMostrarAlumnos($tabla, $item1, $valor1);

          if ($respuesta1) {

            $id = $respuesta1["id"];

            $item2 = "password";

            $valor2 = $encriptar;

            $respuesta2 = ModeloUsuarios::mdlActualizarUsuario($tabla,$id, $item2, $valor2);

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
    /*=============================================>>>>>
    = MOSTRAR TUTORES =
    ===============================================>>>>>*/
    public function ctrMostrarTutores(){

      $tabla = "tutores";

      $respuesta = ModeloUsuarios::mdlMostrarTutores($tabla);

      return $respuesta;

    }

    /*=============================================>>>>>
    = MOSTRAR COMUNIDAD =
    ===============================================>>>>>*/
    public function ctrMostrarComunidad(){

      $tabla = "informacion";

      $respuesta = ModeloUsuarios::mdlMostrarComunidad($tabla);

      return $respuesta;

    }

  }
