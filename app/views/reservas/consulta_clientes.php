<?php
header("Content-Type: application/json");

$host = "localhost";
$usuario = "autopedro";
$contraseña = "Chicho1787$$$";
$dbname = "automarketdev";

// Conectar a la base de datos
$conn = new mysqli($host, $usuario, $contraseña, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Error de conexión: " . $conn->connect_error]));
}

// Obtener la fecha de hoy
$hoy = date("Y-m-d");

// Consulta para obtener los clientes del día de hoy
$sql = "SELECT UPPER(customer) as customer FROM reservas WHERE dateout = CURDATE() AND customer IS NOT NULL AND customer != '' AND locationcodeout = 'PTY' AND resstatus = 20 GROUP BY customer ORDER BY customer ASC";
$stmt = $conn->query($sql);
//$stmt->bind_param("s", $hoy);
//$stmt->execute();
//$result = $stmt->get_result();

$clientes = [];
//if ($result->num_rows > 0) {
    while ($row = $stmt->fetch_assoc()) {
        $clientes[] = $row;
    }
//}

//print_r($clientes);

echo json_encode($clientes);

$stmt->close();
$conn->close();
?>
