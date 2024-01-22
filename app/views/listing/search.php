<?php 

include('../../core/db_connection.php');

if (isset($_POST['modelo_form_principal'])) {

    echo $_POST['modelo_form_principal'];

    $obtener_modelo = get_marcas_formulario_principal($_POST['modelo_form_principal']); ?>

    <option value=''>Seleccionar</option>

    <?php while ($row = $obtener_modelo->fetch_assoc()) { ?>

    <option value="<?php echo $row['Model']; ?>"><?php echo $row['Model']; ?></option>

    <?php } 
   
}else{

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

if ($todos_carros->num_rows > 0) {
        
    while ($row = $todos_carros->fetch_assoc()) { ?>
    <a href="https://automarketpanama.com/public/detail?placa=<?php echo $row['LicensePlate']; ?>">
        <div class="b-goods-f col-lg-4 col-md-6">
            <div class="b-goods-f__media">
                <img width="262" height="196" class="b-goods-f__img img-scale" src="<?php echo $row['Photo']; ?>" alt="foto"/>
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

    <?php 
        }
} 

}?>