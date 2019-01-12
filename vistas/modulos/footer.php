
<?php

$estiloPlantilla = ControladorPlantilla::ctrEstiloPlantilla();

?>

<footer class="footer-nav hidden" style="background:<?php echo $estiloPlantilla['barraSuperior'];?>; color:<?php echo $estiloPlantilla['colorTexto'];?> ">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; <?php echo $estiloPlantilla["copyright"]; ?></span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">

                  <?php
                  /*=============================================>>>>>
                  = SOCIALES =
                  ===============================================>>>>>*/
                  $social = ControladorPlantilla::ctrEstiloPlantilla();

                  $jsonRedesSociales = json_decode($social["redesSociales"], true);

                  foreach ($jsonRedesSociales as $key => $value) {
                    echo '
                    <li><a href="'.$value["url"].'"><i class="fa '.$value["red"].'"></i></a>
                    </li> ';

                  }

                  ?>

                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Políticas de privacidad</a>
                    </li>
                    <li><a href="#">TESVG</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
