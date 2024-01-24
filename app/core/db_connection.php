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
    $sql = "SELECT * FROM Automarket_Invs_web WHERE Photo NOT IN ('') ORDER BY RAND() LIMIT $number";
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
    $sql = "SELECT Make, count(*) as contar FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY Make";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;

}

function get_marcas_filtros(){

    $conn = conectarDB();
    $sql = "SELECT Make, count(*) as contar FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY Make";
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
    $sql = "SELECT CarType, count(*) as contar FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY CarType";
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

function insertar_email_cliente($email){ 
    $conn = conectarDB();
    $sql = "INSERT INTO email_web(email, ip)VALUES('".$email."', '".$_SERVER['REMOTE_ADDR']."')";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return 1;
}

function formulario_contacto($nombre, $email, $telefono, $quebusca, $detalles){


    $para      = 'rventas@automarket.com'; // Cambia esto por el correo del destinatario
    $titulo    = 'Mensaje desde la web de Automarket';
    $mensaje   = 'Una persona escribio desde la web de Automarket
                  Nombre: '.$nombre.' 
                  Email: '.$email.' 
                  Telefono: '.$telefono.' 
                  Que esta buscando: '.$quebusca.'.
                  Detalles: '.$detalles.' ';
    $cabeceras = 'From: pedro.arrieta@grupopcr.com.pa' . "\r\n" . // Cambia esto por tu dirección de correo
    'Reply-To: pedro.arrieta@grupopcr.com.pa' . "\r\n" . // Cambia esto por tu dirección de correo
    'X-Mailer: PHP/' . phpversion();

    mail($para, $titulo, $mensaje, $cabeceras);

    $conn = conectarDB();
    $sql = "INSERT INTO contacto(nombre, email, telefono, que_buscas, detalles, ip)VALUES('".$nombre."', '".$email."', '".$telefono."', '".$quebusca."' , '".$detalles."', '".$_SERVER['REMOTE_ADDR']."')";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return 1;

}

function get_marcas_formulario_principal($marca){

    $conn = conectarDB();
    $sql = "SELECT Model FROM Automarket_Invs_web WHERE Photo NOT IN ('') AND Make = '".$marca."' GROUP BY Model";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;

}

function get_ubicacion_filtro(){

    $conn = conectarDB();
    $sql = "SELECT LocationName FROM Automarket_Invs_web WHERE Photo NOT IN ('') GROUP BY LocationName";
    $result = $conn->query($sql);
    cerrarDB($conn);
    return $result;

}

function total_registros(){

    $conn = conectarDB();
    $resultado = $conn->query("SELECT COUNT(*) AS total FROM Automarket_Invs_web WHERE Photo NOT IN ('')");
    $fila = $resultado->fetch_assoc();
    $total_registros = $fila['total'];
    return $total_registros;
}

function reg_pag_actual($inicio, $registros_por_pagina){
    $conn = conectarDB();
    $sql = "SELECT * FROM Automarket_Invs_web WHERE Photo NOT IN ('') LIMIT $inicio, $registros_por_pagina";
    $resultado = $conn->query($sql);
    return $resultado;
}

function get_autos_precio_similar($precio){
    $conn = conectarDB();
    $sql = "SELECT * FROM Automarket_Invs_web WHERE Photo NOT IN ('') and Price like %$precio%";
    $resultado = $conn->query($sql);
    return $resultado;
}

?>
