<?php $placa = $_GET['placa']; ?>
<?php $datos_auto = get_data_car($placa);  ?>
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
      
       ?>
<?php include(ROOT_PATH . '/app/views/partials/header.php'); ?>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->
         <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <?php include(ROOT_PATH . '/app/views/partials/menu2.php'); ?>


        <div class="container">
          <h3>INICIO > INVENTARIO > <span style="color:red;">DETALLES DEL AUTO</span></h3>
        </div>
        <!-- end .b-title-page-->

        <div class="l-main-content">
          <div class="container">
          <?php
            if ($datos_auto->num_rows > 0) {
                while ($row = $datos_auto->fetch_assoc()) { ?>

            <section class="b-goods-f">
                <div class="row">
                    <div class="col-lg-12">
                      <!--<div class="ui-subtitle"><?php //echo $row['Transmission']; ?></div> -->
                      <h1 class="ui-title text-uppercase"> <?php echo $row['Make'].' '.$row['Model'].' '.$row['Year']; ?></h1>
                    </div>
                    <?php /*
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
                    */ ?>
                </div>

              <div class="row">
                <div class="col-lg-9">
                  <?php  /*
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
                    <a class="b-goods-f__links-item" href="mailto:ventas@automarket.com?subject=Solicitud de Información&body=Estoy interesado en obtener más información acerca de https://automarketpanama.com/dev/public/detail?placa=<?php echo $placa; ?>">
                      <i class="ic fas fa-envelope text-primary"></i>
                        Solicitar más información
                    </a>
                  </div>
                   */ ?>

                    <div class="b-goods-f__slider "><!-- b-goods-f__slider 
                        <img id="imagenDefault" src="<?php //echo $row['Photo']; ?>" style="display:block; width: 600px; height: 400px;" />-->
                        <iframe id="miIframe" src="https://spins.impel.io/automarketpanama/<?php echo strtolower($placa); ?>" width="100%" height="600" style="border:none; display:block; width:100%;" 
                                onload="checkIframeLoaded();" onerror="showDefaultImage();">
                            Tu navegador no soporta iframes.
                        </iframe>
                    </div>
                  <?php /* ?>
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
                  </div> */ ?>
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
                <div class="col-lg-3">
                  <aside class="l-sidebar">
                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; height: 650px; box-shadow: 0 0 10px #888888; padding: 20px;">
                        <h1>$<?php echo number_format($row["Price"], 2); ?></h1>
                        Impuestos: $<?php echo number_format($row["PriceTax"] - $row["Price"], 2); ?><br>
                        Precio Final: $<?php echo number_format($row["PriceTax"], 2); ?><br>
                        <hr>
                        Marca: <?php echo $row['Make']; ?><br>
                        Modelo: <?php echo $row['Model']; ?><br>
                        Año: <?php echo $row['Year']; ?><br>
                        Kilometraje: <?php echo $row['Km']; ?><br>
                        Combustible: <?php echo $row['Fuel']; ?><br>
                        Transmision: <?php echo $row['Transmission']; ?><br>
                        Color: <?php echo $row['Color']; ?><br>
                        Interior: <?php echo $row['Interior']; ?><br>
                        Unidad: <?php echo $row['Unit']; ?><br>
                        Placa: <?php echo strtolower($placa); ?><br>
                        Ubicacion: <?php echo $row['LocationName']; ?> <br>
                        <div style="margin-top: 20px;">
                            <button class="btn btn-sm btn-primary" style="margin-bottom: 10px;">Contactar a un agente</button>
                            <button class="btn btn-sm btn-primary" style="margin-bottom: 10px;">Solicitar Cotizacion</button>
                            <button class="btn btn-sm btn-primary">Agenda prueba de manejo</button>
                        </div>
                    </div>
                      
                  <?php /*

                   if($row['LocationName'] == 'Tumba Muerto'){ ?>
                    <div class="b-seller"> 
                      <img class="img-scale" src="https://automarketpanama.com/dev/public/assets/media/imaGoo/tumbamuerto.jpg" alt="foto"/>
                       <p>Sucursal de Tumba Muerto <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.</p>
                    </div>
                    <?php }elseif($row['LocationName'] == 'David'){ ?>
                    <div class="b-seller"> 
                      <img class="img-scale" src="https://automarketpanama.com/dev/public/assets/media/imaGoo/david.jpg" alt="foto"/>
                      <p>Sucursal de David <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.</p>
                    </div>
                    <?php }elseif($row['LocationName'] == 'Via Israel'){ ?>
                    <div class="b-seller"> 
                      <img class="img-scale" src="https://automarketpanama.com/dev/public/assets/media/imaGoo/viaizrrael.jpg" alt="foto"/>
                      <p>Sucursal de Vía Israel <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.</p>
                    </div>
                    <?php }elseif($row['LocationName'] == 'Chorrera'){ ?>
                    <div class="b-seller"> 
                      <img class="img-scale" src="https://automarketpanama.com/dev/public/assets/media/imaGoo/costaverde.jpg" alt="foto"/>
                      <p>Sucursal de Costa Verde <br> Horario <br> Lunes a Sábado de 8:00 a.m. a 5:00 p.m. <br> Domingos de 8:00 a.m. a 12:00 m.d.</p>
                    </div>
                    <?php } */ ?>
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

              <section class="bg-light" style="background-color:white;">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="<?php echo BASEURL; ?>media/ima/garan.png" width="200" style="margin-top:-30px;">
                        </div>
                        <div class="col-10 justify-content-center" style="text-align:center;">
                          <ul style="text-align:left;">
                            <li><h2>12 meses de garantia</h2></li>
                            <li><h2>Historial de mantenimiento</h2></li>
                            <li><h2>Garantia extendible hasta 24 meses</h2></li>
                          </ul>
                        </div>
                    </div>
                </div>           
            </section>
            
          </div>
        </div>

        <section class="bg-light" style="background-color:#ececf4;">
            <div class="container">
                <div class="row">
                    
                    <div class="col-10 justify-content-center" style="text-align:left; margin-top:40px;">
                      <h1 style="font-size: 80px; font-weight: bold; color:#3d4c93;">Puedes financiar este auto!</h1>
                      <h4>Te ayudamos a realizar el tramite de financiamiento para la compra de tu auto</h4>
                      <a class="btn btn-sm btn-primary" href="https://automarketpanama.com/dev/public/financiamiento">Ver Requisitos</a>
                    </div>
                    <div class="col-2">
                        <img src="<?php echo BASEURL; ?>media/ima/finan.png" width="400">
                    </div>
                </div>
            </div>           
        </section>
        <section class="section-carousel">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="ui-title-slogan"><!--TE AYUDAMOS A ENCONTRAR TU PRÓXIMO VEHICULO FÁCILMENTE--></div>
                      <h2 class="ui-title" style="color:red;">Autos <span > con precios similares</span></h2>
                  </div>
              </div>
          </div>
          <div class="section-carousel__inner bg-dark">
              <div class="js-slider" data-slick="{&quot;slidesToShow&quot;: 5,  &quot;slidesToScroll&quot;: 5, &quot;infinite&quot;: true, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1800, &quot;settings&quot;: {&quot;slidesToShow&quot;: 4, &quot;slidesToScroll&quot;: 4}}, {&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 1040, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 767, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}}]}">
              
                  <?php

                  if ($result->num_rows > 0) {
                          
                      while ($row = $result->fetch_assoc()) {

                        $precios_similare = get_precios_similares($row["Price"]);
                        
                          while ($precios_similares = $precios_similare->fetch_assoc()) { 
                          
                        ?>

                          <a href="https://automarketpanama.com/dev/public/detail?placa=<?php echo $precios_similares['LicensePlate']; ?>">
                              <div class="b-goods-f b-goods-f_mod-a" style="border-radius:10px;">
                                  <div class="b-team__media"> <!-- b-goods-f__media -->
                                      <img class="b-goods-f__img img-scale" draggable="false" width="445" height="333.75" src="<?php echo $precios_similares["Photo"]; ?>" alt="foto" />
                                  </div>
                                  <div class="b-goods-f__main">
                                      <div class="b-goods-f__descrip">
                                          <div class="">
                                              <span>
                                                  <b>
                                                  <h3 class="ui-title" style="margin:-10px;"><span style="color:#1b3b72;"><?php echo number_format($precios_similares["Price"], 2); ?></span></h3>
                                                  <small style="font-size:10px;">Precio sin impuesto</small><br>
                                                  <h5 style="color:black;"><?php echo $precios_similares["Make"]. ' ' . $precios_similares["Model"]; ?></h5>
                                                  </b>
                                              </span>
                                          </div>
                                          <!--<div class="b-goods-f__info"></div>-->
                                          <ul class="b-goods-f__list list-unstyled">
                                              <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i><?php echo $precios_similares["Km"]; ?>km</li>
                                              <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Año: <?php echo $precios_similares["Year"]; ?></li>
                                              <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i><?php echo trim($precios_similares["Transmission"]); ?></li>
                                          </ul>
                                      </div>
                                      <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$<?php echo $precios_similares["PriceTax"]; ?></span></span>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                  <?php 
                          }

                      }
                      
                  } else {
                      echo "No se encontraron resultados";
                  } ?>
                  
              </div>
          </div>
      </section>

        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>