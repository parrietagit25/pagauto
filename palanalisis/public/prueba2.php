<?php

// Datos de autenticación
$tenant_id = 'd3479728-038d-4986-8583-0bcaa8999569';
$client_id = '7846b749-fcae-40e5-9bd5-8ff9fa610ad8';
$client_secret = '_os8Q~1CtT2fRyPImx5-Vy9f0DC1_Dr4vefzNa81';
$user_id = 'cesar.asprilla@grupopcr.com.pa'; // El usuario con quien crear el chat
$my_user_id = 'pedro.arrieta@grupopcr.com.pa';  // El ID o correo del segundo usuario

// Obtener el token de acceso desde Microsoft
$token_url = "https://login.microsoftonline.com/{$tenant_id}/oauth2/v2.0/token";

$token_data = [
    'grant_type' => 'client_credentials',
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'scope' => 'https://graph.microsoft.com/.default',
];

$token_headers = [
    'Content-Type: application/x-www-form-urlencoded'
];

$ch = curl_init($token_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($token_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $token_headers);

$token_response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error obteniendo el token: ' . curl_error($ch);
    exit;
}

$token_info = json_decode($token_response, true);
$access_token = $token_info['access_token'];
curl_close($ch);

// Crear el chat (one-on-one) con el usuario
$chat_url = "https://graph.microsoft.com/v1.0/chats";
$chat_data = [
    "chatType" => "oneOnOne",
    "members" => [
        [
            "@odata.type" => "#microsoft.graph.aadUserConversationMember",
            "roles" => ["owner"],
            "user@odata.bind" => "https://graph.microsoft.com/v1.0/users('{$user_id}')"
        ],
        [
            "@odata.type" => "#microsoft.graph.aadUserConversationMember",
            "roles" => ["owner"],
            "user@odata.bind" => "https://graph.microsoft.com/v1.0/users('{$my_user_id}')"
        ]
    ]
];

$chat_headers = [
    'Authorization: Bearer ' . $access_token,
    'Content-Type: application/json'
];

$ch = curl_init($chat_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $chat_headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($chat_data));

$chat_response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error creando el chat: ' . curl_error($ch);
    exit;
}

$chat_info = json_decode($chat_response, true);

echo '<pre>';
echo var_dump($chat_info);
echo '</pre>';

if (isset($chat_info['id'])) {
    $chat_id = $chat_info['id'];
    echo '<pre>';
    echo var_dump($chat_id);
    echo '</pre>';
} else {
    echo 'Error en la creación del chat: ';
    var_dump($chat_info);
    exit;
}

curl_close($ch);

// Enviar el mensaje directo al chat
$message_url = "https://graph.microsoft.com/v1.0/chats/{$chat_id}/messages";
$message_data = [
    "body" => [
        "content" => "Este es un mensaje directo enviado desde PHP a Microsoft Teams"
    ]
];

$ch = curl_init($message_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $chat_headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message_data));

$message_response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error enviando el mensaje: ' . curl_error($ch);
} else {
    echo "Mensaje enviado correctamente a Microsoft Teams";
}

$message_response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error enviando el mensaje: ' . curl_error($ch);
} else {
    $response_info = json_decode($message_response, true);
    echo '<pre>';
    echo var_dump($response_info); // Ver el contenido de la respuesta
    echo '</pre>';
    
    if (isset($response_info['error'])) {
        echo 'Error en el envío del mensaje: ';
        var_dump($response_info['error']);
    } else {
        echo "Mensaje enviado correctamente a Microsoft Teams";
    }
}

curl_close($ch);
?>
