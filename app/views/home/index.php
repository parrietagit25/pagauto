<?php 
    $result = obtenerDatos(8);
    $seis = obtener6Mark();
    $tres = obtenerDatos(3);
    $diesiseis = obtenerDatos(16);
    $uno = obtenerDatos(1);
    $marcas = obtenerMarcas();
    $vendedores4 = obtenerVendedores(4);
    $todas_marcas = get_marcas();
    $todas_marcas_2 = get_marcas();
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


    <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200" >
    <!-- Aqui estaba el menu, la version movil y la version web -->
    <?php include(ROOT_PATH . '/app/views/partials/menu.php'); ?>

    <!-- end .header-->
            <div class="main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="700px" data-slider-arrows="false" data-slider-buttons="false">
                <div class="sp-slides">
                    <!-- Slide 1-->
                    <?php /* <div class="main-slider__slide-2 sp-slide"><img class="sp-image" src="<?php echo BASEURL; ?>media/slider/2.png" alt="slider" />
                        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                            <div class="main-slider__wrap">
                                <div class="main-slider__slogan">Descubre TODO sobre las </div>
                                <div class="main-slider__title">Land Cruiser
                                    <br>Desde $31,998</div>
                                <div class="text-right"><!--<a class="main-slider__link" href="blog-post.html">Leer mas</a>--></div>
                            </div>
                        </div>
                        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1500" data-show-delay="800" data-hide-delay="400"><img class="main-slider__figure-1 img-fluid" src="<?php echo BASEURL; ?>media/slider/3.png" alt="foto" /></div>
                        <div class="sp-layer" data-width="100%" data-show-transition="right" data-hide-transition="right" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400"><img class="main-slider__figure-2 img-fluid" src="<?php echo BASEURL; ?>media/slider/4.png" alt="foto" /></div>
                    </div>
                     */ ?>
                     <div class="main-slider__slide "><!-- sp-slide -->
                        <a href="https://automarketpanama.com/dev/public/listing">
                            <img class="sp-image desktop-image" src="<?php echo BASEURL; ?>media/slider/1.png" alt="slider" />
                            <img style="width: 100%;" class="sp-image mobile-image" src="<?php echo BASEURL; ?>media/slider/movil-slider.png" alt="slider" />
                        </a>
                        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400"></div>
                    </div>
                    <!-- Slide 2-->
                </div>
            </div>
            <!-- end .main-slider-->

            <!-- end .b-find-->
            <!-- end .b-welcome-->

            <div class="container" id="menu_movile">
                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <div class="" id="findTabContent">
                                <div class="" id="content-newCars">
                                    <form id="form_buscado_movil" class="form-buscador" method="get" action="https://automarketpanama.com/dev/public/listing">
                                        <input type="hidden" name="buscador" value="1">
                                        <div class="b-find__row">
                                            <div class="b-find__main">
                                                <div class="b-find__inner">
                                                    <div class="b-find__item">
                                                        <br>
                                                        <div class="b-find__label">Buscar</div>
                                                        <div class="b-find__label"><span class="b-find__number">01</span> Seleccionar Marca</div>
                                                        <div class="b-find__selector">
                                                            <select name="marca" class="form-control" onchange="buscar_modelo(this.value)">
                                                                <option value=''>Seleccionar</option>
                                                                <?php while ($marca = $todas_marcas_2->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $marca['Make']; ?>"><?php echo $marca['Make']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">02</span> Seleccionar Modelo</div>
                                                        <div class="b-find__selector">
                                                            <select name="modelo" data-width="100%" class="form-control" id="marca_select_movil" onchange="buscar_ubicacion(this.value)">
                                                                <option value=''>Seleccionar</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">03</span> Rango de Precio</div>
                                                        <div class="b-find__selector">
                                                            <select name="precio_max" class="form-control">
                                                                <option value=''>Seleccionar</option>
                                                                <option value="9000">Max $9,000</option>
                                                                <option value="20000">Max $20,000</option>
                                                                <option value="30000">Max $30,000</option>
                                                                <option value="50000">Max $50,000</option>
                                                                <option value="70000">Max $70,000</option>
                                                                <option value="100000">Max $100,000</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">04</span> Ubicacion</div>
                                                        <div class="b-find__selector">
                                                            <select name="ubicacion" class="form-control" id="ubicacion_select_movil">
                                                                <option value=''>Seleccionar</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <input type="submit" class="b-find__btn btn btn-primary" style="width:100%;" value="Buscar">
                                        </div>
                                    </form>
                                </div>
                                <!--<div class="tab-pane fade" id="content-usedCars">
                                    <form class="b-find__form">
                                        <div class="b-find__row">
                                            <div class="b-find__main">
                                                <div class="b-find__inner">
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">01</span> Seleccionar Marca</div>
                                                        <div class="b-find__selector">
                                                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                <option>Audi</option>
                                                                <option>BMV</option>
                                                                <option>Opel</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">02</span> Seleccionar Modelo</div>
                                                        <div class="b-find__selector">
                                                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                <option>Model 1</option>
                                                                <option>Model 2</option>
                                                                <option>Model 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="b-find__item">
                                                        <div class="b-find__label"><span class="b-find__number">03</span> Rango de Precio</div>
                                                        <div class="b-find__selector">
                                                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                                                                <option>Max $5000</option>
                                                                <option>Max $15000</option>
                                                                <option>Max $25000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="b-find__btn btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section-carousel">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="ui-title-slogan"></div>
                            <h2 class="ui-title">INVENTARIO > <span style="color:red;"> AUTOS DESTACADOS</span></h2>
                        </div>
                    </div>
                </div>



                <div class="section-carousel__inner bg-light" style="height:500px;">
                    <div class="js-slider" data-slick="{&quot;slidesToShow&quot;: 5,  &quot;slidesToScroll&quot;: 5, &quot;infinite&quot;: true, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1800, &quot;settings&quot;: {&quot;slidesToShow&quot;: 4, &quot;slidesToScroll&quot;: 4}}, {&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 1040, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 1}}, {&quot;breakpoint&quot;: 767, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}}]}">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { ?>
                                <a href="https://automarketpanama.com/dev/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
                                    <div class="b-goods-f b-goods-f_mod-a" style="border-radius:10px;">
                                        <div class="b-team__media"> <!-- b-goods-f__media -->
                                            <img class="b-goods-f__img img-scale" draggable="false" width="445" height="333.75" src="<?php echo $row["Photo"]; ?>" alt="foto" />
                                        </div>
                                        <div class="b-goods-f__main">
                                            <div class="b-goods-f__descrip">
                                                <div class="">
                                                    <span>
                                                        <b>
                                                        <h3 class="ui-title" style="margin:-10px;"><span style="color:#1b3b72;"><?php echo number_format($row["Price"], 2); ?></span></h3>
                                                        <small style="font-size:10px;">Precio sin impuesto</small><br>
                                                        <h5 style="color:black;"><?php echo $row["Make"]. ' ' . $row["Model"]; ?></h5>
                                                        </b>
                                                    </span>
                                                </div>
                                                <!--<div class="b-goods-f__info"></div>-->
                                                <ul class="b-goods-f__list list-unstyled">
                                                    <li class="b-goods-f__list-item"><i class="ic flaticon-speedometer"></i><?php echo $row["Km"]; ?>km</li>
                                                    <li class="b-goods-f__list-item"><i class="ic flaticon-car-1"></i>Año: <?php echo $row["Year"]; ?></li>
                                                    <li class="b-goods-f__list-item"><i class="ic flaticon-gearshift"></i><?php echo trim($row["Transmission"]); ?></li>
                                                </ul>
                                            </div>
                                            <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price bg-primary"><span class="b-goods-f__price-numb">$<?php echo $row["PriceTax"]; ?></span></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        <?php 
                            }
                            
                        } else {
                            echo "No se encontraron resultados";
                        } ?>
                        
                    </div>
                </div>
            </section>
            <section class="b-services section-default bg-light" style="background-color:white;">
                <div class="container">
                    <div class="row2 justify-content-center">
                        <h1 class="ui-title col-12" style="margin:-10px; color:black; text-align:center;">
                            ¡Tu próximo auto está a un solo clic!
                        </h1>
                        <br>
                        <div class="col-12 d-flex justify-content-center">
                            <a class="section-carousel__btn btn btn-primary" href="https://automarketpanama.com/dev/public/listing">
                                <i class="ic icon-list"></i> <b> VER INVENTARIO </b>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="b-bnr bg-dark">
                <div class="container">
                    <div class="row" style="text-align: center;">
                        <div class="col-xl-12">
                            <div class="b-bnr__main">
                                <h2 class="b-bnr__title" style="">¡TU PUEDES SER DUEÑO DE UN SEMINUEVO DE VERDAD!</h2>
                                <div class="text-primary">pide tu cotizacion hoy<br></div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-xl-12 d-flex justify-content-center align-items-center">
                            <div class="b-bnr__second"><!--<a class="btn btn-primary" href="https://automarketpanama.com/dev/public/listing">Ver inventario</a>-->
                                <div class="b-bnr-contacts">
                                    <div class="b-bnr-contacts__info">Contáctanos</div><a class="b-bnr-contacts__phone" href="tel:+5072792789"><i class="ic icon-call-end text-primary"></i> + 507 279-2789</a>
                                </div>
                                <div class="b-bnr-contacts">
                                    <div class="b-bnr-contacts__info">Whatsapp</div><a class="b-bnr-contacts__phone" href="https://wa.me/50769590953" target="_blank"><i class="ic material-icons text-primary"><img width="40" src="<?php echo BASEURL; ?>media/icons/whatsapp.png" alt=""></i> + 507 6959-0953</a>
                                </div>
                                <div class="b-bnr-contacts">
                                    <div class="b-bnr-contacts__info">Correo</div><a class="b-bnr-contacts__phone" href="mailto:ventas@automarketpan.com" target="_blank"><i class="ic icon-envelope text-primary"></i> ventas@automarketpan.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end .b-bnr-->
            <div class="section-progress" id="estadisticas_movil">
                <div class="container">
                    <ul class="b-progress-list row list-unstyled">
                        <li class="b-progress-list__item col-md-3">
                            <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__percent js-chart" data-percent="20"><span class="js-percent"></span><span>+</span></span><span class="b-progress-list__name">Años en el mercado</span>
                            </div>
                        </li>
                        <li class="b-progress-list__item col-md-3">
                            <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__percent js-chart" data-percent="17500"><span class="js-percent"></span></span><span class="b-progress-list__name">Autos entregados</span>
                            </div>
                        </li>
                        <li class="b-progress-list__item col-md-3">
                            <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__percent js-chart" data-percent="200"><span class="js-percent"></span></span><span class="b-progress-list__name">Autos disponibles</span>
                            </div>
                        </li>
                        <li class="b-progress-list__item col-md-3">
                            <div class="b-progress-list__wrap bg-light"><span class="b-progress-list__percent js-chart" data-percent="5"><span class="js-percent"></span><span>+</span></span><span class="b-progress-list__name">Sucursales </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <section class="bg-light" style="background-color:white;">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php echo BASEURL; ?>media/ima/city.png" alt="" srcset="">
                        </div>
                        <div class="col-6 justify-content-center" style="text-align:center;">
                        <br>
                        <br>
                            <h2 class="b-bnr-3__title ui-tilte" style="color:black;">Llévate tu seminuevo con financiamiento. </h2>
                            <div class="b-bnr-3__info"></div><a class="b-bnr-3__btn btn btn-primary" href="https://automarketpanama.com/dev/public/listing">Aplica aqui</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="b-gallery js-slider" data-slick="{&quot;slidesToShow&quot;: 8, &quot;arrows&quot;: false, &quot;autoplay&quot;: true,  &quot;slidesToScroll&quot;: 1, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 6, &quot;slidesToScroll&quot;: 3}}, {&quot;breakpoint&quot;: 768, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1}}]}">
                <?php if ($diesiseis->num_rows > 0) {
                    while ($row = $diesiseis->fetch_assoc()) { ?>
                    <a href="https://automarketpanama.com/dev/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
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
            <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
      </div>
    </div>
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>

