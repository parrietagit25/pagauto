<?php $todos_carros = all_car('','','','','','','',''); ?>
<?php $todas_marcas = get_marcas(); ?>
<?php $todos_modelos = get_modelos(); ?>
<?php $tipo_carro = get_tipo_carro(); ?>
<?php $anio_desde = get_from_year(); ?>
<?php $anio_hasta = get_to_year(); ?>
<?php $all_transmision = get_transmision(); ?>
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
                        <li class="breadcrumb-item"><a href="home.html">Inicio</a></li>
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
                    <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>Buscar Auto</h3>
                    <div class="widget-content">
                      <div class="widget-inner">
                        <form id="buscar" class="b-filter bg-light">
                          <div class="b-filter__main">
                            <div class="b-filter__row">
                              <select class="selectpicker" name="marca" data-width="100%" title="Seleccionar Marca" multiple="multiple" data-max-options="1" data-style="ui-select">
                                <?php while ($marca = $todas_marcas->fetch_assoc()) { ?>
                                <option value="<?php echo $marca['Make']; ?>"><?php echo $marca['Make']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="b-filter__row">
                              <select class="selectpicker" name="modelo" data-width="100%" title="Seleccionar Modelo" multiple="multiple" data-max-options="1" data-style="ui-select">
                                <?php while ($modelos = $todos_modelos->fetch_assoc()) { ?>
                                <option value="<?php echo $modelos['Model']; ?>"><?php echo $modelos['Model']; ?></option>
                                <?php } ?>
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
                            </div>
                          </div>
                          <button class="b-filter__reset btn btn-default w-100" type="button">Limpiar Filtros</button>
                          <button class="btn btn-primary w-100">Buscar</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- end .b-filter-->
                  <section class="widget b-brands section-sidebar">
                    <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>Marcas Populares</h3>
                    <div class="widget-content">
                      <div class="b-brands__main d-flex flex-wrap"><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/1.png" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/2.png" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/3.png" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/4.png" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/5.png" alt="foto"/></a><a class="b-brands__item" href="home.html"><img class="b-brands__img img-fluid" src="assets/media/content/b-brands/6.png" alt="foto"/></a></div>
                    </div>
                  </section>
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

                      <div class="b-goods-f col-lg-4 col-md-6">
                          <div class="b-goods-f__media">
                              <a href="https://automarketpanama.com/devtest/ultimos/public/detail?placa=<?php echo $row['LicensePlate']; ?>"><img width="330" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/></a>
                              <span class="b-goods-f__media-inner">
                                  <span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span>
                                  <span class="b-goods-f__label bg-primary">NEW</span>
                              </span>
                          </div>
                          <div class="b-goods-f__main">
                              <div class="b-goods-f__descrip">
                                  <div class="b-goods-f__title"><?php echo $row['Make'].' '.$row['Model']; ?></div>
                                  <div class="b-goods-f__info"></div>
                                  <ul class="b-goods-f__list list-unstyled">
                                  <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Km :</span><span class="b-goods-f__list-info"><?php echo $row['Km']; ?>km</span></li>
                                  <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Model :</span><span class="b-goods-f__list-info"><?php echo $row['Model']; ?></span></li>
                                  <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmision :</span><span class="b-goods-f__list-info"><?php echo $row['Transmission']; ?></span></li>
                                  <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Tipo :</span><span class="b-goods-f__list-info"><?php echo $row['CarType']; ?></span></li>
                                  <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Color :</span><span class="b-goods-f__list-info"><?php echo $row['Color']; ?></span></li>
                                  </ul>
                              </div>
                              <div class="b-goods-f__sidebar"><a class="b-goods-f__bnr" href="#"><img src="assets/media/content/b-goods/auto-check.png" alt="auto check"/></a><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">$<?php echo number_format($row["PriceTax"], 2); ?></span></span></span>
                              </div>
                          </div>
                      </div>

                      <?php } 

                        }
                      
                    }elseif(isset($_GET['buscador'])){

                      $todos_carros = all_car($_GET['marca'], $_GET['modelo'], '', '', '', '', '', $_GET['precio_max']);

                      if ($todos_carros->num_rows > 0) {
                              
                          while ($row = $todos_carros->fetch_assoc()) { ?>

                      <div class="b-goods-f col-lg-4 col-md-6">
                          <div class="b-goods-f__media">
                              <a href="https://automarketpanama.com/devtest/ultimos/public/detail?placa=<?php echo $row['LicensePlate']; ?>"><img width="330" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/></a>
                              <span class="b-goods-f__media-inner">
                                  <span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span>
                                  <span class="b-goods-f__label bg-primary">NEW</span>
                              </span>
                          </div>
                          <div class="b-goods-f__main">
                              <div class="b-goods-f__descrip">
                                  <div class="b-goods-f__title"><?php echo $row['Make'].' '.$row['Model']; ?></div>
                                  <div class="b-goods-f__info"></div>
                                  <ul class="b-goods-f__list list-unstyled">
                                  <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Km :</span><span class="b-goods-f__list-info"><?php echo $row['Km']; ?>km</span></li>
                                  <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Model :</span><span class="b-goods-f__list-info"><?php echo $row['Model']; ?></span></li>
                                  <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmision :</span><span class="b-goods-f__list-info"><?php echo $row['Transmission']; ?></span></li>
                                  <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Tipo :</span><span class="b-goods-f__list-info"><?php echo $row['CarType']; ?></span></li>
                                  <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Color :</span><span class="b-goods-f__list-info"><?php echo $row['Color']; ?></span></li>
                                  </ul>
                              </div>
                              <div class="b-goods-f__sidebar"><a class="b-goods-f__bnr" href="#"><img src="assets/media/content/b-goods/auto-check.png" alt="auto check"/></a><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">$<?php echo number_format($row["PriceTax"], 2); ?></span></span></span>
                              </div>
                          </div>
                      </div>

                      <?php } 

                        }
                    
                    }else{

                        if ($todos_carros->num_rows > 0) {
                                
                            while ($row = $todos_carros->fetch_assoc()) { ?>

                        <div class="b-goods-f col-lg-4 col-md-6">
                            <div class="b-goods-f__media">
                                <a href="https://automarketpanama.com/devtest/ultimos/public/detail?placa=<?php echo $row['LicensePlate']; ?>"><img width="330" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/></a>
                                <span class="b-goods-f__media-inner">
                                    <span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span>
                                    <span class="b-goods-f__label bg-primary">NEW</span>
                                </span>
                            </div>
                            <div class="b-goods-f__main">
                                <div class="b-goods-f__descrip">
                                    <div class="b-goods-f__title"><?php echo $row['Make'].' '.$row['Model']; ?></div>
                                    <div class="b-goods-f__info"></div>
                                    <ul class="b-goods-f__list list-unstyled">
                                    <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Km :</span><span class="b-goods-f__list-info"><?php echo $row['Km']; ?>km</span></li>
                                    <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Model :</span><span class="b-goods-f__list-info"><?php echo $row['Model']; ?></span></li>
                                    <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmision :</span><span class="b-goods-f__list-info"><?php echo $row['Transmission']; ?></span></li>
                                    <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Tipo :</span><span class="b-goods-f__list-info"><?php echo $row['CarType']; ?></span></li>
                                    <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Color :</span><span class="b-goods-f__list-info"><?php echo $row['Color']; ?></span></li>
                                    </ul>
                                </div>
                                <div class="b-goods-f__sidebar"><a class="b-goods-f__bnr" href="#"><img src="assets/media/content/b-goods/auto-check.png" alt="auto check"/></a><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">$<?php echo number_format($row["PriceTax"], 2); ?></span></span></span>
                                </div>
                            </div>
                        </div>

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
        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?> 
      </div>
    </div>
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>