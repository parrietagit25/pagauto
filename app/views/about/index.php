<?php 

$vendedores4 = obtenerVendedores(13);
$diesiseis = obtenerDatos(16);
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
        <?php include(ROOT_PATH . '/app/views/partials/menu.php'); ?>

        <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col offset-lg-3">
                  <div class="b-title-page__wrap">
                    <h1 class="b-title-page">Sobre nosotros</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://automarketpanama.com/public/">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
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
        <main>
          <div class="section-default bg-light">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="b-advantages"><i class="b-advantages__ic flaticon-car-repair-check-list"></i>
                    <div class="b-advantages__title">Facil financiamiento</div>
                    <div class="b-advantages__info">Financiamiento accesible y flexible para tu auto seminuevo: soluciones rápidas, personalizadas y sin complicaciones.</div>
                  </div>
                  <!-- end .b-advantages-->
                </div>
                <div class="col-lg-4">
                  <div class="b-advantages active"><i class="b-advantages__ic flaticon-speedometer"></i>
                    <div class="b-advantages__title">Muchas marcas de autos</div>
                    <div class="b-advantages__info">Amplia selección de marcas y modelos de autos seminuevos: encuentra tu coche ideal con facilidad y rapidez.</div>
                  </div>
                  <!-- end .b-advantages-->
                </div>
                <div class="col-lg-4">
                  <div class="b-advantages"><i class="b-advantages__ic flaticon-car-repair"></i>
                    <div class="b-advantages__title">Servicios rapidos</div>
                    <div class="b-advantages__info">Servicio rápido y eficiente: elige tu auto seminuevo ideal con rapidez, comodidad y atención personalizada.</div>
                  </div>
                  <!-- end .b-advantages-->
                </div>
              </div>
            </div>
          </div>
          <section class="section-about section-default">
            <div class="container">
              <div class="row">
                <div class="col-xl-6">
                  <div class="ui-title-slogan">Te ayudamos a encontrar tu proximo auto</div>
                  <h2 class="ui-title"><span class="text-primary">Automarket</span>  Valores y Características de</h2>
                  <p>En Automarket, nos enorgullecemos de ofrecer un servicio excepcional. Nuestro equipo de ventas es reconocido por su profesionalismo y compromiso, asegurándote una experiencia de compra inigualable. Cada miembro está dedicado a entender tus necesidades y preferencias, garantizando una selección perfecta para ti.</p>
                  <ul class="list list-mark-3">
                    <li>Ofrecemos los precios más bajos del mercado y un financiamiento sin estrés
Confiados por millones de personas, estamos oficialmente reconocidos por nuestra integridad y excelencia.</li>
                    <li>Nuestro equipo está comprometido con la calidad, proporcionando soluciones personalizadas para cada cliente.</li>
                    <li>Nos distinguimos por nuestra honestidad y transparencia, ganándonos la confianza y lealtad de nuestros clientes.</li>
                    <li>Ofrecemos servicios de mantenimiento para todos nuestros autos, garantizando tu satisfacción de por vida.</li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <!-- end .b-about-->
           <!-- end .b-services-->
           <section class="b-bnr bg-dark">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-6">
                          <div class="b-bnr__main">
                              <h2 class="b-bnr__title">Conduce el Futuro, Hoy.</h2>
                              <div class="b-bnr__info">TE AYUDAMOS A ENCONTRAR TU PRÓXIMO VEHICULO FÁCILMENTE</div>
                          </div>
                      </div>
                      <div class="col-xl-6">
                          <div class="b-bnr__second"><a class="btn btn-primary" href="#">Ver inventario</a>
                              <div class="b-bnr-contacts">
                                  <div class="b-bnr-contacts__info">Llamanos</div><a class="b-bnr-contacts__phone" href="tel:+507279-2789"><i class="ic icon-call-end text-primary"></i> +507 279-2789</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- end .b-bnr-->
          <div class="section-progress">
              <div class="container">
                  <ul class="b-progress-list row list-unstyled">
                      <li class="b-progress-list__item col-md-3">
                          <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">Vehiculos en stock</span><span class="b-progress-list__percent js-chart" data-percent="200"><span class="js-percent"></span></span>
                          </div>
                      </li>
                      <li class="b-progress-list__item col-md-3">
                          <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">Concesionarios </span><span class="b-progress-list__percent js-chart" data-percent="4"><span class="js-percent"></span><span>+</span></span>
                          </div>
                      </li>
                      <li class="b-progress-list__item col-md-3">
                          <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">Unidades Vendidas</span><span class="b-progress-list__percent js-chart" data-percent="4568"><span class="js-percent"></span></span>
                          </div>
                      </li>
                      <li class="b-progress-list__item col-md-3">
                          <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__name">Años en el mercado</span><span class="b-progress-list__percent js-chart" data-percent="20"><span class="js-percent"></span><span>+</span></span>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
          <!-- end .b-bnr-->
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
                              <div class="b-team__footer"><a class="b-team__phone" href="tel:+507<?php echo $row["celular"]; ?>"><i class="ic text-primary icon-call-end"></i> +507 <?php echo $row["celular"]; ?></a></div>
                          </div>
                      </div>
                      <?php }
                    } /* ?>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/2.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">ITZEL RODRIGUEZ</div>
                      <div class="b-team__category">ASESORA DE VENTAS</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/3.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">JOEL DE LEON</div>
                      <div class="b-team__category">ASESOR DE VENTAS</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/4.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">William Henry</div>
                      <div class="b-team__category">Marketing</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/5.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">Alex Leeman</div>
                      <div class="b-team__category">Director</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/6.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">Diago Johnson</div>
                      <div class="b-team__category">Sales Manager</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/7.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">Sophia Lauren</div>
                      <div class="b-team__category">Co-Founder</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/8.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">William Henry</div>
                      <div class="b-team__category">Marketing</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/9.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">Alex Leeman</div>
                      <div class="b-team__category">Director</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/10.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">Diago Johnson</div>
                      <div class="b-team__category">Sales Manager</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/11.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">Sophia Lauren</div>
                      <div class="b-team__category">Co-Founder</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/12.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">William Henry</div>
                      <div class="b-team__category">Marketing</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/13.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">Sophia Lauren</div>
                      <div class="b-team__category">Co-Founder</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="b-team b-team_mod-a">
                    <div class="b-team__media">
                      <div class="b-team__img"><img class="img-fluid" src="assets/media/team/14.png" alt="Foto"/></div>
                      <ul class="b-team__soc list-unstyled">
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                      </ul><a class="b-team__phone" href="tel:+17553028549"><i class="ic icon-call-end"></i> +1 755 302 8549</a>
                    </div>
                    <div class="b-team__inner bg-dark">
                      <div class="b-team__name">William Henry</div>
                      <div class="b-team__category">Marketing</div>
                    </div>
                  </div>
                </div>
                 */ ?>
              </div>
            </div>
          </section>
          <!-- end .b-team-->
          <section class="b-steps section-default parallax">
              <div class="b-steps__inner">
                  <div class="container">
                      <div class="row">
                          <div class="col-12">
                              <div class="ui-title-slogan">TE AYUDAMOS A ENCONTRAR TU PRÓXIMO VEHICULO FÁCILMENTE</div>
                              <h2 class="ui-title">Como AutoMarket<span class="text-primary"> Trabaja</span></h2>
                              <ul class="b-steps-list list-unstyled row">
                                  <li class="b-steps-list__item col-lg"><span class="b-steps-list__number">01</span>
                                      <div class="b-steps-list__title">Busca en nuestro inventario</div>
                                      <div class="b-steps-list__info">Explora nuestro inventario extenso, encontrarás el vehículo perfecto para ti. Descubre calidad y variedad ahora mismo</div>
                                  </li>
                                  <li class="b-steps-list__item col-lg"><span class="b-steps-list__number">02</span>
                                      <div class="b-steps-list__title">Selecciona el vehiculo que te gusta</div>
                                      <div class="b-steps-list__info">Elige tu coche ideal de nuestro diverso inventario. Aquí, tu vehículo soñado te está esperando..</div>
                                  </li>
                                  <li class="b-steps-list__item col-lg"><span class="b-steps-list__number">03</span>
                                      <div class="b-steps-list__title">Habla con uno de nuestros agentes</div>
                                      <div class="b-steps-list__info">contácta a uno de nuestros expertos agentes hoy y encuentra el auto perfecto para ti en nuestro inventario.</div>
                                  </li>
                                  <li class="b-steps-list__item col-lg"><span class="b-steps-list__number">04</span>
                                      <div class="b-steps-list__title">Conduce tu nuevo vehiculo</div>
                                      <div class="b-steps-list__info">Conduce hacia una nueva aventura con tu vehículo elegido. Aquí, tu nuevo viaje comienza con nosotros.</div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- end .b-steps-->
          <div class="container">
            <div class="section-default-sm">
              <div class="row">
                <div class="col-lg-6">
                  <section class="section-area">
                    <h2 class="ui-title-inner"><span class="text-primary"> Ventajas</span></h2>
                    <div class="accordion" id="accordion-1">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <button class="accordion-trigger ui-subtitle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="ic fas fa-share"></i>Calidad Garantizada en Autos Seminuevos</button>
                        </div>
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion-1">
                          <div class="card-body">Confianza y Seguridad: Cada vehículo seminuevo que ofrecemos ha sido cuidadosamente inspeccionado y certificado para garantizar su calidad y fiabilidad. Con nosotros, compras no solo un auto, sino también la seguridad y tranquilidad de que estás adquiriendo un vehículo en excelente estado.</div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <button class="accordion-trigger ui-subtitle collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="ic fas fa-share"></i>Soluciones de Financiamiento Flexibles</button>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion-1">
                          <div class="card-body">Facilidades de Pago: Entendemos la importancia de la flexibilidad financiera. Por eso, trabajamos en conjunto con entidades bancarias para ofrecerte opciones de financiamiento adaptadas a tus necesidades. Nuestro objetivo es hacer que la compra de tu auto sea accesible y libre de complicaciones.</div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <button class="accordion-trigger ui-subtitle collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="ic fas fa-share"></i>Servicio Post-Venta Dedicado</button>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion-1">
                          <div class="card-body">Compromiso Continuo: Nuestro compromiso contigo no termina con la venta. Ofrecemos servicios post-venta para asegurarnos de que tu experiencia con tu auto seminuevo sea duradera y satisfactoria. Desde mantenimiento hasta asesoría, estamos aquí para apoyarte en cada paso de tu viaje automovilístico.</div>
                        </div>
                      </div>
                    </div>
                    <!-- end .accordion-->
                  </section>
                </div>
                <div class="col-lg-6">
                  <section class="section-reviews-2">
                    <h2 class="ui-title-inner">Que comentan nuestros<span class="text-primary"> clientes</span></h2>
                    <div class="b-reviews-slider-2 js-slider" data-slick="{&quot;arrows&quot;: false, &quot;dots&quot;: true}">
                      <div class="b-reviews-2">
                        <blockquote class="b-reviews-2__blockquote">
                          <div class="b-reviews-2__wrap bg-light">
                            <p>Confiable, excelente atención y sobre todo mejor precio y servicio en panamá, recomendado 100%</p>
                          </div>
                          <cite class="b-reviews-2__cite" title="Blockquote Title"><span class="b-reviews-2__name">Wuendy Tapia</span><span class="b-reviews-2__category"></span></cite>
                        </blockquote>
                      </div>
                      <div class="b-reviews-2">
                        <blockquote class="b-reviews-2__blockquote">
                          <div class="b-reviews-2__wrap bg-light">
                            <p>Me atendieron muy bien. Están muy cualificados para responder cualquier pregunta sobre los autos. Además tienen los autos muy bien cuidados, parecen recién salidos de la agencia. Para haber dado un año de garantía y toda la confianza del trámite de compra venta, los precios me parecen muy competitivos. El vendedor que me atendió fue Juan Estrada; tanto él como la gerente me parecen personas muy amables, comunicativas y atentas.</p>
                          </div>
                          <cite class="b-reviews-2__cite" title="Blockquote Title"><span class="b-reviews-2__name">Francisco Rodriguez</span><span class="b-reviews-2__category"></span></cite>
                        </blockquote>
                      </div>
                      <div class="b-reviews-2">
                        <blockquote class="b-reviews-2__blockquote">
                          <div class="b-reviews-2__wrap bg-light">
                            <p>Excelente atención del Sr. Felipe! es extraordinariamente amable, muy conocedor de su trabajo y rápido en las gestiones. Acabo de salir de ahí muy satisfecha con la gestión. Lo recomiendo!</p>
                          </div>
                          <cite class="b-reviews-2__cite" title="Blockquote Title"><span class="b-reviews-2__name">Celia Llanusa</span><span class="b-reviews-2__category"></span></cite>
                        </blockquote>
                      </div>
                      <div class="b-reviews-2">
                        <blockquote class="b-reviews-2__blockquote">
                          <div class="b-reviews-2__wrap bg-light">
                            <p>En este sitio puedes alquilar autos de Dollar Rent-A-Car y los puedes devolver hasta las 8 pm.  Adicionalmente, es el punto de venta de autos de segunda esta arrendadora.  Buenos precios!</p>
                          </div>
                          <cite class="b-reviews-2__cite" title="Blockquote Title"><span class="b-reviews-2__name">Arturo Rebollon</span><span class="b-reviews-2__category"></span></cite>
                        </blockquote>
                      </div>
                    </div>
                  </section>
                  <!-- end .b-reviews-->
                </div>
              </div>
            </div>
          </div>
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