<?php
$host = "localhost";
$usuario = "autopedro";
$contraseña = "Chicho1787$$$";
$dbname = "automarketdev";

$conn = new mysqli($host, $usuario, $contraseña, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "
    SELECT VIN, Year, Transmission, Color, Make, Km, Code,
           LicensePlate, Model, Chasis, Unit, Engine, Fuel, Price,
           PriceTax, Doors, CarType, CC, LocationCode, LocationName,
           Interior, Headline, Description, Photo, Status, Marked,
           Promo, PromoPrice, PromoPriceTax, LoadDate, trg_updatefechaWeb,
           update_stat, Prefijo, Internacional, tipo_compra
    FROM Automarket_Invs_web WHERE LicensePlate IS NOT NULL
";

$result = $conn->query($sql);

$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;

$import = $dom->createElement('import');
$dom->appendChild($import);

$settings = $dom->createElement('settings');
$import->appendChild($settings);

$type = $dom->createElement('type');
$type->appendChild($dom->createCDATASection('auto'));
$settings->appendChild($type);

$language = $dom->createElement('language');
$language->appendChild($dom->createCDATASection('es'));
$settings->appendChild($language);

while ($row = $result->fetch_assoc()) {
    if (empty($row['LicensePlate']) || $row['LicensePlate'] == '' || $row['LicensePlate'] == ' ') {
        continue;
    }
    $items = $dom->createElement('items');
    $import->appendChild($items);
    $item = $dom->createElement('item');
    $items->appendChild($item);

    $required = $dom->createElement('required');
    $item->appendChild($required);

    $ad = $dom->createElement('ad');
    $required->appendChild($ad);

    $sourceid = $dom->createElement('sourceid');
    $sourceid->appendChild($dom->createCDATASection($row['LicensePlate']));
    $ad->appendChild($sourceid);

    $countryid = $dom->createElement('countryid', '934');
    $ad->appendChild($countryid);

    $categoryid = $dom->createElement('categoryid', '109');
    $ad->appendChild($categoryid);

    $regionid = $dom->createElement('regionid', '1377');
    $ad->appendChild($regionid);

    $title = $dom->createElement('title');
    $title->appendChild($dom->createCDATASection($row['Make'] . ' ' . $row['Model'] . ' - ' . $row['Year'] . ' - ' . $row['Code'] . ' - Automarket'));
    $ad->appendChild($title);

    $currency = $dom->createElement('currency');
    $currency->appendChild($dom->createCDATASection('USD'));
    $ad->appendChild($currency);

    $price = $dom->createElement('price', $row['Price']);
    $ad->appendChild($price);

    $make = $dom->createElement('make');
    $make->appendChild($dom->createCDATASection(ucfirst(strtolower($row['Make']))));
    $ad->appendChild($make);

    $model = $dom->createElement('model');
    $model->appendChild($dom->createCDATASection(ucfirst(strtolower($row['Model']))));
    $ad->appendChild($model);

    $year = $dom->createElement('year', $row['Year']);
    $ad->appendChild($year);

    $mileage = $dom->createElement('mileage', $row['Km']);
    $ad->appendChild($mileage);

    $fuel = $dom->createElement('fuel');
    $fuel_value = (strtolower($row['Fuel']) == 'gasolina sin plomo') ? 'Gasolina' : $row['Fuel'];
    $fuel->appendChild($dom->createCDATASection($fuel_value));
    $ad->appendChild($fuel);

    $trans = $dom->createElement('trans');
    $trans_value = $row['Transmission'];
    if ($trans_value == 'AUTOMATICO') {
        $trans_value = 'Automática';
    } elseif ($trans_value == 'MANUAL') {
        $trans_value = 'Manual';
    } elseif ($trans_value == 'AUTOMATICA') { 
        $trans_value = 'Automática';
    }
    $trans->appendChild($dom->createCDATASection($trans_value));
    $ad->appendChild($trans);

    $saletype = $dom->createElement('saletype');
    $saletype->appendChild($dom->createCDATASection('Distribuidor de Autos Usados'));
    $ad->appendChild($saletype);

    $uhaschat = $dom->createElement('uhaschat');
    $uhaschat->appendChild($dom->createCDATASection('No chats'));
    $ad->appendChild($uhaschat);

    $contact = $dom->createElement('contact');
    $required->appendChild($contact);

    $email = $dom->createElement('email');
    $email->appendChild($dom->createCDATASection('ventas@automarketpan.com'));
    $contact->appendChild($email);

    $city = $dom->createElement('city');
    $city->appendChild($dom->createCDATASection('Panama'));
    $contact->appendChild($city);

    $phone = $dom->createElement('phone');
    $phone->appendChild($dom->createCDATASection('00507 2792789'));
    $contact->appendChild($phone);

    $uhaschat_contact = $dom->createElement('uhaschat');
    $uhaschat_contact->appendChild($dom->createCDATASection('No chats'));
    $contact->appendChild($uhaschat_contact);

    $contact_name = $dom->createElement('contact');
    $contact_name->appendChild($dom->createCDATASection('Automarket Seminuevo'));
    $contact->appendChild($contact_name);

    // Crear la sección opcional
    $optional = $dom->createElement('optional');
    $item->appendChild($optional);

    $ad_optional = $dom->createElement('ad');
    $optional->appendChild($ad_optional);

    $descr = $dom->createElement('descr');
    $descr->appendChild($dom->createCDATASection(' ')); // Inicialmente con espacio
    $ad_optional->appendChild($descr);

    $extcolor = $dom->createElement('extcolor');
    $extcolor->appendChild($dom->createCDATASection($row['Color']));
    $ad_optional->appendChild($extcolor);

    /*
    $photo_base = preg_replace('/_cu-\d+\.jpg$/', '', $row['Photo']); // Remover cualquier sufijo _cu-<n>.jpg
    for ($i = 0; $i < 9; $i++) {
        $picture = $dom->createElement('picture');
        $picture->appendChild($dom->createCDATASection($photo_base . '_cu-' . $i . '.jpg'));
        $ad_optional->appendChild($picture);
    } */

    $photo_url = $row['Photo']; // URL proporcionada en el campo 'Photo'

    // Identificar si la URL proviene de Amazon S3 o de Impel.io
    if (strpos($photo_url, 'automarketpan.s3') !== false) {
        // Caso 1: Amazon S3
        $photo_base = preg_replace('/_cu-\d+\.jpg$/', '', $photo_url); // Base URL limpia
    
        // Generar imágenes numeradas desde _cu-0.jpg hasta _cu-8.jpg
        for ($i = 0; $i <= 8; $i++) {
            $picture = $dom->createElement('picture');
            $picture->appendChild($dom->createCDATASection($photo_base . '_cu-' . $i . '.jpg'));
            $ad_optional->appendChild($picture);
        }
    } elseif (strpos($photo_url, 'cdn.impel.io') !== false) {
        // Caso 2: CDN Impel.io
        // Limpiar la URL base eliminando cualquier sufijo '/closeups/cu-x.jpg' o '/closeups/srp_bg_vb_led.jpg'
        $photo_base = preg_replace('/\/closeups\/(cu-\d+|srp_bg_vb_led)\.jpg$/', '', $photo_url);
    
        // Agregar la imagen principal 'srp_bg_vb_led.jpg'
        $picture_main = $dom->createElement('picture');
        $picture_main->appendChild($dom->createCDATASection($photo_base . '/closeups/srp_bg_vb_led.jpg'));
        $ad_optional->appendChild($picture_main);
    
        // Generar las imágenes numeradas desde cu-1.jpg hasta cu-8.jpg
        for ($i = 1; $i <= 8; $i++) {
            $picture_numbered = $dom->createElement('picture');
            $picture_numbered->appendChild($dom->createCDATASection($photo_base . '/closeups/cu-' . $i . '.jpg'));
            $ad_optional->appendChild($picture_numbered);
        }
    } else {
        // Caso 3: URL desconocida, usar como está
        $picture_original = $dom->createElement('picture');
        $picture_original->appendChild($dom->createCDATASection($photo_url));
        $ad_optional->appendChild($picture_original);
    }
    


    $contact_optional = $dom->createElement('contact');
    $optional->appendChild($contact_optional);

    $company = $dom->createElement('company');
    $company->appendChild($dom->createCDATASection('Automarket'));
    $contact_optional->appendChild($company);

    $addr = $dom->createElement('addr');
    $addr->appendChild($dom->createCDATASection('Tumba Muerto Via Ricardo J. Alfaro-Via Israel-Penonome'));
    $contact_optional->appendChild($addr);

    $phone2 = $dom->createElement('phone2');
    $phone2->appendChild($dom->createCDATASection('00507 69590953'));
    $contact_optional->appendChild($phone2);

    $url = $dom->createElement('url');
    $url->appendChild($dom->createCDATASection('http://www.automarketpanama.com'));
    $contact_optional->appendChild($url);
}

$xml_string = $dom->saveXML();

$xml_string = str_replace(
    ['<descr><![CDATA[ ]]>', '<descr><![CDATA[]]>'],
    '<descr><![CDATA[Los precios no incluyen Impuestos.]]>',
    $xml_string
);

file_put_contents('output.xml', $xml_string);

$conn->close();

echo "Archivo XML generado exitosamente.\n";
?>
