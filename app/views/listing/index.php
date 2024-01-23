<?php $todos_carros = all_car('','','','','','','',''); ?>
<?php $todas_marcas = get_marcas(); ?>
<?php $todos_modelos = get_modelos(); ?>
<?php $tipo_carro = get_tipo_carro();
      $tipo_carro2 = get_tipo_carro(); ?>
<?php $tipo_carro3 = get_tipo_carro(); ?>
<?php $anio_desde = get_from_year(); ?>
<?php $anio_desde2 = get_from_year(); ?>
<?php $anio_hasta = get_to_year(); ?>
<?php $marcas_filtros = get_marcas_filtros(); ?>
<?php $all_transmision = get_transmision(); ?>
<?php $filtro_ubicacion = get_ubicacion_filtro(); ?>
<?php // paginador 

$total_registros = otal_registros();
$registros_por_pagina = 9;
$numero_paginas = ceil($total_registros / $registros_por_pagina);
$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$pagina_actual = max($pagina_actual, 1);
$pagina_actual = min($pagina_actual, $numero_paginas);
$inicio = ($pagina_actual - 1) * $registros_por_pagina;
$registros_pag_actual = reg_pag_actual();

?>
<?php include(ROOT_PATH . '/app/views/partials/header.php'); ?>
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
      <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        <?php include(ROOT_PATH . '/app/views/partials/menu.php'); ?>
        <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col offset-lg-3">
                  <div class="b-title-page__wrap">
                    <h1 class="b-title-page">Inventario</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://automarketpanama.com/public/">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inventario</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="l-main-content">
          <div class="container">
            <div class="row">

              <div class="col-lg-3">
                <aside class="l-sidebar">
                  <div class="widget section-sidebar bg-light">
                    <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>FILTRAR POR</h3>
                    <div class="widget-content">
                      <div class="widget-inner">
                        <form id="buscar" class="b-filter bg-light">
                          <div class="b-filter__main">
                            <?php /*
                            <div class="b-filter__row">
                              <select class="selectpicker" name="marca" data-width="100%" title="Seleccionar Marca" multiple="multiple" data-max-options="1" data-style="ui-select" onchange="buscar_modelo(this.value)">
                                <?php while ($marca = $todas_marcas->fetch_assoc()) { ?>
                                <option value="<?php echo $marca['Make']; ?>"><?php echo $marca['Make']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="b-filter__row">
                              <select class="form-control" id="marca_select" name="modelo" data-width="100%" title="Seleccionar Modelo" data-max-options="1" data-style="ui-select">
                                <option value="">Seleccionar</option>
                                <?php /* while ($modelos = $todos_modelos->fetch_assoc()) { ?>
                                <option value="<?php echo $modelos['Model']; ?>"><?php echo $modelos['Model']; ?></option>
                                <?php } */ /* ?>
                              </select>
                            </div>
                            <div class="b-filter__row">
                              <select class="selectpicker" name="tipo_vehiculo" data-width="100%" title="Tipo de vehiculo" multiple="multiple" data-max-options="1" data-style="ui-select">
                                <?php while ($tipo = $tipo_carro->fetch_assoc()) { ?>
                                <option value="<?php echo $tipo['CarType']; ?>"><?php echo $tipo['CarType']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="b-filter__row row">
                              <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                <select class="selectpicker" name="desde" data-width="100%" title="Desde" multiple="multiple" data-max-options="1" data-style="ui-select">
                                  <?php while ($desde = $anio_desde->fetch_assoc()) { ?>
                                  <option value="<?php echo $desde['Year']; ?>"><?php echo $desde['Year']; ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                              <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                <select class="selectpicker" name="hasta" data-width="100%" title="Hasta" multiple="multiple" data-max-options="1" data-style="ui-select">
                                  <?php while ($hasta = $anio_hasta->fetch_assoc()) { ?>
                                  <option value="<?php echo $hasta['Year']; ?>"><?php echo $hasta['Year']; ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                            </div>
                            <div class="b-filter__row">
                              <select class="selectpicker" name="transmision" data-width="100%" title="Transmision" multiple="multiple" data-max-options="1" data-style="ui-select">
                                <?php while ($transmision = $all_transmision->fetch_assoc()) { ?>
                                  <option value="<?php echo $transmision['Transmission']; ?>"><?php echo $transmision['Transmission']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                            <?php */ /* ?>
                          </div>
                          <div class="b-filter-slider ui-filter-slider">
                            <div class="b-filter-slider__title">Precio</div>
                            <div class="b-filter-slider__main">
                              <div id="filterPrice"></div>
                              <div class="b-filter__row row">
                                <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                  <input class="ui-select" id="input-with-keypress-0" name="min"/>
                                </div>
                                <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                                  <input class="ui-select" id="input-with-keypress-1" name="max"/>
                                </div>
                              </div>
                            </div> <?php */ ?>
                            <div class="b-filter__row">
                            <h2>Marca</h2>
                            
                            <?php while ($marca = $marcas_filtros->fetch_assoc()) { ?>
                              <a href="<?php echo $marca['Make']; ?>"><?php echo $marca['Make']; ?> (<?php echo $marca['contar']; ?>) </a> </br>
                            <?php } ?>

                            <h2>Categoria</h2>

                            <?php while ($tipo_carro_filtro = $tipo_carro3->fetch_assoc()) { ?>
                              <a href="<?php echo $tipo_carro_filtro['CarType']; ?>"><?php echo $tipo_carro_filtro['CarType']; ?> (<?php echo $tipo_carro_filtro['contar']; ?>) </a> </br>
                            <?php } ?>

                            <h2>Año</h2>

                            <?php while ($anio_filtro = $anio_desde2->fetch_assoc()) { ?>
                              <a href="<?php echo $anio_filtro['Year']; ?>"><?php echo $anio_filtro['Year']; ?> </a> </br>
                            <?php } ?>

                            <h2>Ubicacion</h2>

                            <?php while ($ubicacion_filtro = $filtro_ubicacion->fetch_assoc()) { ?>
                              <a href="<?php echo $ubicacion_filtro['LocationName']; ?>"><?php echo $ubicacion_filtro['LocationName']; ?> </a> </br>
                            <?php } ?>

                            <h2>Precio</h2>

                            <a href="">10,000 a 29,999</a> <br>
                            <a href="">30,000 a 59,999</a> <br>
                            <a href="">60,000 a 89,999</a> <br>
                            <a href="">90,000 a 150,000</a>

                            </div>

                          </div>
                          <!--<button class="b-filter__reset btn btn-default w-100" type="button">Limpiar Filtros</button>
                          <button class="btn btn-primary w-100">Buscar</button>-->
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- end .b-filter--><?php /* ?>
                  <section class="widget b-brands section-sidebar">
                    <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>Marcas Populares</h3>
                    <div class="widget-content">
                      <div class="b-brands__main d-flex flex-wrap">
                        <!--<a class="b-brands__item" href="https://automarketpanama.com/public/listing?marca=HONDA&menu=1">
                          <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/1.png" alt="foto"/>
                        </a>
                        <a class="b-brands__item" href="https://automarketpanama.com/public/listing?marca=HYUNDAI&menu=1">
                          <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/2.png" alt="foto"/>
                        </a>
                        <a class="b-brands__item" href="https://automarketpanama.com/public/listing?marca=KIA&menu=1">
                          <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/3.png" alt="foto"/>
                        </a>
                        <a class="b-brands__item" href="https://automarketpanama.com/public/listing?marca=LAND ROVER&menu=1">
                          <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/4.png" alt="foto"/>
                        </a>
                        <a class="b-brands__item" href="https://automarketpanama.com/public/listing?marca=NISSAN&menu=1">
                          <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/5.png" alt="foto"/>
                        </a>
                        <a class="b-brands__item" href="https://automarketpanama.com/public/listing?marca=TOYOTA&menu=1">
                          <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/6.png" alt="foto"/>
                        </a> -->


                        <a class="b-brands__item" href="#" data-marca="HONDA" data-menu="1">
                            <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/1.png" alt="foto"/>
                        </a>
                        <a class="b-brands__item" href="#" data-marca="HYUNDAI" data-menu="1">
                            <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/2.png" alt="foto"/>
                        </a>
                        <a class="b-brands__item" href="#" data-marca="KIA" data-menu="1">
                            <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/3.png" alt="foto"/>
                        </a>
                        <!--<a class="b-brands__item" href="#" data-marca="LAND ROVER" data-menu="1">
                            <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/4.png" alt="foto"/>
                        </a>-->
                        <a class="b-brands__item" href="#" data-marca="NISSAN" data-menu="1">
                            <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/5.png" alt="foto"/>
                        </a>
                        <a class="b-brands__item" href="#" data-marca="TOYOTA" data-menu="1">
                            <img class="b-brands__img img-fluid" src="assets/media/content/b-brands/6.png" alt="foto"/>
                        </a>
                      </div>
                    </div>
                  </section> <?php */ ?>
                </aside>
              </div>

              <div class="col-lg-9">
                <div class="b-filter-goods">
                  <div class="row justify-content-between align-items-center">
                    <div class="b-filter-goods__wrap col-auto">
                      <div class="b-filter-goods__select">
                        <!--<select class="selectpicker" data-width="100%" title="Newest First" multiple="multiple" data-max-options="1" data-style="ui-select">
                          <option>A-Z</option>
                          <option>Z-A</option>
                        </select> -->
                      </div>
                    </div>
                    <div class="b-filter-goods__info col-auto"><!-- Showing results<strong> 1 to 10</strong> of total<strong> 145</strong> --></div>
                    <div class="btns-switch col-auto"><i class="btns-switch__item js-view-list ic fa fa-th-list"></i><i class="btns-switch__item js-view-th active ic fa fa-th"></i></div>
                  </div>
                </div>
                <main class="b-goods-group row" id="autos_resul">
                  <!--<spam id="autos_resul"> -->
                  
                  <?php if(isset($_GET['menu']) && isset($_GET['tipo_auto'])){

                      $todos_carros = all_car('', '', $_GET['tipo_auto'], '', '', '', '', '');

                      if ($todos_carros->num_rows > 0) {
                              
                          while ($row = $todos_carros->fetch_assoc()) { ?>

                              <a href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
                                <div class="b-goods-f col-lg-4 col-md-6">
                                    <div class="b-team__media"><!--b-goods-f__media-->
                                        <img width="262" height="196" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/>
                                        <span class="b-goods-f__media-inner">
                                            <!--<span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span>
                                            <span class="b-goods-f__label bg-primary">NEW</span>-->
                                        </span>
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
                                            <div class="b-goods-f__info"></div>
                                            <ul class="list-unstyled">
                                              <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Km :</span><span class="b-goods-f__list-info"><?php echo $row['Km']; ?>km</span></li>
                                              <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Año :</span><span class="b-goods-f__list-info"><?php echo $row['Year']; ?></span></li>
                                              <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmision :</span><span class="b-goods-f__list-info"><?php echo $row['Transmission']; ?></span></li>
                                            </ul>
                                        </div>
                                        <div class="b-goods-f__sidebar">
                                          <a class="b-goods-f__bnr" href="#">
                                            <img src="assets/media/content/b-goods/auto-check.png" alt="auto check"/>
                                          </a>
                                          <span class="b-goods-f__price-group">
                                            <span class="b-goods-f__price">
                                              <span class="b-goods-f__price_col"></span>
                                              <span class="b-goods-f__price-numb"><?php // echo number_format($row["PriceTax"], 2); ?></span>
                                            </span>
                                          </span>
                                        </div>
                                    </div>
                                </div>
                              </a>

                      <?php } 

                        }
                      
                    }elseif(isset($_GET['buscador'])){

                      $todos_carros = all_car($_GET['marca'], $_GET['modelo'], '', '', '', '', '', $_GET['precio_max']);

                      if ($todos_carros->num_rows > 0) {
                              
                          while ($row = $todos_carros->fetch_assoc()) { ?>
                    

                              <a href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
                                <div class="b-goods-f col-lg-4 col-md-6">
                                    <div class="b-team__media"><!--b-goods-f__media-->
                                        <img width="262" height="196" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/>
                                        <span class="b-goods-f__media-inner">
                                            <!--<span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span>
                                            <span class="b-goods-f__label bg-primary">NEW</span>-->
                                        </span>
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
                                            <div class="b-goods-f__info"></div>
                                            <ul class="list-unstyled">
                                              <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Km :</span><span class="b-goods-f__list-info"><?php echo $row['Km']; ?>km</span></li>
                                              <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Año :</span><span class="b-goods-f__list-info"><?php echo $row['Year']; ?></span></li>
                                              <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmision :</span><span class="b-goods-f__list-info"><?php echo $row['Transmission']; ?></span></li>
                                            </ul>
                                        </div>
                                        <div class="b-goods-f__sidebar">
                                          <a class="b-goods-f__bnr" href="#">
                                            <img src="assets/media/content/b-goods/auto-check.png" alt="auto check"/>
                                          </a>
                                          <span class="b-goods-f__price-group">
                                            <span class="b-goods-f__price">
                                              <span class="b-goods-f__price_col"></span>
                                              <span class="b-goods-f__price-numb"><?php // echo number_format($row["PriceTax"], 2); ?></span>
                                            </span>
                                          </span>
                                        </div>
                                    </div>
                                </div>
                              </a>


                      <?php } 

                        }
                    
                    }else{

                        if ($todos_carros->num_rows > 0) {
                                
                            while ($row = $todos_carros->fetch_assoc()) { ?>

                              <a href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
                                <div class="b-goods-f col-lg-4 col-md-6">
                                    <div class="b-team__media"><!--b-goods-f__media-->
                                        <img width="262" height="196" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/>
                                        <span class="b-goods-f__media-inner">
                                            <!--<span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span>
                                            <span class="b-goods-f__label bg-primary">NEW</span>-->
                                        </span>
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
                                            <div class="b-goods-f__info"></div>
                                            <ul class="list-unstyled">
                                              <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Km :</span><span class="b-goods-f__list-info"><?php echo $row['Km']; ?>km</span></li>
                                              <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Año :</span><span class="b-goods-f__list-info"><?php echo $row['Year']; ?></span></li>
                                              <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmision :</span><span class="b-goods-f__list-info"><?php echo $row['Transmission']; ?></span></li>
                                            </ul>
                                        </div>
                                        <div class="b-goods-f__sidebar">
                                          <a class="b-goods-f__bnr" href="#">
                                            <img src="assets/media/content/b-goods/auto-check.png" alt="auto check"/>
                                          </a>
                                          <span class="b-goods-f__price-group">
                                            <span class="b-goods-f__price">
                                              <span class="b-goods-f__price_col"></span>
                                              <span class="b-goods-f__price-numb"><?php // echo number_format($row["PriceTax"], 2); ?></span>
                                            </span>
                                          </span>
                                        </div>
                                    </div>
                                </div>
                              </a>

                      <?php /*

                      <a href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
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
                      </a>> */ ?>


                        <?php 
                         }
                     } 
                    
                  } ?>
                  <!--</spam>-->

                </main>
                <!--<nav aria-label="Page navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span class="ic fas fa-angle-double-right" aria-hidden="true"></span></a></li>
                  </ul>
                </nav>-->
              </div>
            </div>
          </div>
        </div>


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
                        <div class="b-bnr-3__info"></div><a class="b-bnr-3__btn btn btn-primary" href="https://automarketpanama.com/public/listing">Aplica aqui</a>
                    </div>
                </div>
            </div>
        </section>
        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?> 
      </div>
    </div>
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>