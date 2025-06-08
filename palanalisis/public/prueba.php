<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Cámara con getUserMedia</title>
    <style>
        video {
            width: 100%;
            max-width: 600px;
            height: auto;
            border: 2px solid #000;
            border-radius: 10px;
            margin: 20px auto;
            display: block;
        }

        #status {
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
        }

        select {
            display: block;
            margin: 10px auto;
            padding: 10px;
            font-size: 1em;
        }
    </style>
</head>
<body>

<h1 style="text-align: center;">Captura de Cámara</h1>
<p id="status">Cargando cámaras...</p>

<!-- Dropdown para seleccionar la cámara -->
<select id="cameraSelect"></select>

<!-- Video para mostrar la cámara seleccionada -->
<video id="video" autoplay></video>

<script>
    let videoElement = document.getElementById('video');
    let cameraSelect = document.getElementById('cameraSelect');
    let statusElement = document.getElementById('status');
    let stream = null;

    // Enumerar las cámaras disponibles
    navigator.mediaDevices.enumerateDevices()
        .then(function (devices) {
            let videoDevices = devices.filter(device => device.kind === 'videoinput');
            if (videoDevices.length > 0) {
                // Llenar el dropdown con las cámaras disponibles
                videoDevices.forEach((device, index) => {
                    let option = document.createElement('option');
                    option.value = device.deviceId;
                    option.text = device.label || `Cámara ${index + 1}`;
                    cameraSelect.appendChild(option);
                });

                // Iniciar la primera cámara por defecto
                startCamera(videoDevices[0].deviceId);
                statusElement.innerHTML = "Cámara activa. Apunte hacia un objeto.";
            } else {
                statusElement.innerHTML = "No se encontraron cámaras.";
            }
        })
        .catch(function (err) {
            console.error("Error al enumerar dispositivos: ", err);
            statusElement.innerHTML = "Error al acceder a la cámara: " + err;
        });

    // Cambiar cámara cuando el usuario selecciona otra
    cameraSelect.addEventListener('change', function () {
        let deviceId = cameraSelect.value;
        if (stream) {
            stream.getTracks().forEach(track => track.stop()); // Detener la transmisión actual
        }
        startCamera(deviceId); // Iniciar la nueva cámara
    });

    // Función para iniciar la cámara con el deviceId seleccionado
    function startCamera(deviceId) {
        navigator.mediaDevices.getUserMedia({
            video: {
                deviceId: deviceId ? { exact: deviceId } : undefined
            }
        })
        .then(function (mediaStream) {
            stream = mediaStream;
            videoElement.srcObject = mediaStream;
        })
        .catch(function (err) {
            console.error("Error al iniciar la cámara: ", err);
            statusElement.innerHTML = "Error al iniciar la cámara: " + err;
        });
    }
</script>

</body>
</html>
