<?php 

$host = "localhost";
$usuario = "autopedro";
$contraseña = "Chicho1787$$$";
$dbname = "automarketdev";

$conn = new mysqli($host, $usuario, $contraseña, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Automarket_Invs_web where stat_master = 1";
$result = $conn->query($sql);

$db_vins = array();
while($row = $result->fetch_assoc()) { ?>
    <?php echo 'Placa: <b>'.$row['LicensePlate'].'</b> Modelo: <b>'.$row['Model'].'</b> Marca: <b>'.$row['Make'].'</b> <br>'; /*?>
    <iframe id="miIframe" src="https://spins.impel.io/automarketpanama/<?php echo $row['LicensePlate']; ?>" width="100" height="100" style="border:none; display:block;" 
            onload="checkIframeLoaded();" onerror="showDefaultImage();">
        Tu navegador no soporta iframes.
    </iframe>
    <br>

    <?php */ }

$conn->close();