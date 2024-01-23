<?php $placa = $_GET['placa']; ?>
<?php $datos_auto = get_data_car($placa);  ?>
<?php $tipo_carro = get_tipo_carro();
      $tipo_carro2 = get_tipo_carro(); ?>
<?php include(ROOT_PATH . '/app/views/partials/header.php'); ?>
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
                    <h1 class="b-title-page">Detalles del Auto</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://automarketpanama.com/public/">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detalles del Auto</li>
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

        <div class="l-main-content">
          <div class="container">
          <?php
            if ($datos_auto->num_rows > 0) {
                while ($row = $datos_auto->fetch_assoc()) { ?>

            <section class="b-goods-f">
                <div class="row">
                    <div class="col-lg-8">
                    <div class="ui-subtitle"><?php echo $row['Transmission']; ?></div>
                    <h1 class="ui-title text-uppercase"> <?php echo $row['Make'].' '.$row['Model']; ?></h1>
                    </div>
                    <div class="col-lg-4">
                        <div class="b-goods-f-price">
                            <div class="b-goods-f-price__inner">
                            <div class="b-goods-f-price__msrp">Precio:<strong> $<?php echo number_format($row["Price"], 2); ?></strong> <br> 
                                                                      <strong>ITBMS $<?php echo number_format($row["PriceTax"] - $row["Price"], 2); ?></strong>
                          </div>
                            <div class="b-goods-f-price__main bg-primary"> <small style="font-size: 12px;"> +ITBMS</small> $<?php echo number_format($row["PriceTax"], 2); ?></div>
                            </div>
                            <div class="b-goods-f-price__note"></div>
                        </div>
                    </div>
                </div>

              <div class="row">
                <div class="col-lg-8">
                  
                  <div class="b-goods-f__links">
                    <a class="b-goods-f__links-item" href="#">
                      <i class="ic fas fa-map-marker-alt text-primary"></i>
                        Panamá, <?php echo $row['LocationName']; ?>
                    </a>
                    <!--<a class="b-goods-f__links-item" href="#">
                      <i class="ic fas fa-question text-primary"></i>
                        Necesitas más información
                    </a>-->
                    <a class="b-goods-f__links-item" href="#">
                      <i class="ic fas fa-star text-primary"></i>
                        Agregar a favoritos
                    </a>
                    <a class="b-goods-f__links-item" href="#">
                      <i class="ic fas fa-car-side text-primary"></i>
                        Prueba de manejo
                    </a>
                    <a class="b-goods-f__links-item" href="mailto:ventas@automarket.com?subject=Solicitud de Información&body=Estoy interesado en obtener más información acerca de https://automarketpanama.com/public/detail?placa=<?php echo $placa; ?>">
                      <i class="ic fas fa-envelope text-primary"></i>
                        Solicitar más información
                    </a>
                  </div>

                    <div class="b-goods-f__slider "><!-- b-goods-f__slider 
                        <img id="imagenDefault" src="<?php //echo $row['Photo']; ?>" style="display:block; width: 600px; height: 400px;" />-->
                        <iframe id="miIframe" src="https://spins.impel.io/automarketpanama/<?php echo strtolower($placa); ?>" width="600" height="400" style="border:none; display:block;" 
                                onload="checkIframeLoaded();" onerror="showDefaultImage();">
                            Tu navegador no soporta iframes.
                        </iframe>
                    </div>
                  <h2 class="b-goods-f__title">Descripcion del auto</h2>
                  <div class="row">
                    <div class="col-md-6">
                      <dl class="b-goods-f__descr row">
                        <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Año</dt>
                        <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo $row['Year']; ?></dd>
                        <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Modelo</dt>
                        <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo $row['Model']; ?></dd>
                        <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Tipo</dt>
                        <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo $row['CarType']; ?></dd>
                        <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Color</dt>
                        <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo $row['Color']; ?></dd>
                        <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Km</dt>
                        <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo $row['Km']; ?></dd>
                        <dt class="b-goods-f__descr-title col-lg-5 col-md-12">Transmission</dt>
                        <dd class="b-goods-f__descr-info col-lg-7 col-md-12"><?php echo $row['Transmission']; ?></dd>
                      </dl>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                  </div>
                  <!--<ul class="nav nav-tabs nav-vehicle-detail-tabs" id="myTab" role="tablist">
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
                  </div>-->
                </div>
                <div class="col-lg-4">
                  <aside class="l-sidebar">
                      
                  <?php 

                   if($row['LocationName'] == 'Tumba Muerto'){ ?>
                    <div class="b-seller"> 
                      <img class="img-scale" src="https://automarketpanama.com/public/assets/media/imaGoo/tumbamuerto.jpg" alt="foto"/>
                       <p>Sucursal de Tumba Muerto <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.</p>
                    </div>
                    <?php }elseif($row['LocationName'] == 'David'){ ?>
                    <div class="b-seller"> 
                      <img class="img-scale" src="https://automarketpanama.com/public/assets/media/imaGoo/david.jpg" alt="foto"/>
                      <p>Sucursal de David <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.</p>
                    </div>
                    <?php }elseif($row['LocationName'] == 'Via Israel'){ ?>
                    <div class="b-seller"> 
                      <img class="img-scale" src="https://automarketpanama.com/public/assets/media/imaGoo/viaizrrael.jpg" alt="foto"/>
                      <p>Sucursal de Vía Israel <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.</p>
                    </div>
                    <?php }elseif($row['LocationName'] == 'Chorrera'){ ?>
                    <div class="b-seller"> 
                      <img class="img-scale" src="https://automarketpanama.com/public/assets/media/imaGoo/costaverde.jpg" alt="foto"/>
                      <p>Sucursal de Costa Verde <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.</p>
                    </div>
                    <?php } ?>
                    <!--<div class="b-seller__header">
                        <div class="b-seller__img"><img class="img-scale" src="<?php //echo $vendedor['photo']; ?>" alt="foto"/></div>
                        <div class="b-seller__title">
                          <div class="b-seller__name"><?php //echo $vendedor['nombre']; ?></div>
                          <div class="b-seller__category"><?php //echo $vendedor['Cargo']; ?></div>
                        </div>
                      </div>
                      <div class="b-seller__main"><i class="b-seller__ic fas fa-phone text-primary"></i>
                        <div class="b-seller__contact"><span class="d-block">Contacto </span><a class="b-seller__phone" href="tel:12584037961">+507 <?php //echo $vendedor['celular']; ?></a></div>
                        <ul class="b-seller-soc list-unstyled">
                          <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-twitter"></i></a></li>
                          <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-facebook"></i></a></li>
                          <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-linkedin"></i></a></li>
                          <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-google-plus-g"></i></a></li>
                          <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="#" target="_blank"><i class="ic fab fa-pinterest"></i></a></li> 
                        </ul>
                      </div>
                    </div> -->
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
            <?php
                }

            } else {
                echo "No se encontraron resultados";
            } 
            
            ?>
            
          </div>
        </div>


        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>