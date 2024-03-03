<?php $result = obtenerDatos(8);
      $seis = obtener6Mark();
      $tres = obtenerDatos(3);
      $diesiseis = obtenerDatos(16);
      $uno = obtenerDatos(1);
      $marcas = obtenerMarcas();
      $vendedores4 = obtenerVendedores(13);
      $todas_marcas = get_marcas();
      $todos_modelos = get_modelos();
      $tipo_carro = get_tipo_carro();
      $tipo_carro2 = get_tipo_carro();
      $bancos = get_bancos();

      if (isset($_POST['email_customer'])) {
        insertar_email_cliente($_POST['email_customer']);  ?>

        <script>
            alert('Registro Realizado');
        </script>

    <?php  }

include(ROOT_PATH . '/app/views/partials/header.php'); ?>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->
         <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <?php include(ROOT_PATH . '/app/views/partials/menu2.php'); ?>
        
        <div class="container">
            <h3 class="titulo-nuestro-equipo">INICIO > <span style="color:red;">FINANCIAMIENTO</span></h3>
            <br>
            <div class="">
                <div class="footer-contacta__item"><i class="ic "><img width="20" src="<?php echo BASEURL; ?>media/icons/whatsapp.png" alt=""> </i>Contactanos al Whatsapp:+<a href="https://wa.me/50769590953" target="_blank" style="color:gray;"> 507 6959-0953</a></div>
            </div>
        </div>
        
        <!-- end .b-title-page-->
        <main>
            <br>
            <br>

            <?php if (isset($_GET['tipo_f']) && $_GET['tipo_f']=='asalariados') { ?>

              <div class="container">
                
                <div class="row">
                    
                    <div class="col-12 col-md-6 order-1 order-md-1" style="font-size:20px; padding-top:20px;">
                      <ul>
                          <li> <b> REQUISITOS ASALARIADO </b> </li>
                          <li>Solicitud de Crédito </li>
                          <li>Copia de Cédula / Pasaporte </li>
                          <li>Copia de Licencia </li>
                          <li>Carta de Trabajo</li>
                          <li>Permiso de trabajo vigente ( extranjeros) </li>
                          <li>Copia de Ficha/Talonarios </li>
                          <li>Copia de Recibo de Luz/Agua </li>
                      </ul>
                      <div class="">
                          <div class="footer-contacta__item"><a href="https://automarketpanama.com/public/pipe" style="color:red;">APLICA YA!</a></div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 order-1 order-md-1">
                          <img src="/public/assets/media/financiamiento/asalariado.png" class="financing-image asalariado" alt="">
                    </div>
                    <div class="col-12 order-3" style="padding-top:20px;">
                        <h2>Requisitos</h2>
                        <div class="d-flex justify-content-between flex-wrap" style="padding-top:20px;">
                            <a href="/public/financiamiento?tipo_f=asalariados" class="btn btn-primary my-1">Asalariados</a>
                            <a href="/public/financiamiento?tipo_f=independientes" class="btn btn-primary my-1">Independientes</a>
                            <a href="/public/financiamiento?tipo_f=juridicos" class="btn btn-primary my-1">Jurídicos</a>
                        </div>
                    </div>
                  </div>
              </div>

          <?php }elseif(isset($_GET['tipo_f']) && $_GET['tipo_f']=='independientes'){ ?> 
            
            <div class="container">
              <div class="row">
                  
                  <div class="col-12 col-md-6 order-1 order-md-1" style="font-size:20px; padding-top:20px;">
                    <ul>
                      <li> <b> REQUISITOS INDEPENDIENTE </b> </li>
                      <li>Solicitud de Crédito </li>
                      <li>Copia de Cédula/ pasaporte </li>
                      <li>Copia de Licencia </li>
                      <li>2 últimas declaraciones de Renta </li>
                      <li>Certificados de Recepción, Paz y Salvo </li>
                      <li>Aviso de Operaciones </li>
                      <li>Movimientos bancarios ( últimos 6 meses) </li>
                      <li>Copia de Recibo de Luz/Agua </li>
                    </ul>
                    <div class="">
                      <div class="footer-contacta__item"><a href="https://automarketpanama.com/public/pipe" style="color:red;">APLICA YA!</a></div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 order-2 order-md-2">
                        <img src="/public/assets/media/financiamiento/independiente.png" class="financing-image independiente" alt="">
                  </div>
                  <div class="col-12 order-3" style="padding-top:20px;">
                        <h2>Requisitos</h2>
                        <div class="d-flex justify-content-between flex-wrap" style="padding-top:20px;">
                            <a href="/public/financiamiento?tipo_f=asalariados" class="btn btn-primary my-1">Asalariados</a>
                            <a href="/public/financiamiento?tipo_f=independientes" class="btn btn-primary my-1">Independientes</a>
                            <a href="/public/financiamiento?tipo_f=juridicos" class="btn btn-primary my-1">Jurídicos</a>
                        </div>
                      </div>
                  </div>
            </div>
            
          <?php }elseif(isset($_GET['tipo_f']) && $_GET['tipo_f']=='juridicos'){ ?>

             <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 order-1 order-md-1" style="font-size:20px; padding-top:20px;">
                      <ul>
                        <li> <b> REQUISITOS JURIDICO </b></li>
                        <li>Solicitud de Crédito </li>
                        <li>Copia de Cédula/ pasaporte </li>
                        <li>Copia de Licencia </li>
                        <li>2 últimas declaraciones de Renta </li>
                        <li>Certificados de Recepción, Paz y Salvo </li>
                        <li>Aviso de Operaciones </li>
                        <li>Movimientos bancarios ( últimos 6 meses) </li>
                        <li>Copia de Recibo de Luz/Agua </li>
                      </ul>
                      <div class="">
                          <div class="footer-contacta__item"><a href="https://automarketpanama.com/public/pipe" style="color:red;">APLICA YA!</a></div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 order-2 order-md-2">
                        <img src="/public/assets/media/financiamiento/juridico.png" class="financing-image juridico" alt="">
                    </div>
                    <div class="col-12 order-3" style="padding-top:20px;">
                        <h2>Requisitos</h2>
                        <div class="d-flex justify-content-between flex-wrap" style="padding-top:20px;">
                            <a href="/public/financiamiento?tipo_f=asalariados" class="btn btn-primary my-1">Asalariados</a>
                            <a href="/public/financiamiento?tipo_f=independientes" class="btn btn-primary my-1">Independientes</a>
                            <a href="/public/financiamiento?tipo_f=juridicos" class="btn btn-primary my-1">Jurídicos</a>
                        </div>
                    </div>
                </div>
            </div>

          <?php }else{ ?>

            <div class="container">
                <div class="row">
                    <!-- Contenedor de Requisitos y Botones -->
                    <div class="col-12 order-1" style="padding-top:20px;">
                        <h2>Requisitos</h2>
                        <div class="d-flex justify-content-between flex-wrap" style="padding-top:20px;">
                            <a href="/public/financiamiento?tipo_f=asalariados" class="btn btn-primary my-1">Asalariados</a>
                            <a href="/public/financiamiento?tipo_f=independientes" class="btn btn-primary my-1">Independientes</a>
                            <a href="/public/financiamiento?tipo_f=juridicos" class="btn btn-primary my-1">Jurídicos</a>
                        </div>
                    </div>
                    <!-- Contenedor de la Imagen -->
                    <div class="col-12 col-md-6 order-3 order-md-3">
                        <img src="/public/assets/media/financiamiento/financiamiento.png" class="financing-image" alt="">
                    </div>
                    <!-- Contenedor del Texto -->
                    <div class="col-12 col-md-6 order-2 order-md-2" style="font-size:20px; padding-top:20px;">
                        <p>En Automarket contamos con un departamento especializado en asesorar, gestionar y negociar las condiciones más favorables para tu financiamiento y seguro para tu próximo vehículo. Mantenemos relaciones sólidas con las principales entidades bancarias y financieras, asegurándote opciones las mejores opciones adaptadas a tus necesidades.</p> 
                        <p>Además, brindamos el apoyo en la adquisición de póliza, garantizando la protección integral de tu inversión. </p>
                        <p>En AutoMarket, la calidad y excelencia en nuestros productos y servicios son nuestra prioridad. Estamos comprometidos a brindarte una experiencia de compra sin igual. ¡Permítenos servirte y hacer realidad la adquisición de tu Seminuevo de manera sencilla y segura! </p>
                        <div class="">
                          <div class="footer-contacta__item"><a href="https://automarketpanama.com/public/pipe" style="color:red;">APLICA YA!</a></div>
                        </div>
                    </div>
                    
                </div>
            </div>


            <?php } ?>
            <br>
            <br>

          <!-- end .b-gallery-->
          <div class="b-gallery js-slider" data-slick="{&quot;slidesToShow&quot;: 8, &quot;arrows&quot;: false, &quot;autoplay&quot;: true,  &quot;slidesToScroll&quot;: 1, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 6, &quot;slidesToScroll&quot;: 3}}, {&quot;breakpoint&quot;: 768, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}]}">
            <?php 
                while ($bank=$bancos->fetch_assoc()) { ?>
                <a href="https://automarketpanama.com/public/detail?placa=">
                    <div class="b-gallery__item b-team__media">
                        <div style="">
                            <img class="img-fluid" src="<?php echo $bank["ima_bank"]; ?>" alt="foto" />
                        </div>
                    </div>
                </a>
            <?php
                }
            ?>
          </div>
          <?php /*
          <div class="section-brands">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="section-brands__inner">
                    <div class="b-brands-2 row">
                      <?php while ($bank=$bancos->fetch_assoc()) { ?>  
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="<?php echo $bank['ima_bank']; ?>" alt="foto"/></div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  */ ?>

          <!-- end .b-brands-->
        </main>
        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
    
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>