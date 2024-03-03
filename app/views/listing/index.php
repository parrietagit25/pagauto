<?php $todos_carros = all_car('','','','','','','',''); ?>
<?php $todas_marcas = get_marcas(); ?>
<?php $todos_modelos = get_modelos(); ?>
<?php $tipo_carro = get_tipo_carro(); ?>
<?php $tipo_carro2 = get_tipo_carro(); ?>
<?php $tipo_carro3 = get_tipo_carro(); ?>
<?php $anio_desde = get_from_year(); ?>
<?php $anio_desde2 = get_from_year(); ?>
<?php $anio_hasta = get_to_year(); ?>
<?php $marcas_filtros = get_marcas_filtros(); ?>
<?php $marcas_filtros_movil = get_marcas_filtros(); ?>
<?php $all_transmision = get_transmision(); ?>
<?php $filtro_ubicacion = get_ubicacion_filtro(); ?>
<?php $tipo_carro3_movil = get_tipo_carro(); ?>
<?php $anio_desde2_movil = get_from_year(); ?>
<?php $filtro_ubicacion_movil = get_ubicacion_filtro(); ?>
<?php // paginador 

$total_registros = total_registros();
$registros_por_pagina = 9;
$numero_paginas = ceil($total_registros / $registros_por_pagina);

if (isset($_POST['email_customer'])) {
  insertar_email_cliente($_POST['email_customer']);  ?>

  <script>
      alert('Registro Realizado');
  </script>

<?php  }
    include(ROOT_PATH . '/app/views/partials/header.php'); ?>
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
                        <li class="breadcrumb-item"><a href="https://automarketpanama.com/public/">Inicio</a></li>
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
          <h3 class="titulo-nuestro-equipo">INICIO > <span style="color:red;">INVENTARIO</span></h3>
        </div>

        <div class="l-main-content" style="margin-top:-90px;">
          <div class="container">
            <div class="row">

              <div class="col-lg-3" id="filtros_menu">
                <aside class="l-sidebar">
                  <div class="widget section-sidebar">
                    <h3 class="widget-title bg-dark" onclick="mostrar_filtros()"><i class="ic flaticon-car-4"></i>FILTRAR POR</h3>
                    <div class="widget-content">
                      <div class="widget-inner">
                        <form id="buscar" class="b-filter">
                          <div class="b-filter__main">
                            <div class="b-filter__row" id="filtros_listin">

                                      <div class="accordion" id="miAcordeon" style="text-align:left;">
                                        <div class="card">
                                          <div class="card-header">
                                            <h4 data-toggle="collapse" data-target="#panel1" >Marca <span class="arrow">▼</span></h4>
                                          </div>
                                          <div id="panel1" class="collapse show" data-parent="#miAcordeon">
                                            <div class="card-body">
                                              <?php while ($marca = $marcas_filtros->fetch_assoc()) { ?>
                                                  <a href="#" style="color:black;" class="filtro" data-categoria="marca" data-valor="<?php echo $marca['Make']; ?>"><?php echo $marca['Make']; ?> (<?php echo $marca['contar']; ?>) </a> <br>
                                              <?php } ?>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card">
                                          <div class="card-header">
                                            <h4 data-toggle="collapse" data-target="#panel2">Categoria <span class="arrow">▼</span></h4>
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
                                            <h4 data-toggle="collapse" data-target="#panel3">Año <span class="arrow">▼</span></h4>
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
                                            <h4 data-toggle="collapse" data-target="#panel4">Ubicación <span class="arrow">▼</span></h4>
                                          </div>
                                          <div id="panel4" class="collapse" data-parent="#miAcordeon">
                                            <div class="card-body">
                                            <?php while ($ubicacion_filtro = $filtro_ubicacion->fetch_assoc()) { ?>
                                                <a href="#" style="color:black;" class="filtro" data-categoria="ubicacion" data-valor="<?php echo $ubicacion_filtro['LocationName']; ?>"><?php echo $ubicacion_filtro['LocationName']; ?> </a> <br>
                                            <?php } ?>
                                            </div>
                                          </div>
                                        </div>
                                        <?php  /*
                                        <div class="card">
                                          <div class="card-header">
                                            <h4 data-toggle="collapse" data-target="#panel5">Precio <span class="arrow">▼</span></h4>
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
                                        */ ?>
                                        <div class="card">
                                          <div class="card-header">
                                            <i class="ic "><img width="20" src="<?php echo BASEURL; ?>media/icons/whatsapp.png" alt=""> </i>Whatsapp:+<a href="https://wa.me/50769590953" target="_blank" style="color:gray;"> 507 6959-0953</a></div>
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

              <a class="b-bnr-3__btn btn btn-primary filtros_modal" style="display: none; margin-top:40px;" id="open-popup" href="#">Filtros</a>

              <div id="my-popup" class="mfp-hide" style="background-color:white;">
                <div class="accordion" id="miAcordeon" style="text-align:left;">
                    <div class="card">
                      <div class="card-header">
                        <h4 data-toggle="collapse" data-target="#panel1_movil" >Marca <span class="arrow">▼</span></h4>
                      </div>
                      <div id="panel1_movil" class="collapse show" data-parent="#miAcordeon">
                        <div class="card-body">
                          <?php while ($marca_movil = $marcas_filtros_movil->fetch_assoc()) { ?>
                              <a href="#" style="color:black;" class="filtro" data-categoria="marca" data-valor="<?php echo $marca_movil['Make']; ?>"><?php echo $marca_movil['Make']; ?> (<?php echo $marca_movil['contar']; ?>) </a> <br>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h4 data-toggle="collapse" data-target="#panel2_movil">Categoria <span class="arrow">▼</span></h4>
                      </div>
                      <div id="panel2_movil" class="collapse" data-parent="#miAcordeon">
                        <div class="card-body">
                          <?php while ($tipo_carro_filtro_movil = $tipo_carro3_movil->fetch_assoc()) { ?>
                              <a href="#" style="color:black;" class="filtro" data-categoria="categoria" data-valor="<?php echo $tipo_carro_filtro_movil['CarType']; ?>"><?php echo $tipo_carro_filtro_movil['CarType']; ?> (<?php echo $tipo_carro_filtro_movil['contar']; ?>) </a> <br>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h4 data-toggle="collapse" data-target="#panel3_movil">Año <span class="arrow">▼</span></h4>
                      </div>
                      <div id="panel3_movil" class="collapse" data-parent="#miAcordeon">
                        <div class="card-body">
                        <?php while ($anio_filtro_movil = $anio_desde2_movil->fetch_assoc()) { ?>
                            <a href="#" style="color:black;" class="filtro" data-categoria="anio" data-valor="<?php echo $anio_filtro_movil['Year']; ?>"><?php echo $anio_filtro_movil['Year']; ?> </a> <br>
                        <?php } ?>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <h4 data-toggle="collapse" data-target="#panel4_movil">Ubicación <span class="arrow">▼</span></h4>
                      </div>
                      <div id="panel4_movil" class="collapse" data-parent="#miAcordeon">
                        <div class="card-body">
                        <?php while ($ubicacion_filtro_movil = $filtro_ubicacion_movil->fetch_assoc()) { ?>
                            <a href="#" style="color:black;" class="filtro" data-categoria="ubicacion" data-valor="<?php echo $ubicacion_filtro_movil['LocationName']; ?>"><?php echo $ubicacion_filtro_movil['LocationName']; ?> </a> <br>
                        <?php } ?>
                        </div>
                      </div>
                    </div>
                    <?php /*
                    <div class="card">
                      <div class="card-header">
                        <h4 data-toggle="collapse" data-target="#panel5_movil">Precio <span class="arrow">▼</span></h4>
                      </div>
                      <div class="b-filter-slider__main">
                        <div id="filterPrice"></div>
                        <div class="b-filter__row row">
                          <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                            <input class="ui-select" id="input-with-keypress-0"/>
                          </div>
                          <div class="b-filter__item col-md-6 col-lg-12 col-xl-6">
                            <input class="ui-select" id="input-with-keypress-1"/>
                          </div>
                        </div>
                      </div>
                      <!--<div id="panel5_movil" class="collapse" data-parent="#miAcordeon">
                        <div class="card-body">
                          <a href="#" style="color:black;" class="filtro" data-categoria="precio" data-valor="10000-29999">10,000 a 29,999</a> <br>
                          <a href="#" style="color:black;" class="filtro" data-categoria="precio" data-valor="30000-59999">30,000 a 59,999</a> <br>
                          <a href="#" style="color:black;" class="filtro" data-categoria="precio" data-valor="60000-89999">60,000 a 89,999</a> <br>
                          <a href="#" style="color:black;" class="filtro" data-categoria="precio" data-valor="90000-150000">90,000 a 150,000</a>
                        </div>
                      </div>-->
                    </div> */ ?>
                    <div class="card">
                      <div class="card-header">
                        <i class="ic "><img width="20" src="<?php echo BASEURL; ?>media/icons/whatsapp.png" alt=""> </i>Whatsapp:+<a href="https://wa.me/50769590953" target="_blank" style="color:gray;"> 507 6959-0953</a></div>
                    </div>
                  </div>
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

                              <a href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
                                <div class="b-goods-f col-lg-4 col-md-6">
                                    <div class="b-team__media"><!--b-goods-f__media-->
                                        <img width="262" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/>
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
                              <a href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
                                <div class="b-goods-f col-lg-4 col-md-6">
                                    <div class="b-team__media"><!--b-goods-f__media-->
                                        <img width="262" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/>
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
                              <a href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
                                <div class="b-goods-f col-lg-4 col-md-6 registro">
                                    <div class="b-team__media"><!--b-goods-f__media-->
                                        <img width="262" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/>
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
                              <a href="#" id="siguiente" data-pagina="next">&gt;&gt;</a>
                          </div>
                    <?php } 
                  } ?>
                </main>
              </div>
            </div>
          </div>
        </div>
        <section class="bg-light custom-section" style="background-color:white;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 custom-image" alt="" srcset=""></div>
                    <div class="col-12 col-md-6 text-center">
                        <br><br>
                        <h2 class="b-bnr-3__title ui-tilte" style="color:black;">Llévate tu seminuevo con financiamiento.</h2>
                        <a class="b-bnr-3__btn btn btn-primary" href="https://automarketpanama.com/public/listing">Aplica aquí</a>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?> 
      </div>
    </div>
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>