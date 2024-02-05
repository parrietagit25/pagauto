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
          <h3>INICIO > <span style="color:red;">NUESTRO EQUIPO</span></h3>
        </div>
        <!-- end .b-title-page-->
        <main>
          <!--
          <div class="section-default bg-light">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="b-advantages"><i class="b-advantages__ic flaticon-car-repair-check-list"></i>
                    <div class="b-advantages__title">Facil financiamiento</div>
                    <div class="b-advantages__info">Financiamiento accesible y flexible para tu auto seminuevo: soluciones rápidas, personalizadas y sin complicaciones.</div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="b-advantages active"><i class="b-advantages__ic flaticon-speedometer"></i>
                    <div class="b-advantages__title">Muchas marcas de autos</div>
                    <div class="b-advantages__info">Amplia selección de marcas y modelos de autos seminuevos: encuentra tu coche ideal con facilidad y rapidez.</div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="b-advantages"><i class="b-advantages__ic flaticon-car-repair"></i>
                    <div class="b-advantages__title">Servicios rapidos</div>
                    <div class="b-advantages__info">Servicio rápido y eficiente: elige tu auto seminuevo ideal con rapidez, comodidad y atención personalizada.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          -->

          <section class="section-team section-default">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="text-center">
                    <div class="ui-title-slogan">TE AYUDAMOS A ENCONTRAR TU PRÓXIMO AUTO</div>
                    <h2 class="ui-title">Nuestro equipo de <span class="text-primary"> ventas</span></h2>
                  </div>
                </div>
              </div>
              <div class="row">
              <?php if ($vendedores4->num_rows > 0) {
                    while ($row = $vendedores4->fetch_assoc()) {  ?>
                      <div class="col-lg-3 col-md-6">
                          <div class="b-team">
                              <div class="b-team__media">
                                  <div class="b-team__img"><img class="img-fluid" src="<?php echo $row["photo"]; ?>" alt="Foto" /></div>
                                  <ul class="b-team__soc list-unstyled">

                                      <li class="b-team__soc-item"><a class="b-team__soc-link" href="https://www.instagram.com/<?php echo $row["redSocial"]; ?>/"><i class="ic fab fa-instagram"></i></a></li>
                                      <?php /* <li class="b-team__soc-item"><a class="b-team__soc-link" href="mailto:<?php echo $row["correo"]; ?>"><i class="ic fa fa-envelope"></i></a></li>
                                      <li class="b-team__soc-item"><a class="b-team__soc-link" href="<?php echo $row["urlLocation"]; ?>" target="_blank"><i class="ic icon-location-pin"></i></a></li> */ ?>
                                  
                                  </ul>
                              </div>
                              <div class="b-team__inner bg-dark">
                                  <div class="b-team__name"><?php if($row['id'] == 8){ echo strstr($row["nombre"], ' ', true); }else{ echo $row["nombre"]; } ?></div>
                                  <div class="b-team__category"><?php echo utf8_encode($row["cargo"]); ?></div>
                              </div>
                              <div class="b-team__footer"><!--<a class="b-team__phone" href="tel:+507<?php // echo $row["celular"]; ?>"><i class="ic text-primary icon-call-end"></i> +507 <?php // echo $row["celular"]; ?></a>-->
                                  <a class="b-team__soc-link" href="https://www.instagram.com/<?php echo $row["redSocial"]; ?>/"><i class="ic fab fa-instagram"></i> <?php echo $row["redSocial"]; ?></a>
                              </div>
                          </div>
                      </div>
                      <?php }
                    }  ?>
              </div>
            </div>
          </section>

          <section class="section-default" style="margin-top:-150px;">
            <div class="container">
              <div class="row" style="font-size:20px;">
                <div class="col-xl-12">
                  <p>
                    <span class="text-primary">Automarket</span>
                    Panamá es la empresa líder en Panamá en venta de autos seminuevos y usados, 
                    con 21 años en el mercado, más de 17,500 autos entregados y 5 sucursales a nivel nacional.  
                  </p>
                  <p>
                    Descubre la facilidad de adquirir un seminuevo de verdad con Automarket Panamá. 
                    Confía en nosotros para encontrar el vehículo perfecto que se ajuste a tus necesidades y estilo de vida. 
                  </p>
                  <ul>
                    <li>Confianza de 21 Años de experiencia.</li>
                    <li>Respaldo Intengral.</li>
                    <li>Autos 100% Garantizados. </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <!-- end .b-about-->
          <!-- end .b-bnr-->
          <div class="b-gallery js-slider" data-slick="{&quot;slidesToShow&quot;: 8, &quot;arrows&quot;: false, &quot;autoplay&quot;: true,  &quot;slidesToScroll&quot;: 1, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 6, &quot;slidesToScroll&quot;: 3}}, {&quot;breakpoint&quot;: 768, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}]}">
              <?php if ($diesiseis->num_rows > 0) {
                  while ($row = $diesiseis->fetch_assoc()) { ?>
                  <a href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
                      <div class="b-gallery__item b-team__media"><!--  -->
                          <!--<img class="img-fluid" src="<?php echo $row["Photo"]; ?>" alt="foto" /></div>-->
                          <div style="">
                              <img class="img-fluid" src="<?php echo $row["Photo"]; ?>" alt="foto" />
                          </div>
                      </div>
                  </a>
              <?php
                  }
              }
              ?>
          </div>
          <!-- end .b-gallery-->
          <div class="section-brands">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="section-brands__inner">
                    <div class="b-brands-2 row">
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="assets/media/bancos/1.png" alt="foto"/></div>
                      </div>
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="assets/media/bancos/2.png" alt="foto"/></div>
                      </div>
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="assets/media/bancos/3.png" alt="foto"/></div>
                      </div>
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="assets/media/bancos/4.png" alt="foto"/></div>
                      </div>
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="assets/media/bancos/5.png" alt="foto"/></div>
                      </div>
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="assets/media/bancos/6.png" alt="foto"/></div>
                      </div>
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="assets/media/bancos/7.png" alt="foto"/></div>
                      </div>
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="assets/media/bancos/8.png" alt="foto"/></div>
                      </div>
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="assets/media/bancos/9.png" alt="foto"/></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end .b-brands-->
        </main>
        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
    
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>