
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
         <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <?php include(ROOT_PATH . '/app/views/partials/menu2.php'); ?>


        <div class="container">
          <h3 class="titulo-nuestro-equipo">INICIO > <span style="color:red;">POLÍTICAS DE DEVOLUCIÓN </span></h3>
        </div>
        <!-- end .b-title-page-->

        <div class="l-main-content">
          <div class="container">

            <section class="b-goods-f">
                <div class="row">
                    <div class="col-lg-8">
                    <div class="ui-subtitle"></div>
                    <h1 class="ui-title text-uppercase"></h1>
                    </div>
                    <div class="col-lg-4">
                        <div class="b-goods-f-price">
                        </div>
                    </div>
                </div>

              <div class="row">
                <div class="col-lg-12">
                    <h4>POLÍTICAS DE DEVOLUCIÓN </h4>
                    <p>En Automarket Panamá, valoramos la satisfacción del cliente y nos esforzamos por brindar un servicio transparente y justo en todas nuestras transacciones. A continuación, detallamos nuestra política de devolución de abono:</p>
                    <b>Devolución de Abono: </b>
                    <p>Si por algún motivo el cliente decide cancelar su reserva, Automarket procederá a devolver el abono realizado por el cliente. </p>
                    <b>Se aplicará un cargo por manejo de transacción del 20% sobre el abono total como compensación por los costos administrativos asociados con la reserva y cancelación. </b>
                    <p>La devolución se realizará dentro de un plazo de entre 7 a 15 días hábiles después de la cancelación. (El tiempo puede ser mayor sujeto a los tiempos de procesamiento bancario si el abono fue realizado por medio de tarjeta de crédito). </p>
                    <b>Proceso de cancelación de reserva: </b>
                    <p>En Automarket, entendemos que las circunstancias pueden cambiar, y estamos comprometidos a facilitar al máximo el proceso de cancelación de reserva para nuestros clientes.  </p>
                    <b>A continuación, detallamos el proceso paso a paso: </b>
                    <p>Comunicación Inicial: Si necesita cancelar tu reserva, comuníquese con su asesor de ventas. Puede comunicarse vía telefónica, por correo electrónico o visitando la sucursal donde recibió la atención. </p>
                    <p>Proporcione la información del vehículo reservado: Al contactarnos, proporcione la información relevante sobre el vehículo que abonó, como: Marca, Modelo y Placa.</p>
                    <p>Confirmación de Cancelación: Nuestro equipo de atención le guiará a través del proceso de cancelación y le proporcionará una confirmación por escrito una vez que se haya completado la cancelación. </p>
                  <aside class="l-sidebar">

                  </aside>
                </div>
              </div>
            </section>
            <!-- end .b-goods-f-->
            
          </div>
        </div>


        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>