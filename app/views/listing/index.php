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

$total_registros = total_registros();
$registros_por_pagina = 9;
$numero_paginas = ceil($total_registros / $registros_por_pagina);

?>
<?php include(ROOT_PATH . '/app/views/partials/header.php'); ?>
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
      <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        <?php include(ROOT_PATH . '/app/views/partials/menu2.php'); ?>
        <!--
        <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col offset-lg-3">
                  <div class="b-title-page__wrap">
                    <h1 class="b-title-page">Inventario</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://automarketpanama.com/dev/public/">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inventario</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>--> 
        <div class="container">
          <h3>INICIO > <span style="color:red;">INVENTARIO</span></h3>
        </div>

        <div class="l-main-content" style="margin-top:-90px;">
          <div class="container">
            <div class="row">

              <div class="col-lg-3">
                <aside class="l-sidebar">
                  <div class="widget section-sidebar">
                    <h3 class="widget-title bg-dark"><i class="ic flaticon-car-4"></i>FILTRAR POR</h3>
                    <div class="widget-content">
                      <div class="widget-inner">
                        <form id="buscar" class="b-filter">
                          <div class="b-filter__main">
                            <div class="b-filter__row">

                                      <div class="accordion" id="miAcordeon" style="text-align:left;">
                                        <div class="card">
                                          <div class="card-header">
                                            <h4 data-toggle="collapse" data-target="#panel1">Marca <span class="arrow-icon"></span></h4>
                                          </div>
                                          <div id="panel1" class="collapse show" data-parent="#miAcordeon"> <!-- show -->
                                            <div class="card-body">
                                              <?php while ($marca = $marcas_filtros->fetch_assoc()) { ?>
                                                  <a href="#" style="color:black;" class="filtro" data-categoria="marca" data-valor="<?php echo $marca['Make']; ?>"><?php echo $marca['Make']; ?> (<?php echo $marca['contar']; ?>) </a> <br>
                                              <?php } ?>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-header">
                                            <h4 data-toggle="collapse" data-target="#panel2">Categoria <span class="arrow-icon"></span></h4>
                                          </div>
                                          <div id="panel2" class="collapse" data-parent="#miAcordeon">
                                            <div class="card-body">
                                              <?php while ($tipo_carro_filtro = $tipo_carro3->fetch_assoc()) { ?>
                                                  <a href="#" style="color:black;" class="filtro" data-categoria="categoria" data-valor="<?php echo $tipo_carro_filtro['CarType']; ?>"><?php echo $tipo_carro_filtro['CarType']; ?> (<?php echo $tipo_carro_filtro['contar']; ?>) </a> <br>
                                              <?php } ?>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-header">
                                            <h4 data-toggle="collapse" data-target="#panel3">Año <span class="arrow-icon"></span></h4>
                                          </div>
                                          <div id="panel3" class="collapse" data-parent="#miAcordeon">
                                            <div class="card-body">
                                            <?php while ($anio_filtro = $anio_desde2->fetch_assoc()) { ?>
                                                <a href="#" style="color:black;" class="filtro" data-categoria="anio" data-valor="<?php echo $anio_filtro['Year']; ?>"><?php echo $anio_filtro['Year']; ?> </a> <br>
                                            <?php } ?>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-header">
                                            <h4 data-toggle="collapse" data-target="#panel4">Ubicación <span class="arrow-icon"></span></h4>
                                          </div>
                                          <div id="panel4" class="collapse" data-parent="#miAcordeon">
                                            <div class="card-body">
                                            <?php while ($ubicacion_filtro = $filtro_ubicacion->fetch_assoc()) { ?>
                                                <a href="#" style="color:black;" class="filtro" data-categoria="ubicacion" data-valor="<?php echo $ubicacion_filtro['LocationName']; ?>"><?php echo $ubicacion_filtro['LocationName']; ?> </a> <br>
                                            <?php } ?>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-header">
                                            <h4 data-toggle="collapse" data-target="#panel5">Precio <span class="arrow-icon"></span></h4>
                                          </div>
                                          <div id="panel5" class="collapse" data-parent="#miAcordeon">
                                            <div class="card-body">
                                              <a href="#" style="color:black;" class="filtro" data-categoria="precio" data-valor="10000-29999">10,000 a 29,999</a> <br>
                                              <a href="#" style="color:black;" class="filtro" data-categoria="precio" data-valor="30000-59999">30,000 a 59,999</a> <br>
                                              <a href="#" style="color:black;" class="filtro" data-categoria="precio" data-valor="60000-89999">60,000 a 89,999</a> <br>
                                              <a href="#" style="color:black;" class="filtro" data-categoria="precio" data-valor="90000-150000">90,000 a 150,000</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                              <!-- </div> -->
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
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
                    <div class="b-filter-goods__info col-auto"></div>
                    <div class="btns-switch col-auto"><!--<i class="btns-switch__item js-view-list ic fa fa-th-list"></i>--><i class="btns-switch__item js-view-th active ic fa fa-th"></i></div>
                  </div>
                </div>
                <main class="b-goods-group row" id="autos_resul">
                  <!--<spam id="autos_resul"> -->
                  
                  <?php if(isset($_GET['menu']) && isset($_GET['tipo_auto'])){

                      $todos_carros = all_car('', '', $_GET['tipo_auto'], '', '', '', '', '');

                      if ($todos_carros->num_rows > 0) { ?>

                          <?php while ($row = $todos_carros->fetch_assoc()) { ?>

                              <a href="https://automarketpanama.com/dev/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
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
                                                  <small style="font-size:10px; color:#333333;">Precio sin impuesto</small><br>
                                                  <h5 style="color:black;"><?php echo $row["Make"]. ' ' . $row["Model"]; ?></h5>
                                                  </b>
                                              </span>
                                            </div>
                                            <div class="b-goods-f__info"></div>
                                            <ul class="list-unstyled" style="color:#333333;">
                                              <li class="b-goods-f__list-item" style="background-color:#CCCCCC;"><span class="b-goods-f__list-title">Km :</span><span class="b-goods-f__list-info"><?php echo $row['Km']; ?>km</span></li>
                                              <li class="b-goods-f__list-item" style="background-color:#CCCCCC;"><span class="b-goods-f__list-title">Año :</span><span class="b-goods-f__list-info"><?php echo $row['Year']; ?></span></li>
                                              <li class="b-goods-f__list-item" style="background-color:#CCCCCC;"><span class="b-goods-f__list-title">Transmision :</span><span class="b-goods-f__list-info"><?php echo $row['Transmission']; ?></span></li>
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
                        <?php } ?>
                      <?php }
                      
                    }elseif(isset($_GET['buscador'])){

                      $todos_carros = all_car($_GET['marca'], $_GET['modelo'], '', '', '', '', '', $_GET['precio_max']);

                      if ($todos_carros->num_rows > 0) { ?>

                          <?php while ($row = $todos_carros->fetch_assoc()) { ?>
                              <a href="https://automarketpanama.com/dev/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
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
                                                  <small style="font-size:10px; color:#333333;">Precio sin impuesto</small><br>
                                                  <h5 style="color:black;"><?php echo $row["Make"]. ' ' . $row["Model"]; ?></h5>
                                                  </b>
                                              </span>
                                            </div>
                                            <div class="b-goods-f__info"></div>
                                            <ul class="list-unstyled" style="color:#333333;">
                                              <li class="b-goods-f__list-item" style="background-color:#CCCCCC;"><span class="b-goods-f__list-title">Km :</span><span class="b-goods-f__list-info"><?php echo $row['Km']; ?>km</span></li>
                                              <li class="b-goods-f__list-item" style="background-color:#CCCCCC;"><span class="b-goods-f__list-title">Año :</span><span class="b-goods-f__list-info"><?php echo $row['Year']; ?></span></li>
                                              <li class="b-goods-f__list-item" style="background-color:#CCCCCC;"><span class="b-goods-f__list-title">Transmision :</span><span class="b-goods-f__list-info"><?php echo $row['Transmission']; ?></span></li>
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
                      <?php } ?>
                      <?php }
                    
                    }else{

                        if ($todos_carros->num_rows > 0) { ?>
                                
                          <div id="registros" class="b-goods-group row">

                           <?php while ($row = $todos_carros->fetch_assoc()) {  ?>
                              <a href="https://automarketpanama.com/dev/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
                                <div class="b-goods-f col-lg-4 col-md-6 registro">
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
                                                  <small style="font-size:10px; color:#333333;">Precio sin impuesto</small><br>
                                                  <h5 style="color:black;"><?php echo $row["Make"]. ' ' . $row["Model"]; ?></h5>
                                                  </b>
                                              </span>
                                            </div>
                                            <div class="b-goods-f__info"></div>
                                            <ul class="list-unstyled" style="color:#333333;">
                                              <li class="b-goods-f__list-item" style="background-color:#CCCCCC;"><span class="b-goods-f__list-title">Km :</span><span class="b-goods-f__list-info"><?php echo $row['Km']; ?>km</span></li>
                                              <li class="b-goods-f__list-item" style="background-color:#CCCCCC;"><span class="b-goods-f__list-title">Año :</span><span class="b-goods-f__list-info"><?php echo $row['Year']; ?></span></li>
                                              <li class="b-goods-f__list-item" style="background-color:#CCCCCC;"><span class="b-goods-f__list-title">Transmision :</span><span class="b-goods-f__list-info"><?php echo $row['Transmission']; ?></span></li>
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
                              <?php /* */ ?>
                              <?php 
                              } ?>
                          </div>
                          <div id="paginador">
                              <a href="#" id="anterior" data-pagina="prev">&lt;&lt;</a>
                              <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
                                  <a href="#" data-pagina="<?php echo $i; ?>"><?php echo '-'.$i.'-'; ?></a>
                              <?php } ?>
                              <a href="#" id="siguiente" data-pagina="next">&gt;&gt;</a>
                          </div>
                    <?php   /* ?>
                            <div style="text-align: center;">
                              <?php if(!isset($_GET['pagina'])){  }else{ ?>
                              <a href="?pagina=<?php echo $_GET['pagina'] - 1; ?>"> << </a> <?php } ?>
                              <?php for ($pagina = 1; $pagina <= $numero_paginas; $pagina++) {

                                          if ($pagina == $_GET['pagina']) {
                                            $class = 'class="btn-sm btn-primary"';
                                          }else {
                                            $class = '';
                                          }

                                          if (!isset($_GET['pagina']) && $pagina == 1) {
                                            $class = 'class="btn-sm btn-primary"';
                                          }

                                          echo '<a '.$class.' href="?pagina=' . $pagina . '">' . $pagina . '</a> ';
                                      } ?>

                              <?php if(!isset($_GET['pagina'])){ $siguiente=1; }else{ $siguiente = $_GET['pagina']; } ?>
                              <a href="?pagina=<?php echo $siguiente + 1; ?>"> >> </a>
                            </div>
                            */ ?>
                    <?php } 
                  } ?>
                </main>
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
                        <div class="b-bnr-3__info"></div><a class="b-bnr-3__btn btn btn-primary" href="https://automarketpanama.com/dev/public/listing">Aplica aqui</a>
                    </div>
                </div>
            </div>
        </section>
        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?> 
      </div>
    </div>
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>