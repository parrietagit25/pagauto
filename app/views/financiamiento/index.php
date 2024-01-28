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
            <div class="container">
                <div class="row">
                    <p>En Automarket contamos con un departamento especializado en asesorar, gestionar y negociar las condiciones más favorables para tu financiamiento y seguro para tu próximo vehículo. Mantenemos relaciones sólidas con las principales entidades bancarias y financieras, asegurándote opciones las mejores opciones adaptadas a tus necesidades.</p> 
                    <p>Además, brindamos el apoyo en la adquisición de póliza, garantizando la protección integral de tu inversión. </p>
                    <p>En AutoMarket, la calidad y excelencia en nuestros productos y servicios son nuestra prioridad. Estamos comprometidos a brindarte una experiencia de compra sin igual. ¡Permítenos servirte y hacer realidad la adquisición de tu Seminuevo de manera sencilla y segura! </p>
                </div>
            </div>
            <br>
            <br>
          <!-- end .b-gallery-->
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
          <!-- end .b-brands-->
        </main>
        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
    
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>