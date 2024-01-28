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
                     <div class="main-slider__slide sp-slide"><a href="https://automarketpanama.com/dev/public/listing"><img class="sp-image" src="<?php echo BASEURL; ?>media/slider/1.png" alt="slider" /></a>
                        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                           
                        </div>
                    </div>
                    <div class="main-slider__slide sp-slide"><a href="https://automarketpanama.com/dev/public/listing"><img class="sp-image" src="<?php echo BASEURL; ?>media/slider/1.png" alt="slider" /></a>
                        <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                            <!--<div class="main-slider__wrap">
                                <div class="main-slider__slogan">luxury unleashed</div>
                                    <div class="main-slider__title">MAZDA<span class="main-slider__title_lg text-right">CX3<span class="main-slider__title">’19</span></span>
                                </div>
                                <div class="text-center">
                                    <div class="main-slider__price"><span class="main-slider__price_up">$</span>249<span class="main-slider__price_down">/m</span><span class="main-slider__price_info">for 24 months</span></div>
                                </div>
                                <div class="text-right"><a class="main-slider__link" href="blog-post.html">learn more</a></div>
                            </div>-->
                        </div>
                    </div>
                    <!-- Slide 2-->
                    
                </div>
            </div>
            <!-- end .main-slider-->
            <div class="section-area bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="b-find">
                                <!--<ul class="b-find-nav nav nav-tabs" id="findTab" role="tablist">
                                    <li class="b-find-nav__item nav-item"><a class="b-find-nav__link nav-link active" id="tab-allCar" data-toggle="tab" href="#content-allCar" role="tab" aria-controls="content-allCar" aria-selected="true">Elige tu próximo auto</a></li>
                                    <li class="b-find-nav__item nav-item"><a class="b-find-nav__link nav-link" id="tab-newCars" data-toggle="tab" href="#content-newCars" role="tab" aria-controls="content-newCars" aria-selected="false">Autos Seminuevos</a></li>
                                    <li class="b-find-nav__item nav-item"><a class="b-find-nav__link nav-link" id="tab-usedCars" data-toggle="tab" href="#content-usedCars" role="tab" aria-controls="content-usedCars" aria-selected="false">Autos Usados</a></li>
                                </ul> -->
                                <div class="b-find-content tab-content" id="findTabContent">
                                    <?php /*
                                    <div class="tab-pane fade show active" id="content-allCar">
                                        <form id="form_buscado" class="b-find__form" method="get" action="https://automarketpanama.com/dev/public/listing">
                                            <div class="b-find__row">
                                                <div class="b-find__main">
                                                    <div class="b-find__inner">
                                                        <input type="hidden" name="buscador" value="1">
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">01</span> Seleccionar Marca</div>
                                                            <div class="b-find__selector">
                                                                <select name="marca" class="selectpicker" data-width="100%" data-style="ui-select" onchange="buscar_modelo(this.value)">
                                                                    <option value=''>Seleccionar</option>
                                                                    <?php while ($marca = $todas_marcas->fetch_assoc()) { ?>
                                                                        <option value="<?php echo $marca['Make']; ?>"><?php echo $marca['Make']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">02</span> Seleccionar Modelo</div>
                                                            <div class="b-find__selector">
                                                                <select name="modelo" data-width="100%" class="form-control" id="marca_select">
                                                                    <option value=''>Seleccionar</option>
                                                                    <?php /* while ($modelos = $todos_modelos->fetch_assoc()) { ?>
                                                                        <option value="<?php echo $modelos['Model']; ?>"><?php echo $modelos['Model']; ?></option>
                                                                    <?php } */  /* ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="b-find__item">
                                                            <div class="b-find__label"><span class="b-find__number">03</span> Rango de Precio</div>
                                                            <div class="b-find__selector">
                                                                <select name="precio_max" class="selectpicker" data-width="100%" data-style="ui-select">
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
                                                    </div>
                                                </div>
                                                <input type="submit" class="b-find__btn btn btn-primary" value="Buscar">
                                            </div>
                                            <!--<div class="b-find__checkbox-group"><span class="b-find__checkbox-item">
                                                <input class="forms__check" id="newCars" type="checkbox" checked="checked"/>
                                                <label class="forms__label forms__label-check" for="newCars">New Cars</label></span><span class="b-find__checkbox-item">
                                                <input class="forms__check" id="usedCars" type="checkbox"/>
                                                <label class="forms__label forms__label-check" for="usedCars">Used Cars</label></span>
                                            </div>-->
                                        </form>
                                    </div> */ ?>
                                    <div class="tab-pane fade" id="content-newCars">
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
                                            <!--<div class="b-find__checkbox-group"><span class="b-find__checkbox-item">
                            <input class="forms__check" id="newCars2" type="checkbox" checked="checked"/>
                            <label class="forms__label forms__label-check" for="newCars2">New Cars</label></span><span class="b-find__checkbox-item">
                            <input class="forms__check" id="usedCars2" type="checkbox"/>
                            <label class="forms__label forms__label-check" for="usedCars2">Used Cars</label></span></div>-->
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="content-usedCars">
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
                                             <!--<div class="b-find__checkbox-group">
                                                <span class="b-find__checkbox-item">
                                               
                                                <input class="forms__check" id="newCars3" type="checkbox" checked="checked"/>
                                                <label class="forms__label forms__label-check" for="newCars3">New Cars</label></span><span class="b-find__checkbox-item">
                                                <input class="forms__check" id="usedCars3" type="checkbox"/>
                                                <label class="forms__label forms__label-check" for="usedCars3">Used Cars</label>
                                                </span>
                                            </div>-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .b-find-->
            <?php /*
            <section class="b-welcome section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="ui-title-slogan"><!--Te ayudamos a encontrar tu próximo vehículo fácilmente--></div>
                            <h2 class="ui-title"> <span style="color:#1b3b72;">Sobre Nosotros</span></h2>
                            <p>En Automarket Panamá nos dedicamos a la compra y venta de autos seminuevos con más de 20 años de experiencia en el mercado. Con nosotros puedes vender y comprar tu auto de manera rápida, transparente y segura. </p>
                            <p>Encontrarás una amplia variedad de modelos de autos seminuevos que se adapten a tus necesidades. Desde sedanes seminuevos, SUV seminuevas, camionetas pickup seminuevas, hasta autos de lujo, tenemos opciones para cada estilo de vida. También contamos con una amplia variedad de autos comerciales para aquellos  emprendedores y negocios que buscan la combinación perfecta de confiabilidad y eficiencia para impulsar su éxito. </p>
                            <p>Nuestro propósito es transformar tu necesidad de movilidad en comodidad ofreciendo:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-7">
                            <ul class="b-welcome-list list-unstyled d-sm-flex justify-content-around">
                                <li class="b-welcome-list__item flex-fill"><i class="ic flaticon-car"></i>Opciones de financiamientos 
                                    <br> y seguros</li>
                                <li class="b-welcome-list__item flex-fill"><i class="ic flaticon-gearbox"></i>Procesos seguros 
                                    <br> y transparentes </li>
                                <li class="b-welcome-list__item flex-fill"><i class="ic flaticon-wrench"></i>Mejores ofertas 
                                    <br> y promociones </li>
                                <li class="b-welcome-list__item flex-fill"><i class="ic flaticon-wrench"></i>Calidad y variedad  
                                    <br> de autos </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section> */ ?>
            <!-- end .b-welcome-->
            <section class="section-carousel">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="ui-title-slogan"><!--TE AYUDAMOS A ENCONTRAR TU PRÓXIMO VEHICULO FÁCILMENTE--></div>
                            <h2 class="ui-title" style="color:red;">Autos <span > Destacados</span></h2>
                        </div>
                    </div>
                </div>
                <div class="section-carousel__inner bg-dark">
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

            <!-- end .b-carousel-->
            <?php /* ?>
            <section class="b-services section-default bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="b-services-nav nav" id="servicesTab" role="tablist">
                                <!--<li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link active" id="repairing-tab" data-toggle="tab" href="#repairing" role="tab" aria-controls="repairing" aria-selected="true"><span class="b-services-nav__number">01</span><i class="ic flaticon-car-door"></i><span class="b-services-nav__info">Parts Repairing</span></a></li>-->
                                <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="inspection-tab" data-toggle="tab" href="#inspection" role="tab" aria-controls="inspection" aria-selected="false"><span class="b-services-nav__number"></span><i class="ic flaticon-plunger"></i><span class="b-services-nav__info">Inspeccion</span></a></li>
                                <!--<li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="trade-tab" data-toggle="tab" href="#trade" role="tab" aria-controls="trade" aria-selected="false"><span class="b-services-nav__number">03</span><i class="ic flaticon-car-2"></i><span class="b-services-nav__info">Trade-In</span></a></li>-->
                                <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="painting-tab" data-toggle="tab" href="#painting" role="tab" aria-controls="painting" aria-selected="false"><span class="b-services-nav__number"></span><i class="ic flaticon-paint-roller"></i><span class="b-services-nav__info">Pintura</span></a></li>
                                <li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="financing-tab" data-toggle="tab" href="#financing" role="tab" aria-controls="financing" aria-selected="false"><span class="b-services-nav__number"></span><i class="ic flaticon-money"></i><span class="b-services-nav__info">Finaciamiento</span></a></li>
                                <!--<li class="b-services-nav__item nav-item col-lg-6 col-md-4"><a class="b-services-nav__link nav-link" id="delivery-tab" data-toggle="tab" href="#delivery" role="tab" aria-controls="delivery" aria-selected="false"><span class="b-services-nav__number">06</span><i class="ic flaticon-car-4"></i><span class="b-services-nav__info">Vehicle Delivery</span></a></li>-->
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="b-services__main">
                                <div class="ui-title-slogan"><!--TE AYUDAMOS A ENCONTRAR TU PRÓXIMO VEHICULO FÁCILMENTE--></div>
                                <h2 class="ui-title">Servicios que <span class="text-primary"> Ofrecemos</span></h2>
                                <div class="b-services-content tab-content" id="servicesTabContent">

                                    <!--<div class="b-services-content__item tab-pane fade show active" id="repairing" role="tabpanel" aria-labelledby="repairing-tab"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-services/1.jpg" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Parts Repairing</h3>
                                        <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                    </div>-->

                                    <div class="b-services-content__item tab-pane fade" id="inspection" role="tabpanel" aria-labelledby="inspection-tab"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-services/1.jpg" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Inspeccion</h3>
                                        <p>La inspección de vehículos es crucial para la seguridad y el cumplimiento normativo. Incluye revisión de frenos, luces, neumáticos y emisiones. Nuestros expertos garantizan que su coche cumpla con los estándares de seguridad. Ofrecemos también consejos para el mantenimiento preventivo. Nos comprometemos a brindar un servicio confiable y de calidad, asegurando la seguridad y tranquilidad de nuestros clientes.</p>
                                    </div>
                                    
                                    <div class="b-services-content__item tab-pane fade" id="painting" role="tabpanel" aria-labelledby="painting-tab"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-services/3.jpg" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Pintura</h3>
                                        <p>El servicio de pintura de autos que ofrecemos combina calidad y precisión para darle a su vehículo un aspecto renovado. Utilizamos materiales de alta calidad y técnicas avanzadas para asegurar un acabado duradero y estéticamente atractivo. Nuestro equipo de profesionales trabaja con cuidado para igualar el color y garantizar una cobertura uniforme. Ya sea para reparar pequeños rasguños o para un cambio completo de color, nuestro servicio de pintura es la solución ideal para revitalizar su coche.</p>
                                    </div>
                                    <div class="b-services-content__item tab-pane fade" id="financing" role="tabpanel" aria-labelledby="financing-tab"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-services/4.jpg" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Finaciamiento</h3>
                                        <p>Nuestro servicio de financiamiento de autos en colaboración con bancos líderes ofrece soluciones accesibles para adquirir el vehículo de sus sueños. Facilitamos el proceso de solicitud de préstamo, trabajando estrechamente con instituciones financieras de confianza para obtener las mejores tasas y condiciones. Ofrecemos asesoramiento personalizado para elegir el plan de financiamiento más adecuado a su situación económica, garantizando transparencia y facilidad en cada paso. Con nuestro apoyo, la compra de su nuevo coche es más sencilla y asequible.</p>
                                    </div>
                                    <!--
                                    
                                    <div class="b-services-content__item tab-pane fade" id="trade" role="tabpanel" aria-labelledby="trade-tab"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-services/2.jpg" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Trade-In</h3>
                                        <p>El Trade-In de vehículos es una opción práctica para quienes buscan renovar su coche. Evaluamos su vehículo actual y ofrecemos un valor justo para aplicarlo como parte del pago de uno nuevo. Este proceso es simple y transparente, asegurando que nuestros clientes obtengan la mejor oferta. Con nuestro Trade-In, facilitamos la actualización a un coche más nuevo, brindando comodidad y confianza en cada paso del proceso</p>
                                    </div>
                                    
                                    <div class="b-services-content__item tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-services/1.jpg" alt="foto" />
                                        <h3 class="b-services-content__title ui-title-sm">Vehicle Delivery</h3>
                                        <p>Edipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip comsecdo consequat duis aute irure dolorin reprehenderits. Non proident sunt in culpa qudesa officia deserunt mollit anim id est laborum.</p>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php */ ?>
            <!-- end .b-services-->
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
            <div class="section-progress">
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
            <!-- end .b-progress--><?php  /*
            <section class="b-isotope section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="ui-title-slogan"><!--TE AYUDAMOS A ENCONTRAR TU PRÓXIMO VEHICULO FÁCILMENTE--></div>
                            <h2 class="ui-title">Nuestros Vehiculos<span class="text-primary"> </span></h2>
                            <ul class="b-isotope-filter list-unstyled">
                                <li class="current"><a href="" data-filter="*">Mostrar Todos</a></li>

                                <?php if ($marcas->num_rows > 0) {
                                
                                while ($row = $marcas->fetch_assoc()) { ?>

                                <li><a href="" data-filter=".<?php echo $row["Make"]; ?>"><?php echo $row["Make"]; ?></a></li>

                                <?php }
                        
                                }  ?>

                            </ul>
                        </div>
                    </div>
                    <ul class="b-isotope-grid grid list-unstyled row">
                        <li class="grid-sizer col-lg-4 col-md-6"></li>
                        <?php if ($seis->num_rows > 0) {
                                
                                while ($row = $seis->fetch_assoc()) { ?>

                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web <?php echo $row["Make"]; ?>">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="<?php echo $row["Photo"]; ?>" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span><?php echo $row["Make"]; ?></span>
                                        </div>
                                        <div class="b-goods-f__info"></div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info"><?php echo $row["Km"]; ?>km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info"><?php echo $row["Model"]; ?></span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info"><?php echo $row["Transmission"]; ?></span></li>
                                            <!--<li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>-->
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$<?php echo number_format($row["PriceTax"], 2); ?></span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>

                        <?php   }
                        
                            }  /* ?>

                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web bmw">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="<?php echo BASEURL; ?>media/content/b-goods/360x260/2.jpg" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span class="b-goods-f__label bg-primary">NEW</span><span>Volkswagen Tiguan</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$45,800</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web honda">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="<?php echo BASEURL; ?>media/content/b-goods/360x260/3.jpg" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span>Tesla Model RX3</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$18,250</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web rover">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="<?php echo BASEURL; ?>media/content/b-goods/360x260/4.jpg" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span>Lexus RC 3500</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$26,080</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web mercedes">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="<?php echo BASEURL; ?>media/content/b-goods/360x260/5.jpg" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span>Mercedes SX</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$66,500</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        <li class="b-isotope-grid__item grid-item col-lg-4 col-md-6 web bmw">
                            <div class="b-goods-f b-goods-f_dark">
                                <div class="b-goods-f__media">
                                    <a href="#"><img class="b-goods-f__img img-scale" src="<?php echo BASEURL; ?>media/content/b-goods/360x260/6.jpg" alt="foto" /></a>
                                </div>
                                <div class="b-goods-f__main">
                                    <div class="b-goods-f__descrip">
                                        <div class="b-goods-f__title"><span>Porsche 911 Targa</span>
                                        </div>
                                        <div class="b-goods-f__info">Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip.</div>
                                        <ul class="b-goods-f__list list-unstyled">
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">35,000km</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">2019</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Manual</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">Petrol</span></li>
                                            <li class="b-goods-f__list-item"><span class="b-goods-f__list-info">160 hp</span></li>
                                        </ul>
                                    </div>
                                    <div class="b-goods-f__sidebar"><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price-numb">$35,700</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end .b-goods-->
                        </li>
                        <?php */ /* ?>
                    </ul>
                </div>
            </section> */ ?>
            <!-- end .b-isotope-->
            <?php /* ?>
            <section class="b-steps section-default parallax">
                <div class="b-steps__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="ui-title-slogan"><!--TE AYUDAMOS A ENCONTRAR TU PRÓXIMO VEHICULO FÁCILMENTE--></div>
                                <h2 class="ui-title">Trabajamos con grandes <span class="text-primary"> aliados</span></h2>
                                <!--<ul class="b-steps-list list-unstyled row">
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
                                        <div class="b-steps-list__info">Contácta a uno de nuestros expertos agentes hoy y encuentra el auto perfecto para ti en nuestro inventario.</div>
                                    </li>
                                    <li class="b-steps-list__item col-lg"><span class="b-steps-list__number">04</span>
                                        <div class="b-steps-list__title">Conduce tu nuevo vehiculo</div>
                                        <div class="b-steps-list__info">Conduce hacia una nueva aventura con tu vehículo elegido. Aquí, tu nuevo viaje comienza con nosotros.</div>
                                    </li>
                                </ul>--> 
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- end .b-steps-->
            <section class="b-bnr-2 section-default">
                <div class="b-bnr-2__figure"><img class="b-bnr-2__img img-fluid" src="<?php echo BASEURL; ?>media/content/b-bnr/1.png" alt="auto" /></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="b-bnr-2__section b-bnr-2__section_first bg-dark">
                                <h2 class="b-bnr-2__title">Quieres <br>comprar un auto seminuevo?</h2><a class="b-bnr-2__link" href="https://automarketpanama.com/dev/public/listing">Inicia buscando en nuestro inventario +200 vehiculos</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="b-bnr-2__section b-bnr-2__section_second bg-primary" style="color:#000 !important;">
                                <div class="b-bnr-2__title"><b>
                                    <br><br></b></div><a class="" href="https://www.toyotacertificados.com/warranty" target="_blank"> Ver todos los detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php */ ?>
            <!-- end .b-bnr-->

            <?php /* if ($uno->num_rows > 0) {
                                
                    while ($row = $uno->fetch_assoc()) { ?>

            <div class="section-goods-vip">
                <a class="" href="#"><img class="b-goods-vip_1" src="<?php echo $row["Photo"]; ?>" alt="foto" />
                    <div class="b-goods-vip__main"><span class="b-goods-vip__label b-goods-vip__label-1 bg-primary">NEW</span>
                        <div class="b-goods-vip__title">AUDI Q2L (2019)</div>
                        <div class="b-goods-vip__subtitle">LUXURTY APART -<span class="b-goods-vip__price"> $499/M</span></div>
                        <ul class="b-goods-vip__list list-unstyled">
                            <li class="b-goods-vip__list-item">2019</li>
                            <li class="b-goods-vip__list-item">Manual</li>
                            <li class="b-goods-vip__list-item">Petrol</li>
                            <li class="b-goods-vip__list-item">661 hp</li>
                        </ul>
                    </div>
                </a>
                <a class="" href="#"><img class="b-goods-vip b-goods-vip_2" src="<?php echo $row["Photo"]; ?>" alt="foto" />
                    <div class="b-goods-vip__main"><span class="b-goods-vip__label b-goods-vip__label-2 bg-primary">As Low As<strong class="b-goods-vip__label_b"> 1.5% APR</strong></span>
                        <div class="b-goods-vip__subtitle">Off-Road King</div>
                        <div class="b-goods-vip__title">JAGUAR I PACE</div>
                        <div class="b-goods-vip__slogan">Limited Time Offer</div>
                    </div>
                </a>
                <a class="b-goods-vip b-goods-vip_3" href="#"><img class="b-goods-vip b-goods-vip_3" src="<?php echo $row["Photo"]; ?>" alt="foto" />
                    <div class="b-goods-vip__main">
                        <div class="b-goods-vip__subtitle">2019 Models</div>
                        <div class="b-goods-vip__title">All Brands Cars<span class="b-goods-vip__label b-goods-vip__label-3 bg-primary">MORE POWER</span></div>
                        <div class="b-goods-vip__slogan">PREMIUM LUXURY</div>
                    </div>
                </a>
            </div>

            <?php 
                    }
                } */
            ?>
            <!-- end .b-goods-->
            <?php /* ?>
            <section class="section-team section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="ui-title-slogan"><!--Te ayudamos a buscar el vehiculo perfecto--></div>
                                <h2 class="ui-title">Nuestro equipo de <span class="text-primary"> Ventas</span></h2>
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
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="<?php echo $row["urlLocation"]; ?>" target="_blank"><i class="ic icon-location-pin"></i></a></li> */ /* ?>
                                    
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
                        
                            } ?>
                        <!--
                        <div class="col-lg-3 col-md-6">
                            <div class="b-team">
                                <div class="b-team__media">
                                    <div class="b-team__img"><img class="img-fluid" src="<?php echo BASEURL; ?>media/team/1.png" alt="Foto" /></div>
                                    <ul class="b-team__soc list-unstyled">
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                                <div class="b-team__inner bg-dark">
                                    <div class="b-team__name">Diago Johnson</div>
                                    <div class="b-team__category">Sales Manager</div>
                                </div>
                                <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="b-team">
                                <div class="b-team__media">
                                    <div class="b-team__img"><img class="img-fluid" src="<?php echo BASEURL; ?>media/team/3.png" alt="Foto" /></div>
                                    <ul class="b-team__soc list-unstyled">
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                                <div class="b-team__inner bg-dark">
                                    <div class="b-team__name">Sophia Lauren</div>
                                    <div class="b-team__category">Co-Founder</div>
                                </div>
                                <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="b-team">
                                <div class="b-team__media">
                                    <div class="b-team__img"><img class="img-fluid" src="<?php echo BASEURL; ?>media/team/4.png" alt="Foto" /></div>
                                    <ul class="b-team__soc list-unstyled">
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-facebook"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-twitter"></i></a></li>
                                        <li class="b-team__soc-item"><a class="b-team__soc-link" href="#"><i class="ic fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                                <div class="b-team__inner bg-dark">
                                    <div class="b-team__name">William Henry</div>
                                    <div class="b-team__category">Marketing</div>
                                </div>
                                <div class="b-team__footer"><a class="b-team__phone" href="tel:+17553028549"><i class="ic text-primary icon-call-end"></i> +1 755 302 8549</a></div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section> <?php */ ?>
            <!-- end .b-team-->
            <?php /* ?>
            <section class="section-reviews section-default parallax area-bg area-bg_dark">
                <div class="area-bg__inner">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <div class="ui-title-slogan"><!--Te ayudamos a encontrar el auto perfecto--></div>
                                    <h2 class="ui-title">Reseñas de nuestro clientes</h2><span class="section-reviews__decor">“</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="b-reviews-slider js-slider" data-slick="{&quot;slidesToShow&quot;: 3,  &quot;slidesToScroll&quot;: 3, &quot;centerMode&quot;: true, &quot;arrows&quot;: false, &quot;dots&quot;: true, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 1400, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 2, &quot;centerMode&quot;: false}}, {&quot;breakpoint&quot;: 768, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1, &quot;centerMode&quot;: false}}]}">
                                    <div class="b-reviews">
                                        <blockquote class="b-reviews__blockquote">
                                            <div class="b-reviews__wrap">
                                                <p>Confiable, excelente atención y sobre todo mejor precio y servicio en panamá, recomendado 100%</p>
                                            </div>
                                            <cite class="b-reviews__cite" title="Blockquote Title"><span class="b-reviews__inner"><span class="b-reviews__name">Wuendy Tapia</span><span class="b-reviews__category">Cliente</span></span><span class="b-reviews__author"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-reviews/face-2.jpg" alt="foto"/></span></cite>
                                        </blockquote>
                                    </div>
                                    <div class="b-reviews">
                                        <blockquote class="b-reviews__blockquote">
                                            <div class="b-reviews__wrap">
                                                <p>Me atendieron muy bien. Están muy cualificados para responder cualquier pregunta sobre los autos. Además tienen los autos muy bien cuidados, parecen recién salidos de la agencia. Para haber dado un año de garantía y toda la confianza del trámite de compra venta, los precios me parecen muy competitivos. El vendedor que me atendió fue Juan Estrada; tanto él como la gerente me parecen personas muy amables, comunicativas y atentas.</p>
                                            </div>
                                            <cite class="b-reviews__cite" title="Blockquote Title"><span class="b-reviews__inner"><span class="b-reviews__name">Francisco Rodriguez</span><span class="b-reviews__category">Cliente</span></span><span class="b-reviews__author"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-reviews/face-1.jpg" alt="foto"/></span></cite>
                                        </blockquote>
                                    </div>
                                    <div class="b-reviews">
                                        <blockquote class="b-reviews__blockquote">
                                            <div class="b-reviews__wrap">
                                                <p>Excelente atención del Sr. Felipe! es extraordinariamente amable, muy conocedor de su trabajo y rápido en las gestiones. Acabo de salir de ahí muy satisfecha con la gestión. Lo recomiendo!</p>
                                            </div>
                                            <cite class="b-reviews__cite" title="Blockquote Title"><span class="b-reviews__inner"><span class="b-reviews__name">Celia Llanusa</span><span class="b-reviews__category">Cliente</span></span><span class="b-reviews__author"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-reviews/face-2.jpg" alt="foto"/></span></cite>
                                        </blockquote>
                                    </div>
                                    <div class="b-reviews">
                                        <blockquote class="b-reviews__blockquote">
                                            <div class="b-reviews__wrap">
                                                <p>En este sitio puedes alquilar autos de Dollar Rent-A-Car y los puedes devolver hasta las 8 pm.  Adicionalmente, es el punto de venta de autos de segunda esta arrendadora.  Buenos precios!</p>
                                            </div>
                                            <cite class="b-reviews__cite" title="Blockquote Title"><span class="b-reviews__inner"><span class="b-reviews__name">Arturo Rebollon</span><span class="b-reviews__category">Cliente</span></span><span class="b-reviews__author"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-reviews/face-1.jpg" alt="foto"/></span></cite>
                                        </blockquote>
                                    </div>
                                    <div class="b-reviews">
                                        <blockquote class="b-reviews__blockquote">
                                            <div class="b-reviews__wrap">
                                                <p>Lugar agradable. Buen trato.</p>
                                            </div>
                                            <cite class="b-reviews__cite" title="Blockquote Title"><span class="b-reviews__inner"><span class="b-reviews__name">Teresa González</span><span class="b-reviews__category">Cliente</span></span><span class="b-reviews__author"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-reviews/face-2.jpg" alt="foto"/></span></cite>
                                        </blockquote>
                                    </div>
                                    <div class="b-reviews">
                                        <blockquote class="b-reviews__blockquote">
                                            <div class="b-reviews__wrap">
                                                <p>Es una excelente opción para comprar un auto al contado ó financiado, hay buenos precios y excelente garantía!</p>
                                            </div>
                                            <cite class="b-reviews__cite" title="Blockquote Title"><span class="b-reviews__inner"><span class="b-reviews__name">Ariel Acevedo</span><span class="b-reviews__category">Cliente</span></span><span class="b-reviews__author"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-reviews/face-1.jpg" alt="foto"/></span></cite>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php */ /* ?>
            <!-- end .b-reviews-->
            <section class="section-news section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="ui-title-slogan"><!--Te ayudamos a encontrar el auto perfecto--></div>
                                <h2 class="ui-title">Noticias &<span class="text-primary"> Artículos</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="b-post-group-2">
                        <div class="row">
                            <div class="col-md-4">
                                <section class="b-post b-post-1 clearfix">
                                    <div class="entry-media">
                                        <a href="https://www.tvn-2.com/economia/empresas/publirreportajes/panama-car-rental-celebra-dia_1_2049663.html" target="_blank"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-posts/360x280/1.jpg" alt="Foto" /></a>
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">04/28/2023</a></span><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">POR ADMIN</a></span></div>
                                            <h2 class="entry-title">Panama Car Rental Celebra el Día Internacional</h2>
                                        </div>
                                        <div class="entry-content">
                                            <p>Panama Car Rental Celebra el Día Internacional de la Seguridad y Salud en el Trabajo y se certifica con la Norma ISO 45001:2018 - PUBLIRREPORTAJES...</p>
                                        </div>
                                        <div class="entry-footer"><a class="entry-link btn-link" target="_blank" href="https://www.tvn-2.com/economia/empresas/publirreportajes/panama-car-rental-celebra-dia_1_2049663.html">Leer Articulo</a><span class="entry-views"><i class="ic icon-speech"></i> </span></div>
                                    </div>
                                </section>
                                <!-- end .post-->
                            </div>
                            <div class="col-md-4">
                                <section class="b-post b-post-1 clearfix">
                                    <div class="entry-media">
                                        <a href="https://www.prensa.com/notas-de-prensa/dollar-car-rental-y-automarket-seminuevos-reinaugura-sucursal-de-via-israel/"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-posts/360x280/2.jpg" alt="Foto" /></a>
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">10/17/2022</a></span><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">POR ADMIN</a></span></div>
                                            <h2 class="entry-title">Dollar Car Rental y Automarket Seminuevos reinaugura</h2>
                                        </div>
                                        <div class="entry-content">
                                            <p>Dollar Car Rental y Automarket Seminuevos reinaugura sucursal de Vía Israel | La Prensa Panamá. El pasado 11 de octubre, Grupo Panama Car Rental, celebró la reinauguració ...</p>
                                        </div>
                                        <div class="entry-footer"><a class="entry-link btn-link" target="_blank" href="https://www.prensa.com/notas-de-prensa/dollar-car-rental-y-automarket-seminuevos-reinaugura-sucursal-de-via-israel/">Leer Articulo</a><span class="entry-views"><i class="ic icon-speech"></i> </span></div>
                                    </div>
                                </section>
                                <!-- end .post-->
                            </div>
                            <div class="col-md-4">
                                <section class="b-post b-post-1 clearfix">
                                    <div class="entry-media">
                                        <a href="https://radiopanama.com.pa/colocacion-de-primera-piedra-centro-y-taller-panama-oeste-panama-car-rental/"><img class="img-fluid" src="<?php echo BASEURL; ?>media/content/b-posts/360x280/3.jpg" alt="Foto" /></a>
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <div class="entry-meta"><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">09/23/2022</a></span><span class="entry-meta__item"><a class="entry-meta__link" href="blog-main.html">POR ADMIN</a></span></div>
                                            <h2 class="entry-title">Colocación de primera piedra: Centro y Taller Panamá Oeste</h2>
                                        </div>
                                        <div class="entry-content">
                                            <p>Colocación de primera piedra: Centro y Taller Panamá Oeste Panama Car Rental. Panama Car Rental, empresa líder en la industria automotriz con más de 19 años en el mercado...</p>
                                        </div>
                                        <div class="entry-footer"><a class="entry-link btn-link" target="_blank" href="https://radiopanama.com.pa/colocacion-de-primera-piedra-centro-y-taller-panama-oeste-panama-car-rental/">Leer Articulo</a><span class="entry-views"><i class="ic icon-speech"></i> </span></div>
                                    </div>
                                </section>
                                <!-- end .post-->
                            </div>
                        </div>
                    </div>
                </div>
            </section> <?php */ ?>
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


            <!-- end .b-bnr-->
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
            <!-- end .b-gallery-->
            <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
    
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>

