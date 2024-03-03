
<?php 
    $result = obtenerDatos(8);
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
          <h3 class="titulo-nuestro-equipo">INICIO > <span style="color:red;">POLITICAS</span></h3>
        </div>
        <!-- end .b-title-page-->

        <div class="l-main-content">
          <div class="container">

            <section class="b-goods-f">
                <div class="row">
                    <div class="col-lg-8">
                    <div class="ui-subtitle"></div>
                    <h1 class="ui-title text-uppercase"></h1>
                    </div>
                    <div class="col-lg-4">
                        <div class="b-goods-f-price">
                            <!--<div class="b-goods-f-price__inner">
                            <div class="b-goods-f-price__msrp">Tax:<strong> $</strong></div>
                            <div class="b-goods-f-price__main bg-primary">$</div>
                            </div>
                            <div class="b-goods-f-price__note"></div>-->
                        </div>
                    </div>
                </div>

              <div class="row">
                <div class="col-lg-12">
                    <h4>Política de Privacidad de Automarket</h4>

                    <b>1. Introducción</b>
                    <p>En Automarket, respetamos su privacidad y estamos comprometidos con la protección de los datos personales de nuestros usuarios. Esta política de privacidad explica cómo recopilamos, utilizamos, compartimos y protegemos la información en el contexto de nuestros servicios.</p>
                    <b>2. Recopilación de Datos</b>
                    <p>Podemos recopilar información personal que incluye, pero no se limita a, nombre, dirección de correo electrónico, número de teléfono, y detalles de transacciones, cuando usted utiliza nuestro sitio web o servicios.</p>
                    <b>3. Uso de la Información</b>
                    <p>La información recopilada se utiliza para proporcionar y mejorar nuestros servicios, procesar transacciones, comunicarnos con usted, y cumplir con nuestras obligaciones legales.</p>
                    <b>4. Compartir Información</b>
                    <p>No vendemos ni alquilamos información personal a terceros. Podemos compartir su información con proveedores de servicios o socios comerciales para facilitar nuestras operaciones, en cumplimiento con la ley o con su consentimiento explícito.</p>
                    <b>5. Seguridad de los Datos</b>
                    <p>Tomamos medidas razonables para proteger la información contra el acceso no autorizado, alteración, divulgación o destrucción. Sin embargo, ninguna transmisión por Internet o almacenamiento electrónico es completamente seguro.</p>
                    <b>6. Acceso y Control de su Información</b>
                    <p>Usted tiene derecho a acceder, corregir o eliminar su información personal. Para ejercer estos derechos, póngase en contacto con nosotros utilizando los detalles proporcionados en nuestro sitio web.</p>
                    <b>7. Cambios en la Política de Privacidad</b>
                    <p>Nos reservamos el derecho de modificar esta política de privacidad en cualquier momento. Cualquier cambio será efectivo inmediatamente después de la publicación en nuestro sitio web.</p>
                    <b>8. Contacto</b>
                    <p>Si tiene preguntas o preocupaciones sobre nuestra política de privacidad o prácticas, por favor contáctenos a través de nuestro sitio web.</p>
                   <?php /*
                    <div class="b-goods-f__links"><a class="b-goods-f__links-item" href="#"><i class="ic fas fa-map-marker-alt text-primary"></i>Panamá,</a><a class="b-goods-f__links-item" href="#"><i class="ic fas fa-question text-primary"></i>Necesitas mas informacion</a><a class="b-goods-f__links-item" href="#"><i class="ic fas fa-star text-primary"></i>Agregar a favoritos</a><a class="b-goods-f__links-item" href="#"><i class="ic fas fa-car-side text-primary"></i>Prueba de manejo</a><a class="b-goods-f__links-item" href="email:test@test.test"><i class="ic fas fa-envelope text-primary"></i>Enviar a un amigo</a></div>
                        <div class="b-goods-f__slider">
                            <iframe id="miIframe" src="https://spins.impel.io/automarketpanama/ef5866" width="600" height="400" style="border:none; display:block;">
                                Tu navegador no soporta iframes.
                            </iframe>
                            
                        </div>
                    <h2 class="b-goods-f__title">Descripcion del auto</h2>
                    <div class="row">
                        <div class="col-md-6">
                        <dl class="b-goods-f__descr row">
                            <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Año</dt>
                            <dd class="b-goods-f__descr-info col-lg-7 col-md-12"></dd>
                            <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Modelo</dt>
                            <dd class="b-goods-f__descr-info col-lg-7 col-md-12"></dd>
                            <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Tipo</dt>
                            <dd class="b-goods-f__descr-info col-lg-7 col-md-12"></dd>
                            <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Color</dt>
                            <dd class="b-goods-f__descr-info col-lg-7 col-md-12"></dd>
                            <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Km</dt>
                            <dd class="b-goods-f__descr-info col-lg-7 col-md-12"></dd>
                            <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Transmission</dt>
                            <dd class="b-goods-f__descr-info col-lg-7 col-md-12"></dd>
                        </dl>
                        </div>
                    </div>
                    <ul class="nav nav-tabs nav-vehicle-detail-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a></li>
                        <li class="nav-item"><a class="nav-link" id="features-tab" data-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="false">Features & Options</a></li>
                        <li class="nav-item"><a class="nav-link" id="location-tab" data-toggle="tab" href="#location" role="tab" aria-controls="location" aria-selected="false">Vehicle Location</a></li>
                        <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Owner Reviews</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <p>Edipisicing eiusmod tempor incididunt labore sed dolore magna aliqa enim ipsum ad minim veniams quis nostrud citation ullam laboris nisi ut aliquip laboris nisi ut aliquip ex ea commodo. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><strong>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</strong> nisi ut aliquip ex ea commodo cons equat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Exe pteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed umt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                        <h3 class="b-goods-f__title-inner">General Information</h3>
                        <ul class="list list-mark-2">
                            <li>Enim ipsum ad minim veniams quis nostrud citation ullam laboris nisi</li>
                            <li>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</li>
                            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li>
                            <li>Laboris nisi ut aliquip ex ea comodo consequat duis aute irure dolor in</li>
                            <li>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</li>
                        </ul>
                        </div>
                        <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
                        <p>Edipisicing eiusmod tempor incididunt labore sed dolore magna aliqa enim ipsum ad minim veniams quis nostrud citation ullam laboris nisi ut aliquip laboris nisi ut aliquip ex ea commodo. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons equat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Exe pteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed umt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <ul class="list list-mark-2">
                            <li>Enim ipsum ad minim veniams quis nostrud citation ullam laboris nisi</li>
                            <li>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</li>
                            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li>
                            <li>Laboris nisi ut aliquip ex ea comodo consequat duis aute irure dolor in</li>
                            <li>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</li>
                        </ul>
                        </div>
                    </div> 
                    </div>
                    <div class="col-lg-4">*/ ?>
                  <aside class="l-sidebar">

                    <?php /*
                    <div class="b-seller">
                      <div class="b-seller__header">
                        <div class="b-seller__img"><img class="img-scale" src="" alt="foto"/></div>
                        <div class="b-seller__title">
                          <div class="b-seller__name"></div>
                          <div class="b-seller__category"></div>
                        </div>
                      </div>
                      <div class="b-seller__main"><i class="b-seller__ic fas fa-phone text-primary"></i>
                        <div class="b-seller__contact"><span class="d-block">Contacto </span><a class="b-seller__phone" href="tel:12584037961">+507 </a></div>
                        <ul class="b-seller-soc list-unstyled">
                          <!-- <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-twitter"></i></a></li>
                          <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-facebook"></i></a></li>
                          <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-linkedin"></i></a></li>
                          <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-google-plus-g"></i></a></li>
                          <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-pinterest"></i></a></li> -->
                        </ul>
                      </div>
                    </div> */ ?>
                    <!-- end .b-seller-->
                    <!--
                    <div class="widget section-sidebar bg-gray widget-selecr-contact">
                        <h3 class="widget-title bg-dark"><i class="ic icon_mail_alt"></i>Message Seller</h3>
                      <div class="widget-content">
                        <div class="widget-inner">
                          <form>
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Name"/>
                            </div>
                            <div class="form-group">
                              <textarea class="form-control" placeholder="Message" rows="4"></textarea>
                            </div>
                            <button class="btn btn-red btn-lg w-100">Send now</button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="widget section-sidebar bg-gray">
                      <h3 class="widget-title bg-dark"><i class="ic flaticon-money"></i>Find installment</h3>
                      <div class="widget-content">
                        <div class="widget-inner">
                          <form>
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Loan Amount*"/>
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Down Payment*"/>
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Months Period*"/>
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="text" placeholder="Interest Rate*"/>
                            </div>
                            <button class="btn btn-border btn-lg w-100">Estimate payment</button>
                          </form>
                        </div>
                      </div>
                    </div>-->

                  </aside>
                </div>
              </div>
            </section>
            <!-- end .b-goods-f-->
            
          </div>
        </div>


        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>