<?php
header("Content-Type: application/json");

// Configuración de la base de datos
$host = "localhost";
$usuario = "autopedro";
$contraseña = "Chicho1787$$$";
$dbname = "automarketdev";

// Conectar a MySQL
$conn = new mysqli($host, $usuario, $contraseña, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Error de conexión a la base de datos: " . $conn->connect_error]));
}

// Recibir datos JSON
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["commonid"])) {
    echo json_encode(["error" => "Datos inválidos"]);
    exit;
}

// Preparar la consulta SQL
$stmt = $conn->prepare("INSERT INTO reservas (commonid, resnumber, ranumber, company, dateout, datein, 
                        reservedclass, customer, dateadded, locationcodeout, locationcodein, resstatus) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("issssssssssi",
    $data["commonid"],
    $data["resnumber"],
    $data["ranumber"],
    $data["company"],
    $data["dateout"],
    $data["datein"],
    $data["reservedclass"],
    $data["customer"],
    $data["dateadded"],
    $data["locationcodeout"],
    $data["locationcodein"],
    $data["resstatus"]
);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Registro insertado"]);
} else {
    echo json_encode(["error" => "Error al insertar: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
