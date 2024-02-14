<?php $result = obtenerDatos(8);
      $seis = obtener6Mark();
      $tres = obtenerDatos(3);
      $diesiseis = obtenerDatos(16);
      $uno = obtenerDatos(1);
      $marcas = obtenerMarcas();
      $vendedores4 = obtenerVendedores(13);
      $todas_marcas = get_marcas();
      $todos_modelos = get_modelos();
      $tipo_carro = get_tipo_carro();
      $tipo_carro2 = get_tipo_carro();
      $bancos = get_bancos();

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
            <h3>INICIO > <span style="color:red;">FINANCIAMIENTO</span></h3>
        </div>
        
        <!-- end .b-title-page-->
        <main>
            <br>
            <br>
            <?php if (isset($_GET['tipo_f']) && $_GET['tipo_f']=='asalariados') { ?>
              <div class="container">
                  <div class="row">
                    <div class="col-12" style="font-size:18px;">
                      <h2>REQUISITOS ASALARIADOS</h2>
                      <ul style="padding-top:20px;">
                        <li style="font-size:20px;">Solicitud de Crédito </li>
                        <li>Copia de Cédula / Pasaporte </li>
                        <li>Copia de Licencia </li>
                        <li>Carta de Trabajo</li>
                        <li>Permiso de trabajo vigente ( extranjeros) </li>
                        <li>Copia de Ficha/Talonarios </li>
                        <li>Copia de Recibo de Luz/Agua </li>
                      </ul>
                    </div>
                      <div class="col-12">
                        <h2 style="padding-top:20px;">Requisitos</h2>
                        <div class="d-flex justify-content-between">
                            <a href="/dev/public/financiamiento?tipo_f=asalariados" class="btn btn-primary">Asalariados</a>
                            <a href="/dev/public/financiamiento?tipo_f=independientes" class="btn btn-primary">Independientes</a>
                            <a href="/dev/public/financiamiento?tipo_f=juridicos" class="btn btn-primary">Jurídicos</a>
                        </div>
                      </div>
                  </div>
              </div>
          <?php }elseif(isset($_GET['tipo_f']) && $_GET['tipo_f']=='independientes'){ ?> 
            
            <div class="container">
              <div class="row">
                <div class="col-12" style="font-size:18px;">
                  <h2>REQUISITOS INDEPENDIENTES</h2>
                    <ul style="padding-top:20px;">
                      <li style="font-size:20px;">Solicitud de Crédito </li>
                      <li>Copia de Cédula/ pasaporte </li>
                      <li>Copia de Licencia </li>
                      <li>2 últimas declaraciones de Renta </li>
                      <li>Certificados de Recepción, Paz y Salvo  </li>
                      <li>Copia de Recibo de Luz/Agua </li>
                    </ul>
                  </div>
                  <div class="col-12">
                    <h2 style="padding-top:20px;">Requisitos</h2>
                    <div class="d-flex justify-content-between" style="padding-top:20px;">
                        <a href="/dev/public/financiamiento?tipo_f=asalariados" class="btn btn-primary">Asalariados</a>
                        <a href="/dev/public/financiamiento?tipo_f=independientes" class="btn btn-primary">Independientes</a>
                        <a href="/dev/public/financiamiento?tipo_f=juridicos" class="btn btn-primary">Jurídicos</a>
                    </div>
                  </div>
              </div>
          </div>
            
          <?php }elseif(isset($_GET['tipo_f']) && $_GET['tipo_f']=='juridicos'){ ?>

            <div class="container">
                <div class="row">
                  <div class="col-12" style="font-size:18px;">
                    <h2>REQUISITOS PERSONA JURÍDICA </h2>
                      <ul style="padding-top:20px;">
                        <li style="font-size:20px;">Solicitud de Crédito </li>
                        <li>Copia de Cédula/ pasaporte </li>
                        <li>Copia de Licencia </li>
                        <li>2 últimas declaraciones de Renta </li>
                        <li>Certificados de Recepción, Paz y Salvo </li>
                        <li>Aviso de Operaciones </li>
                        <li>Movimientos bancarios ( últimos 6 meses) </li>
                        <li>Copia de Recibo de Luz/Agua </li>
                      </ul>
                    </div>
                    <div class="col-12">
                      <h2 style="padding-top:20px;">Requisitos</h2>
                      <div class="d-flex justify-content-between" style="padding-top:20px;">
                          <a href="/dev/public/financiamiento?tipo_f=asalariados" class="btn btn-primary">Asalariados</a>
                          <a href="/dev/public/financiamiento?tipo_f=independientes" class="btn btn-primary">Independientes</a>
                          <a href="/dev/public/financiamiento?tipo_f=juridicos" class="btn btn-primary">Jurídicos</a>
                      </div>
                    </div>
                </div>
            </div>

          <?php }else{ ?>

            <div class="container">
                <div class="row">
                  <div class="col-6" style="font-size:20px; padding-top:20px;">
                    <p>En Automarket contamos con un departamento especializado en asesorar, gestionar y negociar las condiciones más favorables para tu financiamiento y seguro para tu próximo vehículo. Mantenemos relaciones sólidas con las principales entidades bancarias y financieras, asegurándote opciones las mejores opciones adaptadas a tus necesidades.</p> 
                    <p>Además, brindamos el apoyo en la adquisición de póliza, garantizando la protección integral de tu inversión. </p>
                    <p>En AutoMarket, la calidad y excelencia en nuestros productos y servicios son nuestra prioridad. Estamos comprometidos a brindarte una experiencia de compra sin igual. ¡Permítenos servirte y hacer realidad la adquisición de tu Seminuevo de manera sencilla y segura! </p>
                  </div>
                  <div class="col-6">
                    <img src="/dev/public/assets/media/financiamiento/financiamiento.png" style="height:100%;" alt="" srcset="">
                  </div>
                    <div class="col-12">
                      <h2 style="padding-top:20px;">Requisitos</h2>
                      <div class="d-flex justify-content-between" style="padding-top:20px;">
                          <a href="/dev/public/financiamiento?tipo_f=asalariados" class="btn btn-primary">Asalariados</a>
                          <a href="/dev/public/financiamiento?tipo_f=independientes" class="btn btn-primary">Independientes</a>
                          <a href="/dev/public/financiamiento?tipo_f=juridicos" class="btn btn-primary">Jurídicos</a>
                      </div>
                    </div>
                </div>
            </div>

            <?php } ?>
            <br>
            <br>

            <div class="container" style="display: flex; justify-content: center; align-items: center;">
                <div class="row">
                    <div class="col-12">
                      <img src="/dev/public/assets/media/financiamiento/ANATOMÍA-DEL-SEMINUEVO.png" alt="" srcset="">
                    </div>
                </div>
            </div>

          <!-- end .b-gallery-->
          <div class="section-brands">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="section-brands__inner">
                    <div class="b-brands-2 row">
                      <?php while ($bank=$bancos->fetch_assoc()) { ?>  
                      <div class="col-md col-12">
                        <div class="b-brands-2__item"><img class="b-brands-2__img img-fluid" src="<?php echo $bank['ima_bank']; ?>" alt="foto"/></div>
                      </div>
                      <?php } ?>
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