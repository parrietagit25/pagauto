<?php $result = obtenerDatos(8);
      $seis = obtener6Mark();
      $tres = obtenerDatos(3);
      $diesiseis = obtenerDatos(16);
      $uno = obtenerDatos(1);
      $marcas = obtenerMarcas();
      $vendedores4 = obtenerVendedores(4);
      $todas_marcas = get_marcas();
      $todos_modelos = get_modelos();
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
        <?php include(ROOT_PATH . '/app/views/partials/menu2.php'); ?>
        <!-- end .header-->
        <div class="container">
          <h3 class="titulo-nuestro-equipo">INICIO > <span style="color:red;">CONTÁCTANOS</span></h3>
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
                    <a href="https://wa.me/50769590953" target="_blank" style="color:gray;">
                      <div class="b-contacts"><i class="ic icon-phone bg-primary"></i>
                        <div class="b-contacts__title">Whatsapp</div>
                        <div class="b-contacts__info">+507 6959-0953<br></div>
                      </div>
                    </a>
                  </div>
                
                <div class="col-md-12 col-lg-4">
                  <a href="mailto:ventas@automarketpan.com">
                    <div class="b-contacts"><i class="ic icon-envelope"></i>
                      <div class="b-contacts__title">Email</div>
                      <div class="b-contacts__info">ventas@automarketpan.com<br></div>
                    </div>
                  </a>
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
                <a href="https://www.google.com/maps/dir/?api=1&destination=Automarket+Tumba+Muerto+Panama&travelmode=driving
" target="_blank" rel="noopener noreferrer">
                  <div id="mapTumbaMuerto"></div>
                </a>
              </div>
              <br>
              <div class="col-md-6" style="margin-top:20px;">
                <a href="https://www.google.com/maps/dir/?api=1&destination=Automarket+Via+Israel+Panama&travelmode=driving
" target="_blank" rel="noopener noreferrer">
                  <div id="mapViaIsrael"></div>
                </a>
              </div>
              <br>
              <div class="col-md-6" style="margin-top:20px;">
                <a href="https://www.google.com/maps/dir/?api=1&destination=Automarket+Costa+Verde+Panama&travelmode=driving
" target="_blank" rel="noopener noreferrer">
                  <div id="mapCostaVerde"></div>
                </a>
              </div>
              <br>
              <div class="col-md-6" style="margin-top:20px;">
                <a href="https://www.google.com/maps/dir/?api=1&destination=Automarket+David+Panama&travelmode=driving
" target="_blank" rel="noopener noreferrer">
                  <div id="mapDavid"></div>
                </a>
              </div>
              <br>
            </div>
            <div class="row">
              <div class="col-md-6">
                <section class="section-form-contacts contact-image-container" id="imagen_contacto">
                  <img src="<?php echo BASEURL; ?>media/imaGoo/contact.png" alt="">
                </section>
                <!-- end .b-form-contact-->
              </div>
              <div class="col-md-6">
                <section class="">
                  <div id="success"></div>
                  <div class="pipedriveWebForms b-form-contacts ui-form" data-pd-webforms="https://webforms.pipedrive.com/f/30YpKWrA7vgJy7e4b5ECKq0ffWK2mGCUl9i11tqBbBwBPX5BI5saqtBLbUsvUUPfB"><script src="https://webforms.pipedrive.com/f/loader"></script></div>
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