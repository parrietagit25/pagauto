<?php 
$tipo_carro = get_tipo_carro();
$tipo_carro2 = get_tipo_carro();
if (isset($_POST['nombre'])) {
  formulario_contacto($_POST['nombre'], $_POST['email'], $_POST['telefono'], $_POST['quebusca'], $_POST['detalles']);
  ?>
  <script>
    alert("Mensaje Enviado");
  </script>
  <?php 
}
include(ROOT_PATH . '/app/views/partials/header.php'); ?>
               
    <!-- Loader-->
      <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

      
         <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <?php include(ROOT_PATH . '/app/views/partials/menu.php'); ?>
        <!-- end .header-->
        <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col offset-lg-3">
                  <div class="b-title-page__wrap">
                    <h1 class="b-title-page">Contáctanos</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://automarketpanama.com/public/">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contáctanos</li>
                      </ol>
                      <!-- end breadcrumb-->
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end .b-title-page-->
        <main class="l-main-content">
          <div class="container">
            <div class="section-area">
              <div class="row">
                <!--<div class="col-md-6 col-lg-3">
                  <div class="b-contacts"><i class="ic icon-direction"></i>
                    <div class="b-contacts__title">Head Office</div>
                    <div class="b-contacts__info">68 Landsriver St, Welson<br>California 22066</div>
                  </div>
                </div>-->
                <div class="col-md-12 col-lg-4">
                  <div class="b-contacts"><i class="ic icon-phone bg-primary"></i>
                    <div class="b-contacts__title">Whatsapp</div>
                    <div class="b-contacts__info">+507 6959-0953<br></div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-4">
                  <div class="b-contacts"><i class="ic icon-envelope"></i>
                    <div class="b-contacts__title">Email</div>
                    <div class="b-contacts__info">ventas@automarketpan.com<br></div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-4">
                  <div class="b-contacts"><i class="ic icon-clock bg-primary"></i>
                    <div class="b-contacts__title">Horario</div>
                    <div class="b-contacts__info">Lunes a Sábado de 8:00 a.m. a 5:00 p.m.<br></div>
                  </div>
                </div>
              </div>
              <!-- end .b-contacts-->
            </div>
            <br>
              <h1 class="ui-title-inner text-center">Sucursales <span class="text-primary"> </span></h1>
            <div class="row">
              <div class="col-md-6" style="margin-top:20px;">
                <!--<div class="map" id="map"></div>-->
                <div id="mapTumbaMuerto"></div>
              </div>
              <br>
              <div class="col-md-6" style="margin-top:20px;">
                <div id="mapViaIsrael"></div>
              </div>
              <br>
              <div class="col-md-6" style="margin-top:20px;">
                <div id="mapCostaVerde"></div>
              </div>
              <br>
              <div class="col-md-6" style="margin-top:20px;">
                <div id="mapDavid"></div>
              </div>
              <br>
            </div>
            <div class="row">
              <div class="col-md-6">
                <section class="section-form-contacts">
                  <!--<h2 class="ui-title-inner">Escribenos <span class="text-primary"> </span></h2>
                  <p>Rellena el siguiente formulario y uno de nuestros representantes contactará contigo en breve.</p>-->
                  <div id="success"></div>
                  <!--<form class="b-form-contacts ui-form" id="contactForm" action="#" method="post">
                    <div class="form-group">
                      <input class="form-control" id="user-name" type="text" name="nombre" placeholder="¿Cómo te llamas?" required="required"/>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="user-email" type="email" name="email" placeholder="¿Cuál es tu dirección de correo electrónico?"/>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="user-email" type="text" name="telefono" placeholder="¿Cuál es tu número de teléfono? (opcional)"/>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="user-email" type="text" name="quebusca" placeholder="¿Qué estás buscando?"/>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="detalles" id="user-message" rows="5" placeholder="En que modelo de carro esta interesado/a? (opcional)" required="required"></textarea>
                    </div>
                    <button class="btn btn-primary">Enviar</button>
                    <br>
                    <small>
                      Nunca compartas información confidencial (números de tarjetas de crédito, números de identificación personal, contraseñas) a través de este formulario. <br>
                      Este sitio está protegido por reCAPTCHA y se aplica la <a href="https://policies.google.com/privacy?hl=es">Política de privacidad</a> y las <a href="https://policies.google.com/terms?hl=es">Condiciones de servicio</a> de Google.
                    </small>
                  </form>-->
                  <div class="pipedriveWebForms b-form-contacts ui-form" data-pd-webforms="https://webforms.pipedrive.com/f/30YpKWrA7vgJy7e4b5ECKq0ffWK2mGCUl9i11tqBbBwBPX5BI5saqtBLbUsvUUPfB"><script src="https://webforms.pipedrive.com/f/loader"></script></div>
                </section>
                <!-- end .b-form-contact-->
              </div>
              <div class="col-md-6">
                <section class="section-form-contacts">
                  <img src="<?php echo BASEURL; ?>media/imaGoo/contact.png" alt="">
                </section>
                <!-- end .b-form-contact-->
              </div>
            </div>
          </div>
        </main>
        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
    
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>