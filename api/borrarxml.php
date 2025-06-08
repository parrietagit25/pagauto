<?php
$file = 'output.xml';
if (file_exists($file)) {
    $handle = fopen($file, 'w');
    if ($handle) {
        fclose($handle);
        echo "El contenido del archivo ha sido borrado.";
    } else {
        echo "Error al intentar abrir el archivo.";
    }
} else {
    echo "El archivo no existe.";
}
?>
