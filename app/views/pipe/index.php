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
          <h3 class="titulo-nuestro-equipo">INICIO > <span style="color:red;">APLICA YA</span></h3>
        </div>

        <main class="">
          <div class="container">
            <br>
            <h1 class="ui-title-inner text-center">Llena el formulario para aplicar <span class="text-primary"> </span></h1>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <section class="">
                  <div id="success"></div>
                  <div class="pipedriveWebForms b-form-contacts ui-form" data-pd-webforms="https://webforms.pipedrive.com/f/30YpKWrA7vgJy7e4b5ECKq0ffWK2mGCUl9i11tqBbBwBPX5BI5saqtBLbUsvUUPfB"><script src="https://webforms.pipedrive.com/f/loader"></script></div>
                </section>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </main>


        <?php include(ROOT_PATH . '/app/views/partials/piedepagina.php'); ?>         
          <!-- .footer-->
      </div>
    </div>
    <!-- end layout-theme-->
<?php include(ROOT_PATH . '/app/views/partials/footer.php'); ?>