<?php
// db_connection.php

function conectarDB() {
    $servername = "localhost";
    $username = "autopedro";
    $password = "Chicho1787$$$";
    $dbname = "automarketdev";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    return $conn;
}

function cerrarDB($conn) {
    $conn->close();
}

function obtenerDatos($number) {
    $conn = conectarDB();
    $sql = "SELECT * FROM Automarket_Invs_web WHERE Photo NOT IN ('') LIMIT $number";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;
}

function obtenerMarcas(){
    $conn = conectarDB();
    $sql = "SELECT Make FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY Make ORDER BY COUNT(*) DESC LIMIT 4";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;
}

function obtener6Mark() {
    $conn = conectarDB();
    $sql = "SELECT * FROM (
                SELECT 
                    *, 
                    ROW_NUMBER() OVER (PARTITION BY Make ORDER BY RAND()) as row_num
                FROM Automarket_Invs_web
                WHERE Make IN ('TOYOTA', 'HYUNDAI', 'KIA', 'SUZUKI') AND Photo NOT IN ('')
            ) AS ranked
            WHERE row_num <= 2
            LIMIT 6";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;
}

function obtenerVendedores($number) {
    $conn = conectarDB();
    $sql = "SELECT * FROM team_pcr WHERE photo NOT IN ('') ORDER BY RAND() LIMIT $number";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;
}

function get_data_car($placa) {
    $conn = conectarDB();
    $sql = "SELECT * FROM Automarket_Invs_web WHERE Photo NOT IN ('') AND LicensePlate = '".$placa."'";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;
}

function get_seller_sucur($locations){
    $conn = conectarDB();
    $sql = "SELECT * FROM team_pcr WHERE photo NOT IN ('') AND celular NOT IN ('') AND sucursal = '".$locations."' ORDER BY RAND()";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;
}

function all_car($marca, $modelo, $tipo_vehiculo, $desde, $hasta, $transmision, $min, $max) {

    $where = "";

    if ($marca != '') {
        $where .= " AND Make = '".$marca."'";
    }

    if ($modelo != '') {
        $where .= " AND Model = '".$modelo."'";
    }

    if ($tipo_vehiculo != '') {
        $where .= " AND CarType = '".$tipo_vehiculo."'";
    }

    if ($desde != '') {
        $where .= " AND Year = '".$desde."'";
    }

    if ($hasta != '') {
        $where .= " AND Year = '".$hasta."'";
    }

    if ($transmision != '') {
        $where .= " AND Transmission = '".$transmision."'";
    }

    if ($min != '') {
        $where .= " AND Price >= '".$min."'";
    }

    if ($max != '') {
        $where .= " AND Price <= '".$max."'";
    }

    $conn = conectarDB();
    $sql = "SELECT * FROM Automarket_Invs_web WHERE Photo NOT IN ('') $where";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;
}

function get_marcas(){

    $conn = conectarDB();
    $sql = "SELECT Make FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY Make";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;

}

function get_modelos(){

    $conn = conectarDB();
    $sql = "SELECT Model FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY Model";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;

}

function get_tipo_carro(){

    $conn = conectarDB();
    $sql = "SELECT CarType FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY CarType";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;

}

function get_from_year(){

    $conn = conectarDB();
    $sql = "SELECT Year FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY Year";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;

}

function get_to_year(){

    $conn = conectarDB();
    $sql = "SELECT Year FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY Year";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;

}

function get_transmision(){

    $conn = conectarDB();
    $sql = "SELECT Transmission FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY Transmission";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;

}

function limpiarNumero($numero) {
    return preg_replace('/[^\d.]/', '', $numero);
}

?>
