<?php 

include('../../core/db_connection.php');

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
        <div class="b-goods-f__sidebar"><a class="b-goods-f__bnr" href="#"><img src="assets/media/content/b-goods/auto-check.png" alt="auto check"/></a><span class="b-goods-f__price-group"><span class="b-goods-f__price"><span class="b-goods-f__price_col">msrp:&nbsp;</span><span class="b-goods-f__price-numb">$<?php echo $row['Price']; ?></span></span></span>
        </div>
    </div>
</div>

    <?php 
        }
} ?>