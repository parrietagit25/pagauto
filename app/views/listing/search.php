<?php 

include('../../core/db_connection.php');

if (isset($_POST['modelo_form_principal'])) {

    echo $_POST['modelo_form_principal'];

    $obtener_modelo = get_marcas_formulario_principal($_POST['modelo_form_principal']); ?>

    <option value=''>Seleccionar</option>

    <?php while ($row = $obtener_modelo->fetch_assoc()) { ?>

    <option value="<?php echo $row['Model']; ?>"><?php echo $row['Model']; ?></option>

    <?php } 
   
}elseif(isset($_POST['ubicacion_form_principal'])) {

    echo $_POST['ubicacion_form_principal'];

    $obtener_modelo = get_ubicacion_formulario_principal($_POST['ubicacion_form_principal']); ?>

    <option value=''>Seleccionar</option>

    <?php while ($row = $obtener_modelo->fetch_assoc()) { ?>

    <option value="<?php echo $row['LocationName']; ?>"><?php echo $row['LocationName']; ?></option>

    <?php } 
   
}elseif(isset($_POST['filtros_form_principal'])){

$marca = isset($_POST['marca']) && $_POST['marca'] !== '' ? $_POST['marca'] : '';
$categoria = isset($_POST['categoria']) && $_POST['categoria'] !== '' ? $_POST['categoria'] : '';
$anio = isset($_POST['anio']) && $_POST['anio'] !== '' ? $_POST['anio'] : '';
$ubicacion = isset($_POST['ubicacion']) && $_POST['ubicacion'] !== '' ? $_POST['ubicacion'] : '';
$precio = isset($_POST['precio']) && $_POST['precio'] !== '' ? $_POST['precio'] : '';

$todos_carros = all_car_filtro($marca, $categoria, $anio, $ubicacion, $precio); ?>
    
    <?php while ($row = $todos_carros->fetch_assoc()) { ?>

        <a class="" href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
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
    <?php 
    } ?> 

 <?php }else{

$marca = isset($_POST['marca']) && $_POST['marca'] !== '' ? $_POST['marca'] : '';

// Similar para otras variables
$modelo = isset($_POST['modelo']) && $_POST['modelo'] !== '' ? $_POST['modelo'] : '';
$tipo_vehiculo = isset($_POST['tipo_vehiculo']) && $_POST['tipo_vehiculo'] !== '' ? $_POST['tipo_vehiculo'] : '';
$desde = isset($_POST['desde']) && $_POST['desde'] !== '' ? $_POST['desde'] : '';
$hasta = isset($_POST['hasta']) && $_POST['hasta'] !== '' ? $_POST['hasta'] : '';
$transmision = isset($_POST['transmision']) && $_POST['transmision'] !== '' ? $_POST['transmision'] : '';
$min = isset($_POST['min']) && $_POST['min'] !== '' ? limpiarNumero($_POST['min']) : '';
$max = isset($_POST['max']) && $_POST['max'] !== '' ? limpiarNumero($_POST['max']) : '';

$todos_carros = all_car($marca, $modelo, $tipo_vehiculo, $desde, $hasta, $transmision, $min, $max);

if ($todos_carros->num_rows > 0) { ?>
        <?php while ($row = $todos_carros->fetch_assoc()) { ?>
                <a class="" href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
                    <div class="b-goods-f col-lg-4 col-md-6">
                        <div class="b-goods-f__media">
                            <img width="262" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/>
                            <span class="b-goods-f__media-inner">
                                <!--<span class="b-goods-f__favorite"><i class="ic far fa-star"></i></span>
                                <span class="b-goods-f__label bg-primary">NEW</span>-->
                            </span>
                        </div>
                        <div class="b-goods-f__main">
                            <div class="b-goods-f__descrip">
                                <div class="b-goods-f__title"><?php echo $row['Make'].' <br> '.$row['Model']; ?></div>
                                <div class="b-goods-f__info"></div>
                                <ul class="b-goods-f__list list-unstyled">
                                <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Km :</span><span class="b-goods-f__list-info"><?php echo $row['Km']; ?>km</span></li>
                                <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Año :</span><span class="b-goods-f__list-info"><?php echo $row['Year']; ?></span></li>
                                <li class="b-goods-f__list-item"><span class="b-goods-f__list-title">Transmision :</span><span class="b-goods-f__list-info"><?php echo $row['Transmission']; ?></span></li>
                                <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Tipo :</span><span class="b-goods-f__list-info"><?php echo $row['CarType']; ?></span></li>
                                <li class="b-goods-f__list-item b-goods-f__list-item_row"><span class="b-goods-f__list-title">Color :</span><span class="b-goods-f__list-info"><?php echo $row['Color']; ?></span></li>
                                </ul>
                            </div>
                            <div class="b-goods-f__sidebar"><a class="b-goods-f__bnr" href="#"><img src="assets/media/content/b-goods/auto-check.png" alt="auto check"/></a><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col"></span><span class="b-goods-f__price-numb">$<?php echo number_format($row["PriceTax"], 2); ?></span></span></span>
                            </div>
                        </div>
                    </div>
                </a>
        <?php } ?>
   <?php } 

}?>

