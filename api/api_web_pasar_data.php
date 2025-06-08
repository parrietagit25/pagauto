<?php 

/*
$secret_token = "SI5dGxz/2/AqWkOYuz6t4r3KYGbqGxOj3MhT3T/hp!J6Du9ko=6ITrMBNJU5WzUj?ep3VWb8gwxGv9RPgq?r0y=A8gdF2cJ!fWil1G??6voWqJvRdip1M?0u/sol-ON?"; // Reemplaza esto con tu token

if (!isset($_SERVER['HTTP_X_AUTH_TOKEN']) || $_SERVER['HTTP_X_AUTH_TOKEN'] != $secret_token) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Token inválido";
    exit;
} */

$host = "localhost";
$usuario = "autopedro";
$contraseña = "Chicho1787$$$";
$dbname = "automarketdev";

$conn = new mysqli($host, $usuario, $contraseña, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 
    /*
    $validacion = $conn->query("SELECT COUNT(DISTINCT Make) as marcas FROM Automarket_Invs_web_temp");

    while ($cantidad_marcas = $validacion -> fetch_array()) {
        $marcas = $cantidad_marcas['marcas'];
    }

    if ($marcas >= 8) { */
        

        $validacion_2 = $conn->query("SELECT COUNT(*) as todos_autos FROM Automarket_Invs_web_temp");

        while ($cantidad_autos = $validacion_2 -> fetch_array()) {
            $total_autos = $cantidad_autos['todos_autos'];
        }

        if ($total_autos >= 100) {

            // Insertar registros que no existen en la tabla principal
            $sqlInsert = "INSERT INTO Automarket_Invs_web
                        SELECT * FROM Automarket_Invs_web_temp
                        WHERE VIN NOT IN (SELECT VIN FROM Automarket_Invs_web)";
            $stmt = $conn->query($sqlInsert);

            // Actualizar registros existentes
            $sqlUpdate = "UPDATE Automarket_Invs_web AS target
                            INNER JOIN Automarket_Invs_web_temp AS source
                            ON target.VIN = source.VIN
                            SET target.Transmission = source.Transmission,
                                target.Color = source.Color,
                                target.Make = source.Make,
                                target.Km = source.Km,
                                target.Code = source.Code,
                                target.LicensePlate = source.LicensePlate,
                                target.Model = source.Model,
                                target.Chasis = source.Chasis,
                                target.Unit = source.Unit,
                                target.Engine = source.Engine,
                                target.Fuel = source.Fuel,
                                target.Price = source.Price,
                                target.PriceTax = source.PriceTax,
                                target.Doors = source.Doors,
                                target.CarType = source.CarType,
                                target.CC = source.CC,
                                target.LocationCode = source.LocationCode,
                                target.LocationName = source.LocationName,
                                target.Interior = source.Interior,
                                target.Headline = source.Headline,
                                target.Description = source.Description,
                                target.Photo = source.Photo,
                                target.Status = source.Status,
                                target.Marked = source.Marked,
                                target.Promo = source.Promo,
                                target.PromoPrice = source.PromoPrice,
                                target.PromoPriceTax = source.PromoPriceTax,
                                target.LoadDate = source.LoadDate,
                                target.Prefijo = source.Prefijo,
                                target.date_update = NOW(),
                                target.Year = source.Year,
                                target.trg_updatefechaWeb = source.trg_updatefechaWeb,
                                target.update_stat = source.update_stat,
                                target.stat_master = source.stat_master,
                                target.prioridad = source.prioridad,
                                target.Internacional = source.Internacional,
                                target.tipo_compra = source.tipo_compra
                            WHERE target.VIN = source.VIN";

            $stmt = $conn->query($sqlUpdate);

            // Eliminar registros que no existen en la tabla temporal
            $sqlDelete = "DELETE FROM Automarket_Invs_web
                          WHERE VIN NOT IN (SELECT VIN FROM Automarket_Invs_web_temp)";
            $stmt = $conn->query($sqlDelete);

            // eliminar los registros de la tabla temporal
            $sqlDelete = "DELETE FROM Automarket_Invs_web_temp";
            $stmt = $conn->query($sqlDelete);
            
        }else{
            $nombre_archivo = 'Error_subida.txt';
            $fecha_hora = date('Y-m-d H:i:s');
            $contenido = "ALERTA!!! hay menos de 100 vehiculos. Fecha y hora: $fecha_hora\n";
            $archivo = fopen($nombre_archivo, 'a');
            if ($archivo) {
                fwrite($archivo, $contenido);
                fclose($archivo);
                echo "El contenido se ha escrito correctamente en el archivo.";
            }
        }

    /* }else{
        $nombre_archivo = 'Error_subida.txt';
        $fecha_hora = date('Y-m-d H:i:s');
        $contenido = "ALERTA!!! hay menos de 8 marcas de vehiculos. Fecha y hora: $fecha_hora\n";
        $archivo = fopen($nombre_archivo, 'a');
        if ($archivo) {
            fwrite($archivo, $contenido);
            fclose($archivo);
            echo "El contenido se ha escrito correctamente en el archivo.";
        }
    } */


    if ($stmt) {
        echo "El pase se ha completado, todos los registros se han actualizado";
    }else {
        echo 'Ocurrio un error en el pase';
    }
    