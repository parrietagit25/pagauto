<?php

$logFile = fopen("script_log_desde_python.txt", "w") or die("Unable to open file!");
fwrite($logFile, "Iniciando script...\n");

$secret_token = "SI5dGxz/2/AqWkOYuz6t4r3KYGbqGxOj3MhT3T/hp!J6Du9ko=6ITrMBNJU5WzUj?ep3VWb8gwxGv9RPgq?r0y=A8gdF2cJ!fWil1G??6voWqJvRdip1M?0u/sol-ON?"; // Reemplaza esto con tu token

if (!isset($_SERVER['HTTP_X_AUTH_TOKEN']) || $_SERVER['HTTP_X_AUTH_TOKEN'] != $secret_token) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Token inválido";
    exit;
}

$host = "localhost";
$usuario = "autopedro";
$contraseña = "Chicho1787$$$";
$dbname = "automarketdev";

$conn = new mysqli($host, $usuario, $contraseña, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 

$jsonContent = file_get_contents("php://input");
fwrite($logFile, "Contenido JSON recibido:\n" . $jsonContent . "\n");
$data = json_decode($jsonContent);

//echo json_encode($data);

if ($data) {

    $Year = $data->Year;
    $Transmission = $data->Transmission;
    $Color = $data->Color;
    $Make = $data->Make;
    $Km = $data->Km;
    $Code = $data->Code;
    $LicensePlate = $data->LicensePlate;
    $Model = $data->Model;
    $Chasis = $data->Chasis;
    $Unit = $data->Unit;
    $Engine = $data->Engine;
    $Fuel = $data->Fuel;
    $Price = $data->Price;
    $PriceTax = $data->PriceTax;
    $Doors = $data->Doors;
    $CarType = $data->CarType;
    $CC = $data->CC;
    $LocationCode = $data->LocationCode;
    $LocationName = $data->LocationName;
    $Interior = $data->Interior;
    $Headline = $data->Headline;
    $Description = $data->Description;
    $Photo = $data->Photo;
    $Status = $data->Status;
    $Marked = $data->Marked;
    $Promo = $data->Promo;
    $PromoPrice = $data->PromoPrice;
    $PromoPriceTax = $data->PromoPriceTax;
    $LoadDate = $data->LoadDate;
    $Prefijo = $data->Prefijo;
    $Internacional = $data->Internacional;
    $VIN = $data->VIN;
    $trg_updatefechaWeb = $data->trg_updatefechaWeb;
    $update_stat = $data->update_stat;

     // Verificar si el VIN ya existe en la base de datos
     $checkVin = $conn->prepare("SELECT COUNT(*) FROM Automarket_Invs_web WHERE VIN = ?");
     $checkVin->bind_param("s", $VIN);
     $checkVin->execute();
     $result = $checkVin->get_result();
     $row = $result->fetch_array();
     $count = $row[0];

     if ($count > 0) {
        // Si el VIN existe, verifica el update_stat
        if ($update_stat == 1) {
            // Actualiza el registro existente
            $stmt = $conn->query("UPDATE Automarket_Invs_web SET 
                                    Year = '".$Year."', Transmission = '".$Transmission."', Color = '".$Color."', Make = '".$Make."', Km = '".$Km."', Code = '".$Code."', 
                                    LicensePlate = '".$LicensePlate."', Model = '".$Model."', Chasis = '".$Chasis."', Unit = '".$Unit."', Engine = '".$Engine."', Fuel = '".$Fuel."', 
                                    Price = '".$Price."', PriceTax = '".$PriceTax."', Doors = '".$Doors."', CarType = '".$CarType."', CC = '".$CC."', LocationCode = '".$LocationCode."', 
                                    LocationName = '".$LocationName."', Interior = '".$Interior."', Headline = '".$Headline."', Description = '".$Description."', Photo = '".$Photo."', 
                                    Status = '".$Status."', Marked = '".$Marked."', Promo = '".$Promo."', PromoPrice = '".$PromoPrice."', PromoPriceTax = '".$PromoPriceTax."', 
                                    LoadDate = '".$LoadDate."', Prefijo = '".$Prefijo."', trg_updatefechaWeb = '".$trg_updatefechaWeb."', update_stat = '".$update_stat."', 
                                    stat_master = 1, Internacional = '".$Internacional."' WHERE VIN = '".$VIN."'");

            if ($stmt){
                echo 'Se ha actualizado el registro';
            }else{
                die("Error al actualizado la sentencia: " . $stmt->error);
            }

        }

    } else {

        $stmt = $conn->query("INSERT INTO Automarket_Invs_web 
                            (Year, Transmission, Color, Make, Km, Code, LicensePlate, Model, Chasis, Unit, Engine, Fuel, Price, PriceTax, Doors, CarType, CC, LocationCode, LocationName, Interior, Headline, Description, Photo, Status, Marked, Promo, PromoPrice, PromoPriceTax, LoadDate, Prefijo, VIN, trg_updatefechaWeb, update_stat, stat_master) 
                            VALUES ('".$Year."', '".$Transmission."', '".$Color."', '".$Make."', '".$Km."', '".$Code."', '".$LicensePlate."', '".$Model."', '".$Chasis."', '".$Unit."', '".$Engine."', '".$Fuel."', '".$Price."', '".$PriceTax."', '".$Doors."', '".$CarType."', '".$CC."', '".$LocationCode."', '".$LocationName."', '".$Interior."', '".$Headline."', '".$Description."', '".$Photo."', '".$Status."', '".$Marked."', '".$Promo."', '".$PromoPrice."', '".$PromoPriceTax."', '".$LoadDate."', '".$Prefijo."', '".$VIN."', '".$trg_updatefechaWeb."', '".$update_stat."', 1)");

        if ($stmt){
            echo 'Se ha insertado el registro';
        }else{
            die("Error al insertado la sentencia: " . $stmt->error);
        }

    }

    /* pasar a estatus 2 los registros que ya no estan en sql server */

    $vinList = array();
    
    foreach ($data as $item) {
        if (isset($item->VIN) && $item->VIN != '') {
            $vin = $conn->real_escape_string($item->VIN);
            $vinList[] = "'" . $vin . "'";
        }
    }

    $vinListString = implode(",", $vinList);

    fwrite($logFile, "VINs procesados: \n");
    fwrite($logFile, print_r($vinList, true));

    fwrite($logFile, "Consulta de actualización: \n");

    // Actualizar stat_master a 2 para VINs que no están en el JSON
    $updateSql = "UPDATE Automarket_Invs_web SET stat_master = 2 WHERE VIN NOT IN ($vinListString)";

    fwrite($logFile, $updateSql . "\n");

    $conn->query($updateSql);

    // Verificar si hubo un error en la consulta
    if ($conn->error) {
        fwrite($logFile, "Error en la consulta de actualización: " . $conn->error . "\n");
    } else {
        fwrite($logFile, "Actualización realizada con éxito.\n");
    }

    fclose($logFile);
 
     /* fin de la actualizacion status a 2 */
    
} else {
    echo 'No se recibieron datos JSON válidos';
}

$conn->close();



/* 
se agrego un campo fecha log para llevar el log del registro o actualizacion  
ALTER TABLE Automarket_Invs_web ADD COLUMN FechaActualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;

*/

?>
